<!DOCTYPE html>
<html>

<body>
    <!-- Heading -->
    <h3> HTML input form </h3>

    <!-- HTML form  -->
    <form method="POST">
        <h4>Please enter your First Name : </h4>
        <input type="text" name="f_name"><br>
        <h4>Please enter your Last Name : </h4>
        <input type="text" name="l_name"><br><br>

        <input type="submit" value="Display" name="submit">
    </form>
    <?php
	var_dump($_GET);     // пустой массив
	var_dump($_POST);    // массив с ключами test1 и test2
	var_dump($_REQUEST); // массив с ключами test1 и test2
?>
</body>

</html>