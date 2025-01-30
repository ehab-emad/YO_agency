<?php
require "admin/functions/connect.php";

$id = $_GET['id'];
$data = $connect->query("SELECT * FROM `artical` WHERE id='$id'");
$data = $data->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YO marketing agency - YO Marketing Agency</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="css/stylesss.css">
    <link rel="icon" href="./imgs/icon.png">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
</head>

<body>
  <nav class="flex flex-a-center flex-j-between">
        <a href="#" class="logo">
            <img src="./imgs/logo.png" alt="yo agency marketing team">
        </a>
        <div class="links-con">
            <button class="res-nav-btn">
                <i class="fa-solid fa-bars"></i>
            </button>
            
            <div class="links flex ">
                <a href="./index.php"><i class="fa-solid fa-house"></i> الرئيسية</a>
                <a href="#about"><i class="fa-solid fa-person-circle-question"></i> من نحن؟</a>
                <a href="#serv"><i class="fa-solid fa-arrow-up-right-dots"></i> خدماتنا</a>
                <a href="#projects"><i class="fa-solid fa-graduation-cap"></i> كورساتنا</a>
                <a href="#team"><i class="fa-solid fa-people-group"></i> فريق العمل</a>
                <a href="#articals"><i class="fa-solid fa-file-alt"></i> مقالاتنا</a>
                <a href="#contact"><i class="fa-brands fa-teamspeak"></i> اتصل بنا</a>
            </div>
        </div>
        <div class="social">
            <a href="https://www.facebook.com/profile.php?id=61559616271573&mibextid=ZbWKwL" target="_blank">
                <i class="fa-brands fa-facebook"></i>
            </a>
            <a href="https://www.instagram.com/yoteam.agency?igsh=M2ZiczZ0bHdlcXBq" target="_blank">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="https://www.linkedin.com/in/yo-marketingagency-9267a7298/?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank">
                <i class="fa-brands fa-linkedin"></i>
            </a>
            <a href="https://www.tiktok.com/@yoteam.agency?_t=8oU7YGt1tic&_r=1" target="_blank">
                <i class="fa-brands fa-tiktok"></i>
            </a>
            <a id="darkModeToggle"><i class="fa-solid fa-moon"></i> </a>

        </div>
    </nav>

<div class="page-articalss">
    <!-- <i class="fa-solid fa-puzzle-piece"></i> <span> </span> <strong> المقال </strong> -->
<!-- </div> -->
<!-- <form  > -->
<div class="card">
                    <!-- <div> -->
                        <!-- <img src=" imgs/<?php echo $data['img'] ?>" alt="yo agency marketing team"> -->
                        <div class="info rtl">
                           <div class="content"> <p class="name">
                            <?php echo $data['art_name'] ?></p>
                  
                            <p class="description">
                            <?php echo $data['art_description'] ?> </p></div>
                           
                          <div class="image-cont">  <img class="images" src=" imgs/<?php echo $data['img'] ?>" width="100"></img></div>


                        </div>
 </div>

</div>

<footer class="flex flex-j-between">

<div class="footer-links flex gap-20 rtl">
    <a href="#">الرئيسية</a>
    <a href="#about">من نحن؟</a>
    <a href="#serv">خدماتنا</a>
    <a href="#projects">كورساتنا</a>
    <a href="#team">فريق العمل</a>
    <a href="#articals">مقالاتنا </a>
    <a href="#contact">اتصل بنا</a>
</div>

<div></div>
</footer>
<div class="powered">
<p class="logo"><span>YO marketing agency</span><span>-</span>حقوق النشر © 2024 جميع الحقوق محفوظة</p>
    </div>

    <script src="./js/jquery-3.7.1.js"></script>
    <script src="./js/mains.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
    </script>

    <script>
        (function() {
            emailjs.init({
                publicKey: "EsdO2BE3OwtdEpfoU",
            });
        })();
    </script>

</body>

</html>