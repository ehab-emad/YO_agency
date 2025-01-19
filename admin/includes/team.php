<?php
$data = $connect->query("SELECT * FROM `team`");
?>

<div class="page-title">
    <i class="fa-solid fa-puzzle-piece"></i> <span>لوحة التحكم /</span> <strong>ضبط قسم الفريق</strong>
</div>


<div class="services_container">
    <?php
    foreach ($data as $team_data) {
    ?>
        <div class="card">
            <img src="../imgs/<?php echo $team_data['img'] ?>" alt="">
            <div class="serv-name"><?php echo $team_data['name'] ?></div>
            <div class="serv-name"><?php echo $team_data['job'] ?></div>
            <div class="serv-description">
                <?php echo $team_data['qout'] ?>
            </div>
            <a href="?page=updateteam&id=<?php echo $team_data['id'] ?>" class="update-btn">تعديل</a>
            <a href="functions/delete_team.php?id=<?php echo $team_data['id'] ?>" class="delete-btn">حذف</a>

        </div>

    <?php } ?>
    <div class="card add-serv-box">
        <img src="../imgs/team.png" alt="">
        <div class="serv-name">حجازى</div>
        <div class="serv-name">مطور ويب</div>
        <div class="serv-description">
            العقل السليم فالرأس الكبير
        </div>
        <a href="?page=updateteam&id=<?php echo $team_data['id'] ?>" class="update-btn">تعديل</a>
        <a href="functions/delete_team.php?id=<?php echo $team_data['id'] ?>" class="delete-btn">حذف</a>
        <a href="?page=addteam" class="add-serv-btn">
            <span>اضف عضو</span> <i class="fa-solid fa-plus"></i>
        </a>
    </div>
</div>