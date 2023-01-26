<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        
        <form action="exam_02.php" method="post" name="form1" id="form1">
            <h1>การคำรวณพื้นที่</h1>
            <div>
                <input type="text" name="input1" id="input1" required><br>
                <input type="text" name="input2" id="input1" required>
            </div>

            <br>
            <input type="radio" name="area" value="square">สี่เหลี่ยมจตุรัส <br>
            <input type="radio" name="area" value="canvas">สี่เหลี่ยมผืนผ้า <br>
            <input type="radio" name="area" value="rhombic">สี่เหลี่ยมขนมเปียกปูน <br>
            <input type="radio" name="area" value="triangle">สามเหลี่ยม <br>

            <input type="submit" name="submit" id="submit" value="Submit">
            <input type="reset" name="reset" id="reset" value="Reset">
        </form>
    </center>
</body>

</html>