<?php
session_start();

// التحقق من تسجيل دخول المستخدم
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// باقي محتوى الصفحة...
?>

<?php
require "functions/connect.php";
if (!isset($_GET['page'])) {
    $_GET['page'] = 'mainbanner';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>yo agency - dashboard </title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="libs/font.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="icon" href="../imgs/icon.png">
</head>

<body>
    <nav>
        <div class="logo">
            <div class="img-con">
                <img src="../imgs/icon.png" alt="">
            </div>
            <p>لوحة التحكم </p>
        </div>
        <div class="links">
            <a href="../" target="_blank"><i class="fa-solid fa-globe"></i> اعرض الموقع</a>
            <a href="https://wa.me/+201017164691" target="_blank"><i class="fa-solid fa-headset"></i> الدعم</a>
        </div>
    </nav>
    <main>
        <aside>
            <div class="upper">
                <a href="?page=mainbanner" class="<?php
                                                    if (!isset($_GET['page']) ||  $_GET['page'] == 'mainbanner') {
                                                        echo "active";
                                                    }
                                                    ?>">
                    <span><i class="fa-solid fa-house"></i></span> <strong>الشاشه الافتتاحية</strong></a>
                <a href="?page=about" class="<?php
                                                if ($_GET['page'] == 'about') {
                                                    echo "active";
                                                }
                                                ?>"><span><i class="fa-solid fa-user-tie"></i></span> <strong>عن وكالتنا</strong></a>
                <a href="?page=services" class="<?php
                                                if ($_GET['page'] == 'services' || $_GET['page'] == 'addservice' || $_GET['page'] == 'updateservice') {
                                                    echo "active";
                                                }
                                                ?>"><span><i class="fa-solid fa-gears"></i></span> <strong>خدماتنا</strong></a>
                                                   <a href="?page=projects" class="<?php
                                            if ($_GET['page'] == 'projects' || $_GET['page'] == 'updateproject' || $_GET['page'] == 'addproject') {
                                                echo "active";
                                            }
                                            ?>"><span><i class="fa-solid fa-graduation-cap"></i></span> <strong>كورساتنا </strong></a>
                <a href="?page=team" class="<?php
                                            if ($_GET['page'] == 'team' || $_GET['page'] == 'updateteam' || $_GET['page'] == 'addteam') {
                                                echo "active";
                                            }
                                            ?>"><span><i class="fa-solid fa-users-gear"></i></span> <strong>فريق العمل</strong></a>
                                             <a href="?page=articals" class="<?php
                                            if ($_GET['page'] == 'articals' || $_GET['page'] == 'updateartical' || $_GET['page'] == 'addteam') {
                                                echo "active";
                                            }
                                            ?>"><span><i class="fa-solid fa-file-alt"></i></span> <strong> مقالاتنا</strong></a>
                <a href="?page=contact" class="<?php
                                                if ($_GET['page'] == 'contact') {
                                                    echo "active";
                                                }
                                                ?>"><span><i class="fa-solid fa-headset"></i></span> <strong>قسم التواصل</strong></a>
                <a href="?page=logdata" class="<?php
                                                if ($_GET['page'] == 'logdata') {
                                                    echo "active";
                                                }
                                                ?>"><span><i class="fa-solid fa-key"></i></span> <strong>بيانات تسجيل الدخول</strong></a>
                <a href="functions/log_out.php"><span><i class="fa-solid fa-right-from-bracket"></i></span> <strong> تسجيل الخروج</strong></a>
            </div>
            <div class="lower">
                powered by <a href="https://mohamed-hossam.vercel.app/" target="_blank">mohamed hossam</a>
            </div>
        </aside>
        <section class="main-section">
            <?php

            if ($_GET['page'] == 'mainbanner') {
                include "includes/main-section.php";
            } elseif ($_GET['page'] == 'about') {
                include "includes/about.php";
            } elseif ($_GET['page'] == 'services') {
                include "includes/services.php";
            }elseif ($_GET['page'] == 'projects') {
                include "includes/projects.php";
            }elseif ($_GET['page'] == 'addproject') {
                include "includes/project-add.php";
            }elseif ($_GET['page'] == 'updateproject') {
                include "includes/project-update.php";
            } elseif ($_GET['page'] == 'addartical') {
                include "includes/artical-add.php";
            } elseif ($_GET['page'] == 'addservice') {
                include "includes/service-add.php";
            } elseif ($_GET['page'] == 'updateservice') {
                include "includes/service-update.php";
            } elseif ($_GET['page'] == 'articals') {
                include "includes/articals.php";
            }elseif ($_GET['page'] == 'updateartical') {
                include "includes/artical-update.php";
            }elseif ($_GET['page'] == 'updateartical') {
                include "includes/artical-update.php";
            }elseif ($_GET['page'] == 'team') {
                include "includes/team.php";
            } elseif ($_GET['page'] == 'updateteam') {
                include "includes/team-update.php";
            } elseif ($_GET['page'] == 'addteam') {
                include "includes/team-add.php";
            } elseif ($_GET['page'] == 'contact') {
                include "includes/contactupdate.php";
            } elseif ($_GET['page'] == 'logdata') {
                include "includes/log-data.php";
            }
            ?>
        </section>
    </main>
    <script src="js/jquery-3.7.1.js"></script>
    <script src="js/main.js"></script>
</body>

</html>