<?

// Пример #1 Реализация опциональных методов интерфейса с помощью атрибутов

interface ActionHandler
{
    public function execute();
}

#[Attribute]
class SetUp
{
}

class CopyFile implements ActionHandler
{
    public string $fileName;
    public string $targetDirectory;

    #[SetUp]
    public function fileExists()
    {
        if (!file_exists($this->fileName)) {
            throw new RuntimeException("File does not exist");
        }
    }

    #[SetUp]
    public function targetDirectoryExists()
    {
        if (!file_exists($this->targetDirectory)) {
            mkdir($this->targetDirectory);
        } elseif (!is_dir($this->targetDirectory)) {
            throw new RuntimeException("Target directory $this->targetDirectory is not a directory");
        }
    }

    public function execute()
    {
        copy($this->fileName, $this->targetDirectory . '/' . basename($this->fileName));
    }
}

function executeAction(ActionHandler $actionHandler)
{
    $reflection = new ReflectionObject($actionHandler);

    foreach ($reflection->getMethods() as $method) {
        $attributes = $method->getAttributes(SetUp::class);

        if (count($attributes) > 0) {
            $methodName = $method->getName();

            $actionHandler->$methodName();
        }
    }

    $actionHandler->execute();
}

$copyAction = new CopyFile();
$copyAction->fileName = "/tmp/foo.jpg";
$copyAction->targetDirectory = "/home/user";

executeAction($copyAction);

// PHP Fatal error:  Uncaught RuntimeException: File does not exist in /home/st/REPOBARE/_repo/NPhp/.d/.arb/php_doc.arb/language.attributes.overview.php.html.ram/.grot/man.php:24
// Stack trace:
// #0 /home/st/REPOBARE/_repo/NPhp/.d/.arb/php_doc.arb/language.attributes.overview.php.html.ram/.grot/man.php(54): CopyFile->fileExists()
// #1 /home/st/REPOBARE/_repo/NPhp/.d/.arb/php_doc.arb/language.attributes.overview.php.html.ram/.grot/man.php(65): executeAction(Object(CopyFile))
// #2 {main}
//   thrown in /home/st/REPOBARE/_repo/NPhp/.d/.arb/php_doc.arb/language.attributes.overview.php.html.ram/.grot/man.php on line 24