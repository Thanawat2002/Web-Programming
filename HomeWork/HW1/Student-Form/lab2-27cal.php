<!DOCTYPE html>
<html lang="en">

<head>
    <title>โปรแกรมรับค่าจากฟอร์มแบบ GET</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>



<body>
    <?php
    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $stdID = $_REQUEST['stdID'];
    $password = $_REQUEST['password'];
    $sex = $_REQUEST['sex'];
    ?>
    <div class="flex justify-center items-center  h-[100vh] rounded-t-lg overflow-hidden border-t border-l border-r border-gray-400 px-3 py-10 bg-gray-200 flex justify-center">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 ">
            <h2 class="text-xl text-center">แบบฟอร์มบันทึกข้อมูลนักศึกษา</h2><br>
            <form action="lab2-27cal.php" method="post" name="form1" id="form1">
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            ชื่อนักศึกษา
                        </label>
                        <?php echo $fname ?>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                            นามสกุลนักศึกษา
                        </label>
                        <?php echo $lname ?>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="fname">
                            รหัสนักศึกษา
                        </label>
                        <?php echo $stdID ?>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            รหัสผ่าน
                        </label>
                        <?php echo $password ?>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-1" for="grid-state">
                            เพศ
                        </label>
                        <?php
                        if ($sex == 1) {
                            echo "ชาย";
                        } else if ($sex == 2) {
                            echo "หญิง";
                        } else {
                            echo "ไม่ระบุ";
                        }
                        ?>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                            งานอดิเรก
                        </label>

                        <?php
                        if (isset($_REQUEST['hobby1'])) echo $_REQUEST['hobby1'] . "<br>";
                        if (isset($_REQUEST['hobby2'])) echo $_REQUEST['hobby2'] . "<br>";
                        if (isset($_REQUEST['hobby3'])) echo $_REQUEST['hobby3'] . "<br>";
                        ?>
                    </div>
                </div>




                <div class="md-4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        เลือกสีที่ชอบ
                    </label>

                    <?php
                    foreach ($_REQUEST['chkColor'] as $key => $value) {
                        echo $value . "<br>";
                    }
                    ?>
                </div>

                <br>

            </form>
            <div class="md-4">
                <div class="flex items-center justify-center">
                    <a href="index.php">
                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Back
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php
    // $fname = $_REQUEST['fname'];
    // $lname = $_REQUEST['lname'];
    // $ID = $_REQUEST['ID'];
    // $password = $_REQUEST['password'];
    // $sex = $_REQUEST['sex'];

    // echo "<p>";
    // echo "<b>ข้อมูลผู้ใช้ใส่มา </b><br />";
    // echo "ชื่อนักศึกษา : <i> $fname   </i> <br/>";
    // echo "นามสกุลนักศึกษา : <i> $lname </i> <br/>";
    // echo "password : <i> $password </i> <br/>";

    // if ($sex == "1")echo "sex : Male "." </i> <br/>";
    //     elseif ($sex == "2") echo "sex : Female "." </i> <br/>";

    // if(!empty($_POST["Book"]))
    // {
    //     echo $_POST["Book"]."<br>";
    // }
    // if(isset($_POST["TV"]))
    // {
    //     echo $_POST["TV"]."<br>";
    // }
    // if(!empty($_POST["sport"]))
    // {
    //     echo $_POST["sport"]."<br>";
    // }

    // for($i=0;$i<count($_POST["chkColor"]);$i++)
    // {
    //     if(trim($_POST["chkColor"][$i]) != "")
    //     {
    //         echo "chkColor $i = ".$_POST["chkColor"][$i]."<br>";
    //     }
    // }
    ?>
    <br><a href="lab2-27.html">Back</a>
</body>

</html>