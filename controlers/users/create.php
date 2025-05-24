<?php

$page = "users_create" ;


use core\App;
use core\Database;


$db  = App::resolve(Database::class);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $plainPassword = $_POST['password'];

    // تشفير كلمة المرور
    $hashedPassword = password_hash($plainPassword, PASSWORD_DEFAULT);

    // حفظ المستخدم في قاعدة البيانات
    $stmt = $db->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");
    $stmt->execute([
        'email' => $email,
        'password' => $hashedPassword
    ]);

    echo "<p style='color: green;'>✅ تم إنشاء المستخدم بنجاح!</p>";
}


require "views/users/create_view.php";

?>

