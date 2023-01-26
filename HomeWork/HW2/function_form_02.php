<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Function Form</h1>
    <?php
        showForm($username = $_REQUEST['username'], $password = $_REQUEST['password'], $comment = $_REQUEST['comment']);

        function showForm($username, $password, $comment) {
            echo "Username : " . $username . "<br>";
            echo "Password : " . $password . "<br>";
            echo "Comment : " . $comment . "<br>";
        }
    ?>
    <a href="function_form_01.php">Back</a>
</body>

</html>