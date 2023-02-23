<?php
    require 'connect.php';
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
    <center><h2>รายชื่อลูกค้า</h2></center>
    <a href="customerInsert.php">เพิ่มข้อมูลลูกค้า</a><br><br>
    <table border="1" width="100%">
        <tr>
            <th>รหัส</th>
            <th>ชื่อ-นามสกุล</th>
            <th>ที่อยู่</th>
            <th>อีเมลล์</th>
            <th>หมายเลขโทรศัพท์</th>
            <th>แก้ไข</th>
            <th>ลบ</th>
        </tr>
        <?php
            $sql = "SELECT * FROM customer ORDER BY id ASC";
            $query = $conn->query($sql);
            $i = 1;
            while ($fet = $query->fetch_object()) { ?>
            <tr>
                <td><?php echo $fet->Id ?></td>
                <td><?php echo $fet->fullname ?></td>
                <td><?php echo $fet->address ?></td>
                <td><?php echo $fet->email ?></td>
                <td><?php echo $fet->phone ?></td>
                <td><center><a href='customerUpdate.php?Id=<?php echo $fet->Id?>'>[แก้ไข]</a></center></td>
                <td><center><a href='api/api_DeleteCustomer.php?Id=<?php echo $fet->Id?>' onclick="return confirm('ยืนยันการลบข้อมูลลูกค้ารหัส <?php echo $fet->Id?>' )">[ลบ]</a>
                </center></td>
            </tr>
           <?php     
            };
        ?>
    </table>
</body>
</html>