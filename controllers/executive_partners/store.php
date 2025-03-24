<?php
$heading = "Create test";

use core\App;
use core\Database;

$db = App::resolve(Database::class);
$errors = [];

//if (!(Validator::string($_POST['name'], 1, 255))) {
//    $errors["name"] = "Titel  is too short or too long";
//}
// if (!(Validator::string($_POST['body'], 1, 1000))) {
//     $errors["titel"] = " body is too short or long";
// if(isset($_POST["submit"])){
   
//     $file = $_FILES['partner-logo']['name'];
//     $tmp = $_FILES['partner-logo']['tmp_name'];
//     $size = $_FILES['partner-logo']['size'];
//     $type = $_FILES['partner-logo']['type'];
//     $error = $_FILES['partner-logo']['error'];
//     $fileExt = explode('.', $file);
//     $fileActual=strtolower(end($fileExt));
//     $allow=array('jpg','jpeg','png','pdf');
//     // echo$fileActual;
//     // echo"great";
//     if(in_array($fileActual, $allow)){
//         if($error === 0){
//           if($size < 10000000){
//             $filenamenew=uniqid('',true).".".$fileActual;
//             $fileDestination = __DIR__ . '/../../views/media/uploads/' . $filenamenew;

//             echo $fileDestination;
//             move_uploaded_file($tmp,$fileDestination);
//           }else{
//             echo "your file is too big";
//           }
//         }else{  
//             echo "there was an error uploading your file";
//         }
//     } else{
//        echo "you are not allow to uplaod file";
//     }
// } else{
//     echo "error";
// }




// use core\App ;
// use core\Database;

// $db = App::resolve(Database::class);



// $errors = [];

// if (!(Validator::string($_POST['name'], 1, 255))) {
//     $errors["name"] = "Titel  is too short or too long";
// }
// // if (!(Validator::string($_POST['body'], 1, 1000))) {
// //     $errors["titel"] = " body is too short or long";
// // }


// if (! empty($errors)) {

//     require "views/pages/executive_partners/create_view.php";
//     die();
// }


// $db->query("INSERT INTO executive_partners (name) VALUES (:name)", [
//     'name' => $_POST['name'],
// ]);

// $name = $_POST['name'];
// $logo = $_POST['logo'];
// $description = $_POST['description'];
// $more_information = $_POST['more_information'];
// $email = $_POST['email'];
// $directorate = $_POST['directorate'];
// $county = $_POST['county'];
// $city = $_POST['city'];
// $street = $_POST['street'];


// التحقق من الحقول المطلوبة
if (!isset($_POST['name']) || !Validator::string($_POST['name'] ?? '',1 ,255)){
    $errors["name"] = "الاسم يجب ان يكون بين  1 او 255 حرفا";
 }

if (!isset($_POST['city']) || !Validator::string($_POST['city'] ?? '',1 ,255)){
    $errors["city"] = "المدينة يجب ان يكون بين  1 او 255 حرفا";
 }

 if (!isset($_POST['email']) || !Validator::email($_POST['email'])){
    $errors["email"] = "البريد الالكتروني غير صالح ";
 }

if (!isset($_POST['description']) || !Validator::string($_POST['description'] ?? '',1 ,1000)){
    $errors["description"] = "الوصف يجب ان يكون بين  1 او 1000 حرفا";
 }

 if (!isset($_POST['more_information']) || !Validator::string($_POST['more_information'] ?? '',1 ,1000)){
    $errors["more_information"] = "بيانات التواصل الاضافية  يجب ان يكون بين  1 او 1000 حرفا";
 }

 if ( !isset($_POST['directorate']) ||!Validator::string($_POST['directorate'], 1, 255)) {
    $errors["directorate"] = "المديرية يجب أن تكون بين 1 و 255 حرفًا";
}






if ( !isset($_POST['street']) || !Validator::string($_POST['street'], 1, 255)) {
    $errors["street"] = "الشارع يجب أن يكون بين 1 و 255 حرفًا";
}

if (!isset($_FILES['logo']) || $_FILES['logo']['error'] !== UPLOAD_ERR_OK) {
    $errors["logo"] = "يجب تحميل شعار صالح";
}

//  معالجة رفع الشعار
$logo = $_FILES['logo']['name'];
$logo_tmp = $_FILES['logo']['tmp_name'];
$logo_path = "uploads/" . basename($logo);

if (!move_uploaded_file($logo_tmp, $logo_path)) {
    $errors["logo"] = "فشل في تحميل الشعار";
    require "views/pages/executive_partners/create_view.php";
    die();
}

if (! empty($errors)) {

    require "views/pages/executive_partners/create_view.php";
    die();
}


    

// إدخال أرقام الهواتف
// if (isset($_POST['phones']) && is_array($_POST['phones'])) {
    // foreach ($_POST['phones'] as $phone) {
        // $db->query(
            // "INSERT INTO partner_phones (partner_id, phone, type)
            // VALUES
            // (
                // :partner_id,
                // :phone,
                // :type
            // )",
            // [
                // 'partner_id' => $partner_id,
                // 'phone' => $phone['phone'],
                // 'type' => $phone['type']
            // ]
        // );
    // }
// }
// 
// إدخال الحسابات
// if (isset($_POST['accounts']) && is_array($_POST['accounts'])) {
    // foreach ($_POST['accounts'] as $account) {
        // $db->query(
            // "INSERT INTO partners_accounts (partner_id, account, account_type)
            // VALUES
            // (
                // :partner_id,
                // :account,
                // :account_type
            // )",
            // [
                // 'partner_id' => $partner_id,
                // 'account' => $account['account'],
                // 'account_type' => $account['account_type']
            // ]
        // );
    // }
// }
// 
// 
// 
// 


try {
    $db->query(
        "INSERT INTO partners (
            name,
            description,
            more_information,
            email,
            directorate,
            country,
            city,
            street,
            phone,
            photo
        ) VALUES (
            :name,
            :description,
            :more_information,
            :email,
            :directorate,
            :country,
            :city,
            :street,
            :phone,
            :photo
        )",
        [
            'name' => htmlspecialchars($_POST['name']),
            'description' => htmlspecialchars($_POST['description']),
            'more_information' => htmlspecialchars($_POST['more_information']),
            'email' => filter_var($_POST['email'], FILTER_SANITIZE_EMAIL),
            'directorate' => htmlspecialchars($_POST['directorate']),
            'country' => htmlspecialchars($_POST['country']),
            'city' => htmlspecialchars($_POST['city']),
            'street' => htmlspecialchars($_POST['street']),
            'phone' => filter_var($_POST['phone'], FILTER_SANITIZE_STRING),
            'photo' => $_POST['photo']
        ]
    );
    
    
    }catch (PDOException $e) {
        error_log($e->getMessage());
        $_SESSION['error'] = "حدث خطأ أثناء حفظ البعانات";
        header("Location: /charity_projects_create");
        exit();
    }


header("Location: " . $_SERVER["HTTP_REFERER"]);
die();


