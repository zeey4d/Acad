<?php

$page = "users_create" ;


use core\App;
use core\Database;


$db  = App::resolve(Database::class);


// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $email = trim($_POST['email']);
//     $plainPassword = $_POST['password'];

//     // تشفير كلمة المرور
//     $hashedPassword = password_hash($plainPassword, PASSWORD_DEFAULT);

//     // حفظ المستخدم في قاعدة البيانات
//     $stmt = $db->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");
//     $stmt->execute([
//         'email' => $email,
//         'password' => $hashedPassword
//     ]);

//     echo "<p style='color: green;'>✅ تم إنشاء المستخدم بنجاح!</p>";
// }


// session_start(); // يجب أن يكون في أول السطر قبل أي مخرجات

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // $username   = $_POST['username']   ?? '';
    // $email      = $_POST['email']      ?? '';
    // $password   = $_POST['password']   ?? '';
    // $university = $_POST['university'] ?? '';
    // $department = $_POST['department'] ?? '';

//     // تحقق أن كلمة المرور ليست فارغة
//     if (empty($password)) {
//         echo "يرجى إدخال كلمة المرور";
//         exit;
//     }

//     // التحقق من وجود الحقول المهمة
//     if (empty($username) || empty($email)) {
//         echo "يرجى تعبئة جميع الحقول";
//         exit;
//     }

//     // تشفير كلمة المرور
//     $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

//     // تنفيذ الإدخال في قاعدة البيانات
//     $db->query('INSERT INTO users (username, email, password, university, department) 
//                 VALUES (:username, :email, :password, :university, :department)', [
//         'username'   => $username,
//         'email'      => $email,
//         'password'   => $hashedPassword,
//         'university' => $university,
//         'department' => $department,
//     ]);

//     // تسجيل الدخول بعد التسجيل (تأكد أن logIn تستخدم بيانات صحيحة)
//     logIn([
//         'username' => $username,
//         'email'    => $email,
//         // ... يمكن تمرير بيانات إضافية حسب ما تحتاجه logIn
//     ]);

//     // إعادة التوجيه للصفحة الرئيسية
//     header("Location: /");
//     exit;
// }



require "views/users/create_view.php";

?>

