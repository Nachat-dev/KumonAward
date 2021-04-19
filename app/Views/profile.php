<!DOCTYPE html>
<html lang="en">


<style>
    hr.login-hr {
        border-top: 2px solid black;
    }

    input.form-control {
        border-radius: 20px !important;
    }

    html {
        background-color: lightskyblue;
    }

    body {
        background: transparent !important;
    }

    .wrapper {
        background: transparent;
        margin-top: 0px;
        margin-bottom: 0px;
    }

    @media (max-width:768px) {
        .form-signin {
            height: max-content;
            max-width: 900px;
            padding: 50px 10% 50px 10%;
            margin: 0 auto;
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, 0.1);
        }
    }

    @media (min-width:1025px) {
        .form-signin {
            height: max-content;
            max-width: 900px;
            padding: 50px 19% 50px 19%;
            margin: 0 auto;
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, 0.1);
        }
    }

    .checkbox {
        float: left;
        font-weight: normal;
    }



    input[type="text"] {
        margin-bottom: -1px;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
    }

    input[type="password"] {
        margin-bottom: 20px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    button.btn.btn-primary.login {
        background-color: lightskyblue;
        width: 100%;
        border: none;
        border-radius: 20px;
    }

    p.txt-red {
        color: red;
        font-size: 14px;
    }
</style>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/profile.css">
    <title>Profile page</title>
</head>

<body>
    <div class="container profile">
        <div class="row">
            <div class="col-3 form">

                <div class="form-group row" enctype="">

                  <img class="center img" src="/assets/accountup.png" alt="Image" />
                    <input type="file" name="stdimg" require accept="image/*">
                </div>

            </div>
            <div class="col-9 form">
                <h4 class="headerprofile">ข้อมูลนักเรียน / Student Information</h4>
                <hr />
                <div class="row">
                    <div class="col-6">
                        <?php $session = session();
                        //$stdNameTH = $session->get('studentID');?>
                        <h1><? $session['stdNameTH'].''.$session['stdNameEN'] ?></h1>
                        <lebel class="titlelebel">เลขประจำตัวนักเรียน / Student ID</lebel>
                        <input type="text" class="form-control" id="editform" name="studentID" placeholder="studentID" required="" value="<?= $session->get('stdID') ?> " readonly>
                        <lebel class="titlelebel">ชื่อนักเรียน</lebel>
                        <h1><? $session['stdNameTH'].''.$session['stdNameEN'] ?></h1>
                        <input type="text" class="form-control" id="editform" name="stdNameTH" placeholder="ชื่อนักเรียน" required="" value="<?= $session->get('stdNameTH') ?>">
                        <lebel class="titlelebel">Name</lebel>
                        <input type="text" class="form-control" id="editform" name="stdNameEN" placeholder="Student Name" required="" value="<?=  $session->get('stdNameEN')?>">

                    </div>
                    <div class="col-6">
                        <?php $session = session(); ?>
                        <lebel class="titlelebel">ศูนย์คุมอง / Centre Name</lebel>
                        <input type="text" class="form-control" id="editform" name="centreTH" placeholder="Centre" required="" value="<?= $session->get('centreEN') ?>" readonly>
                        <lebel class="titlelebel">นามสกุล</lebel>
                        <input type="text" class="form-control" id="editform" name="surnameTH" placeholder="นามสกุล" required="" value="<?= $session->get('surnameTH') ?>">
                        <lebel class="titlelebel">Surname</lebel>
                        <input type="text" class="form-control" id="editform" name="surnameEN" placeholder="Surname" required="" value="<?= $session->get('surnameEN') ?>">

                    </div>
                </div>
                <br>
                <lebel class="titlelebel">กรุณากรอกคำอ่านชื่อ-สกุล ของนักเรียน <span style="font-weight:300; font-family:kanit; color:grey">(ตัวอย่าง พอน-พระ-ราม เกิด-แสง)</span></lebel>
                <input type="text" class="form-control" id="editform" name="user" placeholder="คำอ่าน ชื่อ-นามสกุล" required="">
                </br>
                <div class="row">
                    <div class="col-1">
                        <input type="checkbox" value="check-me" id="checkbefore" name="checkbefore" />
                    </div>
                    <div class="col-10">
                        <label class="checkbox" style="margin-left:-40px">
                            ข้าพเจ้ายืนยันว่าข้าพเจ้าเป็นผู้ปกครอง หรือผู้ใช้อำนาจปกครองที่มีอำนาจกระทำการแทนนักเรียนโดยชอบตามกฏหมายและยินยอมให้ทางบริษัทฯ เก็บรวบรวม
                            ใช้ เปิดเผย รวมถึงเผยแพร่ข้อมูลส่วนบุคคลของนักเรียน (ชื่อ นามกสุล รูปถ่ายและรางวัลที่ได้รับ) ในระหว่างการเข้าร่วมกิจกรรมงานมอบรางวัลออนไลน์
                            และประมวลผลข้อมูลส่วนบุคคลของนักเรียน เพื่อนำไปใช้ในกิจกรรมทางด้านการตลาด โฆษณาและประชาสัมพันธ์ใดๆ ของบริษัทผ่านช่องทางต่างๆ
                            ซึ่งรวมถึงบนหน้าเว็บไซต์ของทางบริษัทฯ สื่อสังคมออนไลน์ ป้ายประกาศ ป้ายประชาสัมพันธ์ แผ่นพับหรือสื่อสิ่งพิมพ์ใดๆ หรือสื่อประชาสัมพันธ์อื่นๆ
                            <span class="englishversion" onclick="document.getElementById('enpopup').style.display='block'">English Version</span>
                        </label>
                    </div>
                </div>
                <hr />
                <div class="row" style="float:right; margin-bottom:30px">
                    <div id="outer">
                        <button class="inner btn btn-outline-primary my-2 my-sm-0" type="" href="/editdata">แก้ไขข้อมูล / Edit</button>
                        <button class="inner btn btn-outline-success my-2 my-sm-0" type="" href="/postdata">ส่งข้อมูล/ Submit</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>