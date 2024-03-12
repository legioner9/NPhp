<? 

$bar = require("foo.php");
echo $bar; // equals to "foo"

try {
    require(__DIR__ . '/foo.php');
} catch (\Throwable $e) {
    echo "This was caught: " . $e->getMessage();
}
echo $bar; // equals to "foo"
// echo " End of script.";