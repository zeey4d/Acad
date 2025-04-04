<?php

use core\App;
use core\Database;
use core\Authenticator;

$db = App::resolve(Database::class);

if (isset($_POST["submit"])) {

   $file = $_FILES['photo']['name'];
   $tmp = $_FILES['photo']['tmp_name'];
   $size = $_FILES['photo']['size'];
   $type = $_FILES['photo']['type'];
   $error = $_FILES['photo']['error'];
   $fileExt = explode('.', $file);
   $fileActual = strtolower(end($fileExt));
   $allow = array('jpg', 'jpeg', 'png', 'pdf');
   if (in_array($fileActual, $allow)) {
      if ($error === 0) {
         if ($size < 10000000) {
            $filenamenew = uniqid('', true) . "." . $fileActual;
            $fileDestination = __DIR__ . '/../../views/media/images/' . $filenamenew;

            echo $fileDestination;
            move_uploaded_file($tmp, $fileDestination);
         } else {
            echo "your file is too big";
         }
      } else {
         echo "there was an error uploading your file";
      }
   } else {
      echo "you are not allow to uplaod file";
   }
} else {
   echo "error";
}




// استقبال البيانات من النموذج
// $name = $_POST['username'];
// $email = $_POST['email'];
// $password = $_POST['password'];
// $confirm_password = $_POST['confirm_password'];
// $phone_number = $_POST['phone'];
// $place = $_POST['country'];

// التحقق من البيانات

$errors = [];

// if (!Validator::string($name, 2, 255)) {
//    $errors['name'] = 'الاسم يجب أن يكون بين 2 و 255 حرفًا.';
// }

// if (!Validator::email($email)) {
//    $errors['email'] = 'يرجى تقديم عنوان بريد إلكتروني صالح.';
// }

// if (!Validator::string($password, 8, 255)) {
//    $errors['password'] = 'كلمة المرور يجب أن تكون على الأقل 8 أحرف.';
// }

// if ($password !== $confirm_password) {
//    $errors['confirm_password'] = 'كلمتا المرور غير متطابقتين.';
// }

// if (!Validator::string($phone_number, 8, 15)) {
//    $errors['phone_number'] = 'رقم الهاتف يجب أن يكون بين 8 و 15 رقمًا.';
// }

// if (!Validator::string($place, 2, 255)) {
//    $errors['place'] = 'المنطقة يجب أن تكون بين 2 و 255 حرفًا.';
// }


// //إذا كانت هناك أخطاء، قم بإعادة توجيه المستخدم إلى صفحة التسجيل مع عرض الأخطا
// if (! empty($errors)) {
//    require 'views/pages/users/create_view.php';
// }

// التحقق مما إذا كان البريد الإلكتروني موجودًا مسبقًا
$user = $db->query('SELECT * FROM users WHERE email = :email', [
   'email' => filter_var($_POST['email'], FILTER_SANITIZE_EMAIL)
])->fetch();


if ($user) {
   header('location: /');
   die();
} else {
   try {
      $db->query(
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
            'photo' => $filenamenew,
            'email' => filter_var($_POST['email'], FILTER_SANITIZE_EMAIL),
            'type' => $_POST['type'] ?? 'normal', // Default to 'normal' if not provided
            'country' => htmlspecialchars($_POST['country']),
            'city' => htmlspecialchars($_POST['city']),
            'street' => htmlspecialchars($_POST['street']),
            'phone' => filter_var($_POST['phone'], FILTER_SANITIZE_STRING),
            'notifications' => isset($_POST['notifications']) ? 1 : 0 // Convert boolean to integer (1 or 0)
         ]
      );
      $user = $db->query('SELECT * FROM users WHERE email = :email', [
         'email' => filter_var($_POST['email'], FILTER_SANITIZE_EMAIL)
      ])->fetch();
   } catch (PDOException $e) {
      error_log($e->getMessage());
      $_SESSION['error'] = "حدث خطأ أثناء حفظ البعانات";
      header("Location: /charity_projects_create");
      exit();
   }
}
// توجيه المستخدم إلى الصفحة الرئيسية بعد التسجيل الناجح

logIn($user);

header('location: /');

die();
