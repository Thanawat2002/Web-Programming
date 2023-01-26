<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การสร้างฟอร์ม</title>
</head>
<body>
    <h1>OnePage Function Form</h1>
    <?php 

    if(isset($_REQUEST['btnSubmit'])){

        function showForm($username, $password, $comment) {
            echo "Username : " . $username . "<br>";
            echo "Password : " . $password . "<br>";
            echo "Comment : " . $comment . "<br>";
            echo '<a href="onepage_function_form.php">Back</a>';
        }

        showForm($username = $_REQUEST['username'], $password = $_REQUEST['password'], $comment = $_REQUEST['comment']);

    }else { ?>
        <form action="onepage_function_form.php" method="get" name="form1" id="form1">
        Username : <input type="text" name="username" maxlength="10" /><br /> <br />
        Password : <input type="password" name="password" maxlength="6" /><br /> <br />
        ความคิดเห็น : <textarea cols="40" rows="5" name="comment"></textarea><br />
        <br />
        <input type="submit" name="btnSubmit" id="submit" value="Submit">
        <input type="reset" name="reset" id="reset" value="Reset">
    <?php 
    } 
    ?>
</body>
</html>