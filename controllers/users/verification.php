<?php


use core\Validator;
use core\Authenticator;
use core\App;
use core\Database;
use phpDocumentor\Reflection\Location;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
$config = require 'config.php';

$heading = "Create test";

if($_SERVER['REQUEST_METHOD']==='POST'){



$address = htmlspecialchars($_POST['address'] ?? '');
$message = htmlspecialchars($_POST['descripe_problem'] ?? '');
$email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);

$db = App::resolve(Database::class);

// if (isset($_POST["submit"])) {
$_SESSION['user_data'] = $_POST;
$_SESSION['file'] = $_FILES['photo'];
//   // التحقق من رفع الصورة
//   if (!isset($_FILES['photo'])) {
//     $_SESSION['error'] = "لم يتم تحميل الصورة.";
//     header("Location: /");
//     exit();
//   }
//   else {
//   $file = $_FILES['photo']['name'];
//   $tmp = $_FILES['photo']['tmp_name'];
//   $size = $_FILES['photo']['size'];
//   $type = $_FILES['photo']['type'];
//   $error = $_FILES['photo']['error'];

//   $fileExt = explode('.', $file);
//   $fileActual = strtolower(end($fileExt));
//   $allowed = array('jpg', 'jpeg', 'png', 'pdf');

//   if (in_array($fileActual, $allowed)) {
//     if ($error === 0) {
//       if ($size < 10000000) {
//         $filenamenew = uniqid('', true) . "." . $fileActual;
//         $fileDestination = __DIR__ . '/../../views/media/images/' . $filenamenew;

//         if (move_uploaded_file($tmp, $fileDestination)) {

//           // الملف تم نقله بنجاح
//           $_SESSION['photo'] = $filenamenew; // حفظ اسم الملف في الجلسة

//         } else {
//           $_SESSION['error'] = "حدث خطأ أثناء نقل الملف.";
//           header("Location: /");
//           exit();
//         }
//       } else {
//         $_SESSION['error'] = "حجم الملف كبير جدًا.";
//         header("Location: /");
//         exit();
//       }
//     } else {
//       $_SESSION['error'] = "حدث خطأ أثناء تحميل الملف.";
//       header("Location: /");
//       exit();
//     }
//   } else {
//     $_SESSION['error'] = "نوع الملف غير مدعوم. الرجاء رفع صورة بصيغة (jpg, jpeg, png, pdf)";
//     header("Location: /");
//     exit();
//   }
// }
// }

$user = $db->query('SELECT * FROM users WHERE email = :email', ['email' => $email])->fetch();

if ($user) {
  $error = urlencode("البريد الإلكتروني مسجل بالفعل");
  header("Location:/users_create_view?error={$error}");
  exit();

}
sendEmail($config,$email, $message);

} else{ $_SERVER['REQUEST_METHOD'] === 'GET';
  // $email = $_GET['email'] ?? null;
  // $message = $_GET['message'] ?? null;
  // $address = $_GET['address'] ?? null;
  // $email = filter_var($_GET['email'] ?? '', FILTER_SANITIZE_EMAIL);
  $email = $_SESSION['user_data']['email'] ?? '';
$message = $_SESSION['user_data']['descripe_problem'] ?? '';


  sendEmail($config,$email, $message);
}



function sendEmail($config,$email, $message) {


  try {
    // إنشاء كود التحقق
    $verification_code = rand(100000, 999999);
    $_SESSION['verification_code'] = $verification_code;
    $_SESSION['code_expiry'] = time() + 300; // انتهاء الكود بعد 5 دقائق مثلًا
  
    $mail = new PHPMailer(true);
  
    // إعدادات الإرسال
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = $config['phpmailer']['mail_host'];
    $mail->Port = $config['phpmailer']['mail_port'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Username = $config['phpmailer']['mail_username'];
    $mail->Password = $config['phpmailer']['mail_password'];
    $fromemail = $config['phpmailer']['mail_from'];
  
    $mail->setFrom($fromemail, "Badir Charity");
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = "تفعيل حسابك في منصة بادر";
    $mail->CharSet = 'UTF-8'; //UTF-8
    $mail->Body = "
  <html>
  <head>
      <title>رسالة من بادر الخيرية</title>
      <style>
          body {
              font-family: 'Arial', sans-serif;
              background-color: #f9f9f9;
              margin: 0;
              padding: 0;
          }
  
            .email-container {
              background: #ffffff;
              padding: 30px;
              max-width: 600px;
              margin: 20px auto;
              border-radius: 10px;
              box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
              border-top: 5px solid #00A7B5;
            }
  
          .email-header {
              text-align: center;
              margin-bottom: 20px;
          }
  
          .email-header img {
              max-width: 140px;
              margin-bottom: 10px;
          }
  
          .email-header h3 {
              color: #00A7B5;
              font-size: 24px;
              margin: 0;
          }
  
          .email-content {
              font-size: 16px;
              line-height: 1.7;
              color: #333;
              margin-bottom: 20px;
          }
  
          .email-content p {
              margin: 12px 0;
              text-align: right;
          }
  
          .email-content strong {
              color: #00A7B5;
          }
  
          .verification-code {
              background-color: #e2f8fa;
              padding: 12px;
              border-radius: 6px;
              color: #00A7B5;
              font-weight: bold;
              font-size: 18px;
              text-align: center;
              margin-top: 10px;
          }
  
          .email-footer {
              text-align: center;
              font-size: 12px;
              color: #A0A0A0;
              margin-top: 30px;
              border-top: 1px solid #eee;
              padding-top: 15px;
          }
  
          .email-footer p {
              margin: 5px 0;
          }
  
          .email-footer a {
              color: #00A7B5;
              text-decoration: none;
          }
              .vcode{
              text-align: center;
              
              }
  
      </style>
  </head>
  <body>
      <div class='email-container'>
          <div class='email-header'>
              <img src='https://i.postimg.cc/kMV8zNyC/bader.png' alt='Badir Charity Logo'>
              <h3>رسالة جديدة من بادر الخيرية</h3>
          </div>
          <div class='email-content'>
              <p> $email <strong>:مرحباً بك عزيزي المستخدم</strong></p>
              <p><strong> أنت على بعد خطوة واحدة من تفعيل حسابك في منصة بادر الخيرية</strong><br>" . nl2br($message) . "</p>
              <hr>
              <p class='vcode'><strong>:رمز التحقق الخاص بك</strong></p>
              <div class='verification-code'>$verification_code</div>
          </div>
          <div class='email-footer'>
              <p>&copy; " . date('Y') . " بادر الخيرية - جميع الحقوق محفوظة</p>
              <p>:تواصل معنا <br><a href='mailto:badir.charity.org@gmail.com'>support@badir.org</a></p>
          </div>
      </div>
  </body>
  </html>
  ";
  
  
  
  
  
  
    if ($mail->send()) {
  
      // $_SESSION['success'] = "تم إرسال الكود بنجاح، تحقق من بريدك.";
  
  
      header("Location: /users_verification_view?sent=success");
      exit();
    } else {
      die("فشل في إرسال البريد: " . $mail->ErrorInfo);
    }
  } catch (Exception $e) {
    die("خطأ في الإرسال: " . $e->getMessage());
  } catch (PDOException $e) {
    die("حدث خطأ أثناء الحفظ: " . $e->getMessage());
  }
  

}