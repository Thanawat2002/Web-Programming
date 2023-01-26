<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การสร้างฟอร์ม</title>
</head>
<body>
    <h1>Function Form</h1>
    <form action="function_form_02.php" method="get" name = "form1s" id="form1">
        Username : <input type="text" name="username" id="username" maxlength="10"><br>
        Password : <input type="password" name="password" id="password" maxlength="6"><br>
        ความคิดเห็น : <textarea name="comment" id="comment" cols="40" rows="5"></textarea><br>
        <br>
        <input type="submit" name="submit" id="submit" value="Submit">
        <input type="reset" name="reset" id="reset" value="Reset">
    </form>
</body>
</html>