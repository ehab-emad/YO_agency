<?php
$data = $connect->query("SELECT * FROM `artical`");
?>

<div class="page-title">
    <i class="fa-solid fa-puzzle-piece"></i> <span>لوحة التحكم /</span> <strong>ضبط قسم المقالات</strong>
</div>


<div class="services_container">
    <?php
    foreach ($data as $articals_data) {
    ?>
        <div class="card">
            <!-- <img src="../imgs/<?php echo $articals_data['img'] ?>" alt=""> -->
            <div class="serv-name"><?php echo $articals_data['art_name'] ?></div>
            <div class="serv-description">
                <?php echo $articals_data['art_description'] ?>
            </div>
            <a href="?page=updateartical&id=<?php echo $articals_data['id'] ?>" class="update-btn">تعديل</a>
            <a href="functions/delete_articals.php?id=<?php echo $articals_data['id'] ?>" class="delete-btn">حذف</a>

        </div>

    <?php } ?>
    <div class="card add-serv-box">
        <!-- <img src="../imgs/web.jpg" alt=""> -->
        <div class="serv-name">اسم الخدمه</div>
        <div class="serv-description">
            انها خدمه جميله جدا علاوله اتمنى ان تحجزها
        </div>
        <a href="#" class="update-btn">تعديل</a>
        <button href="#" class="delete-btn">حذف</button>
        <a href="?page=addartical" class="add-serv-btn">
            <span>اضف خدمة</span> <i class="fa-solid fa-plus"></i>
        </a>
    </div>
</div>