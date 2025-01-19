<?php
$data = $connect->query("SELECT * FROM `services`");
?>

<div class="page-title">
    <i class="fa-solid fa-puzzle-piece"></i> <span>لوحة التحكم /</span> <strong>ضبط قسم الخدمات</strong>
</div>


<div class="services_container">
    <?php
    foreach ($data as $service_data) {
    ?>
        <div class="card">
            <img src="../imgs/<?php echo $service_data['img'] ?>" alt="">
            <div class="serv-name"><?php echo $service_data['serv_name'] ?></div>
            <div class="serv-description">
                <?php echo $service_data['serv_description'] ?>
            </div>
            <a href="?page=updateservice&id=<?php echo $service_data['id'] ?>" class="update-btn">تعديل</a>
            <a href="functions/delete_serv.php?id=<?php echo $service_data['id'] ?>" class="delete-btn">حذف</a>

        </div>

    <?php } ?>
    <div class="card add-serv-box">
        <img src="../imgs/web.jpg" alt="">
        <div class="serv-name">اسم الخدمه</div>
        <div class="serv-description">
            انها خدمه جميله جدا علاوله اتمنى ان تحجزها
        </div>
        <a href="#" class="update-btn">تعديل</a>
        <button href="#" class="delete-btn">حذف</button>
        <a href="?page=addservice" class="add-serv-btn">
            <span>اضف خدمة</span> <i class="fa-solid fa-plus"></i>
        </a>
    </div>
</div>