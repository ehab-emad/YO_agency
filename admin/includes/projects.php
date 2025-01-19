<?php
$data = $connect->query("SELECT * FROM `projects`");
?>

<div class="page-title">
    <i class="fa-solid fa-puzzle-piece"></i> <span>لوحة التحكم /</span> <strong>ضبط قسم الكورسات</strong>
</div>


<div class="services_container">
    <?php
    foreach ($data as $prjects_data) {
    ?>
        <div class="card">
            <img src="../imgs/<?php echo $prjects_data['img'] ?>" alt="">
            <div class="proj-name"><?php echo $prjects_data['proj_name'] ?></div>
            <div class="proj-description">
                <?php echo $prjects_data['proj_description'] ?>
            </div>
            <a href="?page=updateproject&id=<?php echo $prjects_data['id'] ?>" class="update-btn">تعديل</a>
            <a href="functions/delete_proj.php?id=<?php echo $prjects_data['id'] ?>" class="delete-btn">حذف</a>

        </div>

    <?php } ?>
    <div class="card add-serv-box">
        <img src="../imgs/web.jpg" alt="">
        <div class="proj-name">اسم الكورس</div>
        <div class="proj-description">
            انها خدمه جميله جدا علاوله اتمنى ان تحجزها
        </div>
        <a href="#" class="update-btn">تعديل</a>
        <button href="#" class="delete-btn">حذف</button>
        <a href="?page=addproject" class="add-serv-btn">
            <span>اضف كورس</span> <i class="fa-solid fa-plus"></i>
        </a>
    </div>
</div>