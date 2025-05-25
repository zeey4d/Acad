<?php
use core\App;
use core\Database;


$db  = App::resolve(Database::class);


$username   = $_POST['username'];
$email = $_POST['email'];
$password   = $_POST['password']   ;
 $university = $_POST['university'] ;
 $department = $_POST['department'];

$erorrs = [] ;

if(! Validator::email($email)){
    $erorrs['email'] = "not a valid email ";
}
if(! Validator::string($password , 8 ,255)){
    $erorrs['password'] = "password is too short password ";
}

if(! empty($erorrs)){
    require 'views/registertion/create_view.php';
}





$user =  $db->query('select * from users where email = :email',
['email' => $email])->fetch();


if($user){
    header("Location: /");
}else{
   
    $db->query('INSERT INTO users (username , email , password,university,department ) VALUES (:username ,:email , :password ,:university, :department );',[
        'username' => $username,
        'email' => $email,
        'password' =>password_hash($password ,PASSWORD_BCRYPT ) ,
        'university' => $university,
        'department' => $department,
    ]
);

logIn($user);



header("Location: /");
die();

}


// if (isset($_POST["submit"])) {
//   // validate the data
//   $entered_code = $_POST['verification_code'];
//   $saved_code = $_SESSION['verification_code'];
//   $code_expiry = $_SESSION['code_expiry'];
//   $current_time = time();

//   //  cheak if the code is expired
//   if ($current_time > $code_expiry) {
//     $_SESSION['error'] = "كود التحقق منتهي الصلاحية. يرجى إعادة الإرسال.";
//     session_destroy();
//     header("Location: /users_verification_view");
//     exit();
//   }

//   // cheak if the code is correct
//   if ($entered_code != $saved_code) {
//     $_SESSION['error'] = "رمز التحقق غير صحيح.";
//     header("Location: /users_verification_view");
//     exit();
//   }

//   //  get the user data from the sessionn
//   $data = $_SESSION['user_data'];

//   // $data['photo'] = $_SESSION['file'];

//   // cheak if the email is already used
//   $query = $db->query('SELECT * FROM users WHERE email = :email', [
//     'email' => filter_var($data['email'], FILTER_SANITIZE_EMAIL)
//   ])->fetch();

//   if ($query) {
//     $_SESSION['error'] = "البريد الإلكتروني مستخدم مسبقًا.";
//     header('location: /');
//     exit();
//   } else {


//     if (isset($_POST["submit"])) {
//       $_FILES['photo'] = $_SESSION['file'];
//       $file = $_FILES['photo']['name'];
//       $tmp = $_FILES['photo']['tmp_name'];
//       $size = $_FILES['photo']['size'];
//       $type = $_FILES['photo']['type'];
//       $error = $_FILES['photo']['error'];
//       $fileExt = explode('.', $file);
//       $fileActual = strtolower(end($fileExt));
//       $allow = array('jpg', 'jpeg', 'png', 'pdf');
//       if (in_array($fileActual, $allow)) {
//         if ($error === 0) {
//           if ($size < 10000000) {
//             $filenamenew = uniqid('', true) . "." . $fileActual;
//             $fileDestination = __DIR__ . '/../../views/media/images/' . $filenamenew;

//             echo $fileDestination;
//             move_uploaded_file($tmp, $fileDestination);
//           } else {
//             echo "your file is too big";
//           }
//         } else {
//           echo "there was an error uploading your file";
//         }
//       } else {
//         echo "you are not allow to uplaod file";
//       }
//     } else {
//       echo "error";
//     }



//     // enter the data to the database
//     try {
//       $db->query(
//         "INSERT INTO users (
//                 username,
//                 password,
//                 photo,
//                 email,
//                 type,
//                 country,
//                 city,
//                 street,
//                 phone,
//                 notifications,
//                 verification_code,
//                 code_expiry
//             ) VALUES (
//                 :username,
//                 :password,
//                 :photo,
//                 :email,
//                 :type,
//                 :country,
//                 :city,
//                 :street,
//                 :phone,
//                 :notifications,
//                 :verification_code,
//                 :code_expiry

//             )",
//         [
//           'username' => htmlspecialchars($data['username']),
//           'password' => password_hash($data['password'], PASSWORD_BCRYPT),
//           'photo' => $filenamenew,
//           'email' => filter_var($data['email'], FILTER_SANITIZE_EMAIL),
//           'type' => 'normal',
//           'country' =>  htmlspecialchars($data['country']),
//           'city' =>  htmlspecialchars($data['city']),
//           'street' => htmlspecialchars($data['street']),
//           'phone' => filter_var($data['phone'], FILTER_SANITIZE_STRING),
//           'notifications' => isset($data['notifications']) ? 1 : 0,
//           'verification_code' => $_SESSION['verification_code'],
//           'code_expiry' => $_SESSION['code_expiry'],
//         ]
//       );





//       //get the user from the database
//       $user = $db->query('SELECT * FROM users WHERE email = :email', [
//         'email' => $email
//       ])->fetch();

//       // 

//       login($user);

//       // clear the session data
//       unset($_SESSION['user_data'], $_SESSION['photo'], $_SESSION['verification_code'], $_SESSION['code_expiry'], $_SESSION['file']);

//       // redirect to the home page
//       $_SESSION['success'] = "تم إنشاء الحساب بنجاح. مرحبًا بك في موقعنا!";
//       header("Location: /");
//       exit();
//     } catch (PDOException $e) {
//       error_log($e->getMessage());
//       $_SESSION['error'] = "حدث خطأ أثناء حفظ البيانات.";
//       header("Location: /");
//       exit();
//     }
//   }
// }
