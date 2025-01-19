<?php
require "admin/functions/connect.php";
$banner = $connect->query("SELECT * FROM `banner` WHERE id='1'");
$banner_data = $banner->fetch_assoc();
$about = $connect->query("SELECT * FROM `about` WHERE id='1'");
$about_data = $about->fetch_assoc();
$services = $connect->query("SELECT * FROM `services` ");
$team = $connect->query("SELECT * FROM `team` ");
$articals = $connect->query("SELECT * FROM `artical` ");
$projects = $connect->query("SELECT * FROM `projects` ");
$contact = $connect->query("SELECT * FROM `contact` ");
$contact_data = $contact->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YO marketing agency - YO Marketing Agency</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="imgs/icon.png">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
</head>

<body>

    <!-- start nav -->

    <nav class="flex flex-a-center flex-j-between">
        <a href="#" class="logo">
            <img src="imgs/logo.png" alt="yo agency marketing team">
        </a>
        <div class="links-con">
            <button class="res-nav-btn">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="links flex ">
                <a href="#"><i class="fa-solid fa-house"></i> الرئيسية</a>
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
        </div>
    </nav>

    <!-- start main -->

    <main class="flex rtl flex-a-center flex-j-between">
        <div class="banner-word">
            <h1><?php echo $banner_data['main_title']; ?> <i class="fa-solid fa-chart-simple"></i></h1>
            <p>
                <?php echo $banner_data['description']; ?>
            </p>
            <div class="btns-con flex gap-20">
                <a href="#serv">خدماتنا</a>
                <a href="https://wa.me/+201080389884" target="_blank">اتصل بنا</a>
            </div>

            <img src="imgs/banner-icon (1).png" class="float-img img1" alt="yo agency marketing team">
            <img src="imgs/banner-icon (2).png" class="float-img img2" alt="yo agency marketing team">
            <img src="imgs/banner-icon (3).png" class="float-img img3" alt="yo agency marketing team">
        </div>
        <img src=" imgs/<?php echo $banner_data['img']; ?>" class="banner-img" alt="yo agency marketing team">
        <div id="about"></div>
    </main>

    <section class="about rtl flex flex-j-between flex-a-start">
        <div class="word">
            <h2 class="title"><?php echo $about_data['b1m_title']; ?></h2>
            <ul class="brief">
                <li>
                    <?php echo $about_data['b1_point1']; ?>
                </li>
                <li>
                    <?php echo $about_data['b1_point2']; ?>
                </li>
            </ul>
            <h3 class="sub-title"><?php echo $about_data['b2m_title']; ?></h3>
            <ul>
                <li>
                    <?php echo $about_data['b2_point1']; ?>
                </li>
                <li>
                    <?php echo $about_data['b2_point2']; ?>
                </li>
            </ul>
            <h3 class="sub-title"><?php echo $about_data['b3m_title']; ?></h3>
            <ul>

                <li>
                    <strong><?php echo $about_data['b3s_title1']; ?></strong>
                    <?php echo $about_data['b3_point1']; ?>
                </li>
                <li>
                    <strong><?php echo $about_data['b3s_title2']; ?></strong>
                    <?php echo $about_data['b3_point2']; ?>
                </li>
                <li>
                    <strong><?php echo $about_data['b3s_title3']; ?></strong>
                    <?php echo $about_data['b3_point3']; ?>
                </li>
                <li>
                    <strong><?php echo $about_data['b3s_title4']; ?></strong>
                    <?php echo $about_data['b3_point4']; ?>
                </li>
            </ul>
        </div>
        <img src=" imgs/<?php echo $about_data['img']; ?>" alt="yo agency marketing team">
        <div id="serv"></div>
    </section>

    <!-- services -->

    <section class="services">
        <h2 class="title">
            خدماتنا
        </h2>
        <div class="container flex gap-20 rtl">
            <?php
            foreach ($services as $services_info) {

            ?>
                <div class="card">
                    <div>
                        <img src=" imgs/<?php echo $services_info['img'] ?>" alt="yo agency marketing team">
                        <div class="info rtl">
                            <p class="name">
                                <?php echo $services_info['serv_name'] ?>
                            </p>
                            <p class="description">
                                <?php echo $services_info['serv_description'] ?> </p>
                        </div>
                    </div>

                    <a href="https://wa.me/+201080389884" target="_blank">اطلب الخدمة الآن</a>
                </div>
            <?php } ?>
        </div>

        <div id="projects"></div>
    </section>
    <section class="services">
        <h2 class="title">
            كورساتنا
        </h2>
        <div class="container flex gap-20 rtl">
            <?php
            foreach ($projects as $projects_info) {

            ?>
                <div class="card">
                    <div>
                        <img src=" imgs/<?php echo $projects_info['img'] ?>" alt="yo agency marketing team">
                        <div class="info rtl">
                            <p class="name">
                                <?php echo $projects_info['proj_name'] ?>
                            </p>
                            <p class="description">
                                <?php echo $projects_info['proj_description'] ?> </p>
                        </div>
                    </div>

                    <a href="https://wa.me/+201080389884" target="_blank">اطلب الخدمة الآن</a>
                </div>
            <?php } ?>
        </div>

        <div id="team"></div>
    </section>
    <!-- team -->
    <section class="team">
        <h2 class="title">
            فريق العمل
        </h2>
        <!-- slider -->
        <section class="slider-container">
            <div class="slider">
                <!-- loop here -->
                <?php
                foreach ($team as $team_info) {
                ?>
                    <div class="slide flex flex-j-center flex-a-center">
                        <img src=" imgs/<?php echo $team_info['img'] ?>" alt="yo agency marketing team">
                        <div class="employee-description">
                            <h3><?php echo $team_info['name'] ?></h3>
                            <h4><?php echo $team_info['name'] ?></h4>
                            <p><sup><i class="fa-solid fa-quote-right"></i></sup>
                                <?php echo $team_info['qout'] ?><sub><i
                                        class="fa-solid fa-quote-left"></i></sub></p>
                        </div>
                    </div>

                <?php } ?>

            </div>
            <!-- btns -->
            <div class="slider-controls">
                <button class="slider-prev"><i class="fa-solid fa-chevron-left"></i></button>
                <button class="slider-next"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
            <div id="articals"></div>
        </section>

    </section>
    <section class="services">
        <h2 class="title">
            مقالاتنا
        </h2>
        <div class="container flex gap-20 rtl">
            <?php
            foreach ($articals as $articals_info) {

            ?>
                <div class="card">
                    <div>
                        <!-- <img src=" imgs/<?php echo $articals_info['img'] ?>" alt="yo agency marketing team"> -->
                        <div class="info rtl">
                        <p class="name"><sup><i class="fa-solid fa-quote-right"></i></sup>
                                <?php echo $articals_info['art_name'] ?><sub><i
                                        class="fa-solid fa-quote-left"></i></sub></p>
                            <p class="description">
                                <?php echo $articals_info['art_description'] ?> </p>
                        </div>
                    </div>

                    <!-- <a href="https://wa.me/+201080389884" target="_blank">اطلب الخدمة الآن</a> -->
                </div>
            <?php } ?>
        </div>

        <div id="contact"></div>
    </section>

    <!-- contact -->
    <section class="contact">
        <h2 class="title">تواصل معنا</h2>
        <div class="flex flex-a-start flex-j-between">
            <form class="rtl">
                <input type="text" id="name" placeholder="الاسم">
                <input type="text" id="phone" placeholder="الهاتف">
                <input type="email" id="email" placeholder="البريد الالكترونى">
                <textarea placeholder="اكتب رسالتك هنا" id="message"></textarea>
                <button type="button" onclick="sendMail()">ارسال</button>
            </form>
            <div class="informatoin rtl">

                <p>
                    <?php echo $contact_data['text'] ?>
                </p>
                <dl>
                    <dt>البريد الإلكتروني: </dt>
                    <dd>yo.agency.2@gmail.com</dd>
                    <dt>ارقامنا: </dt>
                    <dd><strong><i class="fa-solid fa-arrow-left"></i> المدير التنفيذي : </strong> <sub><a
                                href="tel:+201080389884">01080389884</a></sub></dd>
                    <dd><strong><i class="fa-solid fa-arrow-left"></i> مدير المشاريع : </strong> <sub><a
                                href="tel:+201093680866">01093680866</a></sub>
                    </dd>
                    <dt>تابعنا على : </dt>
                    <dd>
                        <a href="https://www.facebook.com/profile.php?id=61559616271573&mibextid=ZbWKwL"
                            target="_blank"><i class="fa-brands fa-facebook"></i> فيس بوك</a>
                    </dd>
                    <dd>
                        <a href="https://www.instagram.com/yoteam.agency?igsh=M2ZiczZ0bHdlcXBq" target="_blank"><i
                                class="fa-brands fa-instagram"></i> انستجرام</a>
                    </dd>
                    <dd>
                        <a href="https://www.linkedin.com/in/yo-marketingagency-9267a7298/?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                            target="_blank"><i class="fa-brands fa-linkedin"></i> لنكد إن</a>
                    </dd>
                    <dd>
                        <a href="https://www.tiktok.com/@yoteam.agency?_t=8oU7YGt1tic&_r=1" target="_blank">
                            <i class="fa-brands fa-tiktok"></i> تيك توك
                        </a>
                    </dd>
                </dl>

            </div>
        </div>

    </section>

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
        <p class="logo"><span>YO marketing agency</span><span>-</span>حقوق النشر © 2024 جميع الحقوق محفوظة</p>

    </footer>
    <div class="powered">
        developed by <a href="https://mohamed-hossam.vercel.app/" target="_blank">Ehab
            Emad</a>
    </div>

    <script src="js/jquery-3.7.1.js"></script>
    <script src="js/main.js"></script>

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