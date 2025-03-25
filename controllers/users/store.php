<?php

use core\App;
use core\Database;
use core\Authenticator;

$db = App::resolve(Database::class);

 $user_id = $db->query(
    "INSERT INTO users (
        username,
        password,
        photo,
        email,
        type,
        country,
        city,
        street,
        phone,
        notifications
    ) VALUES (
        :username,
        :password,
        :photo,
        :email,
        :type,
        :country,
        :city,
        :street,
        :phone,
        :notifications
    )",
    [
        'username' => htmlspecialchars($_POST['username']),
        'password' => password_hash($_POST['password'], PASSWORD_BCRYPT), // Hash the password before saving
        'photo' => $_POST['photo']?? null,
        'email' => filter_var($_POST['email'], FILTER_SANITIZE_EMAIL),
        'type' => $_POST['type'] ?? 'normal', // Default to 'normal' if not provided
        'country' => htmlspecialchars($_POST['country']),
        'city' => htmlspecialchars($_POST['city']),
        'street' => htmlspecialchars($_POST['street']),
        'phone' => filter_var($_POST['phone'], FILTER_SANITIZE_STRING),
        'notifications' => isset($_POST['notifications']) ? 1 : 0 // Convert boolean to integer (1 or 0)
    ]
);

// استقبال البيانات من النموذج
$name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$phone_number = $_POST['phone'];
$place = $_POST['country'];

// التحقق من البيانات

$errors = [];

if (!Validator::string($name, 2, 255)) {
   $errors['name'] = 'الاسم يجب أن يكون بين 2 و 255 حرفًا.';
}

if (!Validator::email($email)) {
   $errors['email'] = 'يرجى تقديم عنوان بريد إلكتروني صالح.';
}

if (!Validator::string($password, 8, 255)) {
   $errors['password'] = 'كلمة المرور يجب أن تكون على الأقل 8 أحرف.';
}

if ($password !== $confirm_password) {
   $errors['confirm_password'] = 'كلمتا المرور غير متطابقتين.';
}

if (!Validator::string($phone_number, 8, 15)) {
   $errors['phone_number'] = 'رقم الهاتف يجب أن يكون بين 8 و 15 رقمًا.';
}

if (!Validator::string($place, 2, 255)) {
   $errors['place'] = 'المنطقة يجب أن تكون بين 2 و 255 حرفًا.';
}


 //إذا كانت هناك أخطاء، قم بإعادة توجيه المستخدم إلى صفحة التسجيل مع عرض الأخطا
 if (! empty($errors)) {
    require 'views/pages/users/create_view.php';
 }

// التحقق مما إذا كان البريد الإلكتروني موجودًا مسبقًا
//$user_id = $db->query('SELECT * FROM users WHERE email = :email', [
//   'email' => $email
//])->find();

if ($user_id) {
   $errors['email'] = 'البريد الإلكتروني موجود مسبقًا.';
   require 'views/pages/users/create_view.php';
  die();


     header('location: /');
     exit();
}else {
     $user_id = $db->query('INSERT INTO users(email, password) VALUES(:email, :password)', [
         'email' => $email,
         'password' => password_hash($password, PASSWORD_BCRYPT)
     ]);
     
    
     // تسجيل دخول المستخدم بعد إنشاء الحساب
    $authenticator = new Authenticator();
    $authenticator->login($email);
     
    (new Authenticator)->login(['email' => $email]);


   header('location: /');
    exit();
}

 logIn($user);
 // توجيه المستخدم إلى الصفحة الرئيسية بعد التسجيل الناجح
 header("Location: /");
 die();
    try {
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
    
       
       
       
       
       
       
       
       
       
       
       
       
        
        
        }catch (PDOException $e) {
            error_log($e->getMessage());
            $_SESSION['error'] = "حدث خطأ أثناء حفظ البعانات";
            header("Location: /charity_projects_create");
            exit();
        }
        
    
    header("Location: " . $_SERVER["HTTP_REFERER"]);
    die();