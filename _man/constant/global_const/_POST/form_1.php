<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method='POST'>
        <h2>Please input your name:</h2>
        <input type="text" name="name">
        <input type="submit" value="Submit Name">
    </form>
    <?php
     //Retrieve name from query string and store to a local variable
     $name = $_POST['name'];
     echo "<h3> Hello $name </h3>";
     ?>

</body>

</html>