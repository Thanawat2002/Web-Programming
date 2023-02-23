<?php
    require "../connect.php";
    $Id = $_REQUEST['Id'];

    $sql = "SELECT * FROM customer WHERE Id = '$Id' ";
    $query = $conn->query($sql);
    $fet = $query->fetch_object()
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../customerList.php" method="get">
        <center>
            <table border="1" width="50%">
                <tr>
                    <th colspan="2">แก้ไขข้อมูลลูกค้า</th>
                <tr>
                    <td colspan="2" style="color: red">*required field</td>
                </tr>
                <tr>
                    <td>รหัส : </td>
                    <td><input type="text" name="fullname" required minlength="4" placeholder="รหัส" value="<?php echo $fet->Id ?>"></td>
                </tr>
                <tr>
                    <td>ชื่อ-นามสกุล : </td>
                    <td><input type="text" name="fullname" required minlength="4" placeholder="ชื่อ-นามสกุล" value="<?php echo $fet->fullname ?>"></td>
                </tr>
                <tr>
                    <td>ที่อยู่ : </td>
                    <td><textarea name="address" id="address" cols="30" rows="5" placeholder="ที่อยู่" required><?php echo $fet->address ?></textarea>
                        <font color="red">*</font>
                    </td>
                </tr>
                <tr>
                    <td>อีเมล์ :</td>
                    <td><input type="text" name="email" placeholder="อีเมล์" required value="<?php echo $fet->email ?>"></td>
                </tr>
                <tr>
                    <td>หมายเลขโทรศัพท์</td>
                    <td><input type="text" name="phone" placeholder="หมายเลขโทรศัพท์" value="<?php echo $fet->phone ?>"></td>
                </tr>

            </table><br>

            <input type="submit" name="save" value="บันทึกข้อมูล">
            <input type="reset" name="reset" value="ล้างข้อมูล">

            <br><br>
            <a href="../customerList.php">กลับไปยัง</a>
        </center>
    </form>
</body>

</html>