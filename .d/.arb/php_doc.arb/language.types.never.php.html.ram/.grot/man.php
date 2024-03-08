<? 

function sayHello(string $name): never
{
    echo "Hello, $name";
    exit(); // if we comment this line, php throws fatal error
}


sayHello("John"); // result: "Hello, John"