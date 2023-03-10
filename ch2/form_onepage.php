<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>แบบฟอร์มบันทึกข้อมูลนักศึกษา</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">

</head>

<style>
body {
    font-family: "Kanit", serif;
    background: gainsboro;

}
</style>

<body>

    <div class="costainer p-5 m-5 bg-white">

        

        <h2 class="text-center fw-bold">แบบฟอร์มบันทึกข้อมูลนักศึกษา</h2>
        <form action="form_onepage.php" method="post" name="form1" id="form1">
            <div class="d-flex justify-content-center">
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">รหัสนักศึกษา</label>
                            <input type="text" class="form-control" name="stdId">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">ชื่อ-นามสกุลนักศึกษา</label>
                            <input type="text" class="form-control" id="" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">รหัส่ผ่าน</label>
                            <input type="password" class="form-control" name="password">
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                        <div class="mb-0">
                            <label for="" class="form-label">เพศ</label>

                        </div>
                        <div class="mb-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sex" id="sex1" value="male">
                                <label class="form-check-label" for="sex1">ชาย</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sex" id="sex2" value="female">
                                <label class="form-check-label" for="sex2">หญิง</label>
                            </div>
                        </div>

                        <div class="mb-0">
                            <label for="exampleInputEmail1" class="form-label">งานอดิเรก </label>
                        </div>
                        <div class="mb-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="hobby[]" id="hobby1"
                                    value="อ่านหนังสือ">
                                <label class="form-check-label" for="hobby1">อ่านหนังสือ</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="hobby[]" id="hobby2"
                                    value="ดูโทรทัศน์">
                                <label class="form-check-label" for="hobby2">ดูโทรทัศน์</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="hobby[]" id="hobby3"
                                    value="เล่นกีฬา">
                                <label class="form-check-label" for="hobby3">เล่นกีฬา</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">อัพโหลดข้อมูล</label>
                            <input type="file" class="form-control" id="">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">ความคิดเห็น</label>
                            <div class="form-floating">
                                <textarea name="comment" class="form-control" placeholder="Leave a comment here"
                                    id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">ความคิดเห็น</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label"> Please select color. </label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="chkColor[]" id="flexCheckDefault"
                                    value="option1">
                                <label class="form-check-label" for="">Red</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="chkColor[]" id="color1"
                                    value="option2">
                                <label class="form-check-label" for="color1">Green</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="chkColor[]" id="color2"
                                    value="option2">
                                <label class="form-check-label" for="color2">Blue</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="chkColor[]" id="color3"
                                    value="option2">
                                <label class="form-check-label" for="color3">orange</label>
                            </div>
                            <div class="form-check form-check-inline   ">
                                <input class="form-check-input" type="checkbox" name="chkColor[]" id="color4"
                                    value="option2">
                                <label class="form-check-label" for="color4">Black</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="chkColor[]" id="color5"
                                    value="option2">
                                <label class="form-check-label" for="color5">Pink</label>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center">
                            <input type="submit" name="btnSubmit" class="btn btn-success me-3"></button>
                            <button type="reset" class="btn btn-primary">reset</button>

                        </div>

                    </div>
                </div>
            </div>



        </form>

        <?php 
            if (isset($_REQUEST['btnSubmit'])) {    
                $stdId = $_REQUEST['stdId'];
                $name = $_REQUEST['name'];
                $pass = $_REQUEST['password'];
                $sex = $_REQUEST['sex'];
                $hobby = "";
                foreach ($_REQUEST['hobby'] as $key => $value) {
                    $hobby .= ( $key != count($_REQUEST['hobby'])-1 ? $value.", " : $value);
                }
        ?>

        <h2 class="text-center fw-bold mt-5"> ข้อมูลนักศึกษา</h2>
        <div class="d-flex justify-content-center">
            <div class="row">
                <div class="col-md-12">
                    <?php 
                            studentData($stdId,$name,$pass,$sex,$hobby);
                         ?>
                </div>
            </div>
        </div>
                        <div class="d-flex justify-content-center">

        <a class="btn btn-primary mt-5 " href="form_onepage.php">Back</a>
        </div>

        <?php



            }
             ?>




    </div>
</body>

</html>

<?php 
    
    function studentData($id,$name,$pass, $sex, $hobby){

    echo "<b class='fw-bolder mb-1'> รหัสนักศึกษา : "."</b>".$id."<br>";
    echo "<b class='fw-bolder mb-1'> ชื่อ-นามสกุลนักศึกษา : "."</b>".$name."<br>";
    echo "<b class='fw-bolder mb-1'> รหัส่ผ่าน : "."</b>".$pass."<br>";
    echo "<b class='fw-bolder mb-1'> เพศ : "."</b>".$sex."<br>";
    echo "<b class='fw-bolder mb-1'> งานอดิเรก : "."</b>".$hobby."<br>";

}





 ?>