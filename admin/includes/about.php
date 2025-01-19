<?php
$data = $connect->query("SELECT * FROM `about` WHERE id='1'");
$data = $data->fetch_assoc();
?>

<div class="page-title">
    <i class="fa-solid fa-puzzle-piece"></i> <span>لوحة التحكم /</span> <strong>ضبط قسم عن شركتنا</strong>
</div>

<form action="functions/add_about.php" method="post" enctype="multipart/form-data">
    <!-- رسائل الخطأ والنجاح -->
    <?php
    if (isset($_GET['success'])) {
        echo "<p class='success-message'>تم التحديث بنجاح!</p>";
    }

    if (isset($_GET['error'])) {
        $error = $_GET['error'];
        $errorMessages = array(
            "upload_fail" => "فشل رفع الصورة. حاول مرة أخرى.",
            "file_too_large" => "حجم الملف كبير جدًا. يجب أن يكون أقل من 1 ميجابايت.",
            "invalid_format" => "تنسيق الملف غير مدعوم. يرجى رفع صورة بصيغة jpg, png, gif, jpeg أو webp.",
            "update_fail" => "فشل التحديث. حاول مرة أخرى.",
            "missing_data" => "بيانات الإدخال غير كاملة."
        );

        $message = isset($errorMessages[$error]) ? $errorMessages[$error] : "حدث خطأ غير معروف.";
        echo "<p class='error-message'>$message</p>";
    }
    ?>
    <!-- الجزء الأول -->
    <div class="container-box">
        <div class="box-title">الجزء الأول</div>

        <label for="box1_main_title">عنوان القسم</label>
        <input type="text" id="box1_main_title" name="box1_main_title" placeholder="عنوان القسم" value="<?php echo $data['b1m_title']; ?>" required>

        <label for="box1_point1">ضع النقطه الاولى</label>
        <textarea id="box1_point1" name="box1_point1" placeholder="ضع النقطه الاولى"><?php echo $data['b1_point1']; ?></textarea>

        <label for="box1_point2">ضع النقطه الثانية</label>
        <textarea id="box1_point2" name="box1_point2" placeholder="ضع النقطه الثانية"><?php echo $data['b1_point2']; ?></textarea>
    </div>

    <!-- الجزء الثاني -->
    <div class="container-box">
        <div class="box-title">الجزء الثانى</div>

        <label for="box2_main_title">عنوان القسم</label>
        <input type="text" id="box2_main_title" name="box2_main_title" placeholder="عنوان القسم" value="<?php echo $data['b2m_title']; ?>" required>

        <label for="box2_point1">ضع النقطه الاولى</label>
        <textarea id="box2_point1" name="box2_point1" placeholder="ضع النقطه الاولى"><?php echo $data['b2_point1']; ?></textarea>

        <label for="box2_point2">ضع النقطه الثانية</label>
        <textarea id="box2_point2" name="box2_point2" placeholder="ضع النقطه الثانية"><?php echo $data['b2_point2']; ?></textarea>
    </div>

    <!-- الجزء الثالث -->
    <div class="container-box">
        <div class="box-title">الجزء الثالث</div>

        <label for="box3_main_title">عنوان القسم</label>
        <input type="text" id="box3_main_title" name="box3_main_title" placeholder="عنوان القسم" value="<?php echo $data['b3m_title']; ?>" required>

        <label for="box3_sub_title1">العنوان الفرعي الأول</label>
        <input type="text" id="box3_sub_title1" name="box3_sub_title1" placeholder="العنوان الفرعي الأول" value="<?php echo $data['b3s_title1']; ?>">

        <label for="box3_point1">ضع النقطه الاولى</label>
        <textarea id="box3_point1" name="box3_point1" placeholder="ضع النقطه الاولى"><?php echo $data['b3_point1']; ?></textarea>

        <label for="box3_sub_title2">العنوان الفرعي الثاني</label>
        <input type="text" id="box3_sub_title2" name="box3_sub_title2" placeholder="العنوان الفرعي الثاني" value="<?php echo $data['b3s_title2']; ?>">

        <label for="box3_point2">ضع النقطه الثانية</label>
        <textarea id="box3_point2" name="box3_point2" placeholder="ضع النقطه الثانية"><?php echo $data['b3_point2']; ?></textarea>

        <label for="box3_sub_title3">العنوان الفرعي الثالث</label>
        <input type="text" id="box3_sub_title3" name="box3_sub_title3" placeholder="العنوان الفرعي الثالث" value="<?php echo $data['b3s_title3']; ?>">

        <label for="box3_point3">ضع النقطه الثالثة</label>
        <textarea id="box3_point3" name="box3_point3" placeholder="ضع النقطه الثالثة"><?php echo $data['b3_point3']; ?></textarea>

        <label for="box3_sub_title4">العنوان الفرعي الرابع</label>
        <input type="text" id="box3_sub_title4" name="box3_sub_title4" placeholder="العنوان الفرعي الرابع" value="<?php echo $data['b3s_title4']; ?>">

        <label for="box3_point4">ضع النقطه الرابعة</label>
        <textarea id="box3_point4" name="box3_point4" placeholder="ضع النقطه الرابعة"><?php echo $data['b3_point4']; ?></textarea>
    </div>


    <!-- رفع الصورة -->
    <div class="file-box">
        <div class="layer">
            <div class="child">
                <p>upload image</p>
                <span>or</span>
                <span>drop image</span>
            </div>
        </div>
        <input type="file" name="about_image">
    </div>



    <button>حفظ التعديلات</button>
</form>