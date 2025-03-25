<?php
$heading = "Create test";

//dd("goood");

use core\App;
use core\Database;

$db = App::resolve(Database::class);

$errors = [];

// $campaign_id = $db->query
//   ("INSERT INTO campaigns (category_id, partner_id, campaign_request_id, name, short_description, full_description, cost, state, start_at, end_at, photo)
//   VALUES (:category_id, :partner_id, :campaign_request_id, :name, :short_description, :full_description, :cost, :state ,now(), :end_at, :photo)",
//   [
//       'category_id' => $_POST['category_id'],
//       'partner_id' => $_POST['partner_id'],
//       'campaign_request_id' => $_POST['campaign_request_id'],
//       'name' => $_POST['name'],
//       'short_description' => $_POST['short_description'],
//       'full_description' => $_POST['full_description'],
//       'cost' => $_POST['cost'],
//       'state' => $_POST['state'],
//       'end_at' => $_POST['end_at'],
//       'photo' => $_POST['photo']
//   ])->fetchAll();

 $campaign_id = $db->query(
    "INSERT INTO campaigns (
        category_id,
        partner_id,
        name,
        short_description,
        full_description,
        cost,
        state,
        photo
    ) VALUES (
        :category_id,
        :partner_id,
        :name,
        :short_description,
        :full_description,
        :cost,
        :state,
        :photo
    )",
    [
        'category_id' => $_POST['category_id'],
        'partner_id' => $_POST['partner_id'],
        'name' => htmlspecialchars($_POST['name']),
        'short_description' => htmlspecialchars($_POST['short_description']),
        'full_description' => htmlspecialchars($_POST['full_description']),
        'cost' => filter_var($_POST['cost'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION),
        'state' => $_POST['state'] ?? 'active', // Default value if not provided
        'photo' => $_POST['photo']     ]
    )->fetchAll();
// استقبال البيانات المطابقة لقاعدة البيانات 

$category_id = $_POST['category_id'];
$partner_id = $_POST['partner_id'];
$campaign_request_id =$_POST['campaign_request_id'];
$name = $_POST['name'];
$short_description = $_POST['short_description'];
$full_description = $_POST['full_description'];
$cost = $_POST['cost'];
$state = $_POST['state'];
$end_at = $_POST['end_at'];
$photo = $_POST['photo'];

// استقبال البيانات من النموذج

//  $caseType = $_POST['caseType'];
//  $age = $_POST ['age']; 
//  $circumstances = $_POST['circumstances'];
//  $amount = $_POST['amount'];
//  $accountNumber = $_POST['accountNumber']; 
//  $bankName = $_POST['bankName']; 
// $accountType = $_POST['accountType']; 
// $documents = $_POST['documents']; 
// $idFont = $_POST['idFont']; 
// $idback = $_POST['idback']; 

// التحقق من الحقول المطلوبة

if (!isset($_POST['category_id']) || !Validator::string($_POST['category_id'] ?? '', 1, 255)) {
    $errors["category_id"] = "نوع الحالة غير صالحة";
}
if (!isset($_POST['name']) || !Validator::string($_POST['name'] ?? '', 1, 255)) {
    $errors["name"] = "الاسم يجب ان يكون بين  1 او 255 حرفا";
}
//if (!isset($_POST['age']) || !(Validator::number($_POST['age'] ?? '', 1, 100))) {
//    $errors["age"] = "العمر غير صالح ";
//}
if (!isset($_POST['partner_id']) || !Validator::string($_POST['partner_id'] ?? '', 1, 1000)) {
    $errors["partner_id"] = "الظروف غير صالح";
}
if (!isset($_POST['accountNumber']) || !Validator::string($_POST['accountNumber'] ?? '', 1, 225)) {
    $errors["accountNumber "] = "االحساب غير صالح ";
}
if (!isset($_POST['short_description']) || !Validator::string($_POST['short_description'] ?? '', 1, 1000)) {
    $errors["short_description"] = "  الوصف غير صالح";
}
if (!isset($_POST['full_description']) || !Validator::string($_POST['full_description'] ?? '', 1, 1000)) {
    $errors["full_description"] = "  الوصف  غير صالح";
}
if (!Validator::number($_POST['cost'] ?? 0, 1, 10000000)) {
    $errors["name"] = " المبلغ غير صالح ";
}

