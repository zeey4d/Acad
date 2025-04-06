
<?php

// die(" وصلنا لـ store.php");

if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

use core\App;
use core\Database;
use core\Authenticator;

$db = App::resolve(Database::class);

if (isset($_POST["submit"])) {


    if (!isset($_SESSION['verification_code'], $_SESSION['code_expiry'])) {
      
      $_SESSION['error'] = "لا يوجد كود تحقق في الجلسة. أعد المحاولة.";
      
        header("Location: /users_verification_view");
      
      
    }
    
    


    $entered_code = $_POST['verification_code'];
    $saved_code = $_SESSION['verification_code'];
    $code_expiry = $_SESSION['code_expiry'];
    $current_time = time();

    //  cheak if the code is expired
    if ($current_time > $code_expiry) {
        $_SESSION['error'] = "كود التحقق منتهي الصلاحية. يرجى إعادة الإرسال.";
         session_destroy();
        header("Location: /users_verification_view");
        exit();
    }

    // cheak if the code is correct
    if ($entered_code !== $saved_code) {
        $_SESSION['error'] = "رمز التحقق غير صحيح.";
        header("Location: /users_verification_view");
        exit();
    }

    //  get the user data from the sessionn
    $data = $_SESSION['user_data'];

    $name = htmlspecialchars($data['username']);
    $email = filter_var($data['email'], FILTER_SANITIZE_EMAIL);
    $password = password_hash($data['password'], PASSWORD_BCRYPT);
    $type = $data['type'] ?? 'normal';
    $country = htmlspecialchars($data['country']);
    $city = htmlspecialchars($data['city']);
    $street = htmlspecialchars($data['street']);
    $phone = filter_var($data['phone'], FILTER_SANITIZE_STRING);
    $notifications = isset($data['notifications']) ? 1 : 0;
    $verification_code = $_SESSION['verification_code'];
    $code_expiry = $_SESSION['code_expiry'];
    $photo = $_SESSION['photo'] ;

  
    // cheak if the email is already used
    $query = $db->query('SELECT * FROM users WHERE email = :email', [
        'email' => $email
    ])->fetch();

    if ($query) {
        $_SESSION['error'] = "البريد الإلكتروني مستخدم مسبقًا.";
        header('location: /');
        exit();
    }else{

    // enter the data to the database
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
                notifications,
                verification_code,
                code_expiry
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
                :notifications,
                :verification_code,
                :code_expiry
            )",
            [
                'username' => $name,
                'password' => $password,
                'photo' => $photo,
                'email' => $email,
                'type' => $type,
                'country' => $country,
                'city' => $city,
                'street' => $street,
                'phone' => $phone,
                'notifications' => $notifications,
                'verification_code' => $verification_code,
                'code_expiry' => $code_expiry
            ]
        );

        //get the user from the database
        $user = $db->query('SELECT * FROM users WHERE email = :email', [
            'email' => $email
        ])->fetch();

        // 
        
      login($user);

          // clear the session data
        unset($_SESSION['user_data'], $_SESSION['photo'], $_SESSION['verification_code'], $_SESSION['code_expiry']);

        // redirect to the home page
        $_SESSION['success'] = "تم إنشاء الحساب بنجاح. مرحبًا بك في موقعنا!"; 
        header("Location: /");
        exit();

    } 
    catch (PDOException $e) {
        error_log($e->getMessage());
        $_SESSION['error'] = "حدث خطأ أثناء حفظ البيانات.";
        header("Location: /");
        exit();
    }}
  }
