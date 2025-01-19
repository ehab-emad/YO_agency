<?php
session_start();

// التحقق من تسجيل دخول المستخدم
if (isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

// باقي محتوى الصفحة...
?>
<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
    <link rel="stylesheet" href="libs/font.css">
    <style>
        * {
            font-family: "cairo";
        }

        /* تنسيق الصفحة بشكل عام */
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            margin-bottom: 30px;
            text-align: center;
            color: #343a40;
        }

        /* تنسيق عناصر النموذج */
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #495057;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            font-size: 1rem;
            color: #495057;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4eb471;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #4eb471;
        }

        /* تنسيق الرسائل */
        .error-message {
            color: #dc3545;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
        }

        .success-message {
            color: #28a745;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
        }

        /* تنسيق روابط التسجيل والخروج */
        .login-container a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
        }

        .login-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2>تسجيل الدخول</h2>


        <?php if (isset($_GET['error'])): ?>
            <p class="error-message"><?php echo htmlspecialchars($_GET['error']); ?></p>
        <?php endif; ?>

        <form action="functions/login_check.php" method="post">
            <label for="username">اسم المستخدم</label>
            <input type="text" name="username" required>

            <label for="password">كلمة المرور</label>
            <input type="password" name="password" required>

            <button type="submit">تسجيل الدخول</button>
        </form>
    </div>
</body>

</html>