// معالجة الأخطاء
// if (!empty($errors)) {
//     $_SESSION['errors'] = $errors;
//     $_SESSION['old'] = $_POST;
//     header('Location: /charity_campaigns_create');
//     exit();
// }

//  معالجة الملفات المرفوعة
// $uploadDir = __DIR__ . 'views\media\images';
// if (!is_dir($uploadDir)) {
//     mkdir($uploadDir, 0755, true);
// }

// معالجة المستندات الداعمة
// $documents = [];
// foreach ($_FILES['documents']['tmp_name'] as $key => $tmpName) {
//     $fileName = basename($_FILES['documents']['name'][$key]);
//     move_uploaded_file($tmpName, $uploadDir . $fileName);
//     $documents[] = $fileName;
// }

// // معالجة صور البطاقة
// $idFront = basename($_FILES['idFront']['name']);
// move_uploaded_file($_FILES['idFront']['tmp_name'], $uploadDir . $idFront);

// $idBack = basename($_FILES['idBack']['name']);
// move_uploaded_file($_FILES['idBack']['tmp_name'], $uploadDir . $idBack);


// // حفظ صور البطاقة
// $idFrontName = uniqid() . '_' . basename($_FILES['idFront']['name']);
// move_uploaded_file($_FILES['idFront']['tmp_name'], $uploadPath . $idFrontName);

// $idBackName = uniqid() . '_' . basename($_FILES['idBack']['name']);
// move_uploaded_file($_FILES['idBack']['tmp_name'], $uploadPath . $idBackName);
// //  
// // 
// $allowedTypes = ['image/jpeg', 'application/pdf'];
// if (!in_array($_FILES['idFront']['type'], $allowedTypes)) {
//     $errors['idFront'] = 'نوع الملف غير مسموح به';
// }
// // 
// if ($_FILES['idFront']['size'] > 2 * 1024 * 1024) {
//     $errors['idFront'] = 'حجم الملف يتجاوز 2MB';
// }
// 
// $accountNumber = openssl_encrypt(
//     $_POST['accountNumber'],
//     'AES-256-CBC',
//     'your-encryption-key'
// );

// if (!empty($errors)) {
//     header("Location: /charity_campaigns_create");;
//     die();
// }


//     $_SESSION['success'] = "تم تقديم الطلب بنجاح";
//     header('Location: /charity_campaigns');
//     exit();

// دالة مساعدة للتشفير
// function encryptData($data) {
//     return openssl_encrypt(
//         $data,
//         'AES-256-CBC',
//         'your-secret-key',
//         0,
//         'your-iv-vector'
//     );
// }

//  إذا كان هناك أخطاء، عرضها
// if (!empty($errors)) {
//     require "views/pages/charity_campaigns/create_view.php";
//     die();
// }


try {
    $db->query(
        "INSERT INTO campaigns (
            category_id,
            partner_id,
            name,
            short_description,
            full_description,
            cost,
            state,
            photo
        ) VALUES (
            :category_id,
            :partner_id,
            :name,
            :short_description,
            :full_description,
            :cost,
            :state,
            :photo
        )",
        [
            'category_id' => $_POST['category_id'],
            'partner_id' => $_POST['partner_id'],
            'name' => htmlspecialchars($_POST['name']),
            'short_description' => htmlspecialchars($_POST['short_description']),
            'full_description' => htmlspecialchars($_POST['full_description']),
            'cost' => filter_var($_POST['cost'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION),
            'state' => $_POST['state'] ?? 'active', // Default value if not provided
            'photo' => $_POST['photo']
        ]
    );
} catch (PDOException $e) {
    error_log($e->getMessage());
    $_SESSION['error'] = "حدث خطأ أثناء حفظ البعانات";
    header("Location: /charity_campaigns_create");
    exit();
}



header("Location: " . $_SERVER["HTTP_REFERER"]);
