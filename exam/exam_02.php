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
        <h1>ผลลัพธ์</h1>

        <?php
            $input1 = $_REQUEST['input1'];
            $input2 = $_REQUEST['input2'];
            $area = $_REQUEST['area'];
            
            echo $area . "<br><br>";

            if ($area == "square") {
                square($input1, $input2);
            } elseif ($area == "canvas") {
                canvas($input1, $input2);
            } elseif ($area == "rhombic") {
                rhombic($input1, $input2);
            } elseif ($area == "triangle") {
                triangle($input1, $input2);
            }

            function square($input1, $input2) {
                echo "${input1} * ${input2} = " . $input1 * $input2;
            }
            
            function canvas($input1, $input2) {
                echo "${input1} * ${input2} = " . $input1 * $input2;
            }

            function rhombic($input1, $input2) {
                echo "${input1} * ${input2} = " . $input1 * $input2;
            }

            function triangle($input1, $input2) {
                echo "${input1} * ${input2} / 2 = " . ($input1 * $input2) / 2;
            }

        ?>
    </center>


</body>

</html>