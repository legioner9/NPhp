<!DOCTYPE html>
<html>

<head>
    <title>User List</title>
</head>

<body>
    <h1>User List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Age</th>
        </tr>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['age']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>