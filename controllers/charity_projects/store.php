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
// }


if (! empty($errors)) {

    require "views/pages/charity_projects/create_view.php";
    die();
}


// $db->query("INSERT INTO charity_projects (name) VALUES (:name)", [
//     'name' => $_POST['name'],
// ]);
// $partner_id = $db->query("INSERT INTO projects ( partner_id,  category_id,  level,  name,  photo,  short_description,  full_description,  type,  cost,  start_at,  end_at,  state,  directorate)
// VALUES
//     (
//     :partner_id,
//     :category_id,
//     :level,
//     :name,
//     :photo,
//     :short_description,
//     :full_description,
//     :type, :cost,
//     now(),
//     :end_at,
//     :state,
//     :directorate
//     )",
//     [
//         'partner_id' => $_POST['partner_id'],
//         'category_id'=> $_POST['category_id'],
//         'name' => $_POST['name'],
//         'photo' => $_POST['photo'],
//         'level' => $_POST['level'],
//         'short_description' => $_POST['short_description'],
//         'full_description' => $_POST['full_description'],
//         'type' => $_POST['type'],
//         'cost' => $_POST['cost'],
//         'end_at' => $_POST['end_at'],
//         'state' => $_POST['state'],
//         'directorate' => $_POST['directorate']
//     ])->getGeneratedKey('project_id');


// استقبال البيانات المطابقة لقاعدة البيانات 
// $category_id = $_POST['category_id'];
// $partner_id = $_POST['partner_id'];
// $name = $_POST['name'];
// $short_description = $_POST['short_description'];
// $full_description = $_POST['full_description'];
// $cost = $_POST['cost'];
// $state = $_POST['state'];
// $end_at = $_POST['end_at'];
// $age = $_POST ['age']; 

//   // استقبال البيانات من النموذج
//  $caseType = $_POST['caseType'];
//  $age = $_POST ['age']; 
//  $circumstances = $_POST['circumstances'];
//  $amount = $_POST['amount'];
//  $accountNumber = $_POST['accountNumber']; 
//  $bankName = $_POST['bankName']; 
//  $accountType = $_POST['accountType']; 
//  $documents = $_POST['documents']; 
//  $idFont = $_POST['idFont']; 
//  $idback = $_POST['idback']; 


 // التحقق من الحقول المطلوبة

if (!isset($_POST['category_id']) || !Validator::string($_POST['category_id'] ?? '', 1, 255)) {
    $errors["category_id"] = " يجب اختيار تصنيف صحيح للحملة";
}
if (!isset($_POST['name']) || !Validator::string($_POST['name'] ?? '', 1, 255)) {
    $errors["name"] = "الاسم يجب ان يكون بين  1 او 255 حرفا";
}
if (!isset($_POST['age']) || !(Validator::number($_POST['age'] ?? '', 1, 100))) {
   $errors["age"] = "العمر غير صالح ";
}
if (!isset($_POST['partner_id']) || !Validator::string($_POST['partner_id'] ?? '', 1, 1000)) {
    $errors["partner_id"] = " يجب اختيار شريك صحيح ";
}
if (!isset($_POST['state']) || !Validator::string($_POST['state'] ?? '', 1, 225)) {
    $errors["state "] = "الحالة  غير صالح ";
}
if (!isset($_POST['short_description']) || !Validator::string($_POST['short_description'] ?? '',10, 1000)) {
    $errors["short_description"] = "  الوصف المختصر يجب ان يكون بين 10الى 1000 حرفا";
}
if (!isset($_POST['full_description']) || !Validator::string($_POST['full_description'] ?? '', 30, 1000)) {
    $errors["full_description"] = "لوصف المختصر يجب ان يكون بين 10الى 1000 حرفا";
}
if (!Validator::number($_POST['cost'] ?? 0, 1, 10000000)) {
    $errors["name"] = " المبلغ غير صالح ";
}
//  // معالجة الأخطاء
//  if (!empty($errors)) {
//     $_SESSION['errors'] = $errors;
//     $_SESSION['old'] = $_POST;
//     header('Location: /charity_campaigns/create');
//     exit();
// }

//  //  معالجة الملفات المرفوعة
// $uploadDir = __DIR__ . 'views\media\images';
// if (!is_dir($uploadDir)) {
//     mkdir($uploadDir, 0755, true);
// }

// // معالجة المستندات الداعمة
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
// // $idFrontName = uniqid() . '_' . basename($_FILES['idFront']['name']);
// // move_uploaded_file($_FILES['idFront']['tmp_name'], $uploadPath . $idFrontName);
// // 
// // $idBackName = uniqid() . '_' . basename($_FILES['idBack']['name']);
// // move_uploaded_file($_FILES['idBack']['tmp_name'], $uploadPath . $idBackName);


// $allowedTypes = ['image/jpeg', 'application/pdf'];
// if (!in_array($_FILES['idFront']['type'], $allowedTypes)) {
//     $errors['idFront'] = 'نوع الملف غير مسموح به';
// }

// if ($_FILES['idFront']['size'] > 2 * 1024 * 1024) {
//     $errors['idFront'] = 'حجم الملف يتجاوز 2MB';
// }

//     $_SESSION['success'] = "تم تقديم الطلب بنجاح";
//     header('Location: /charity_campaigns');
//     exit();

// } catch (PDOException $e) {
//     error_log($e->getMessage());
//     $_SESSION['error'] = "حدث خطأ أثناء حفظ البيانات";
//     header('Location: /charity_campaigns/create');
//     exit();
// }

// //  إذا كان هناك أخطاء، عرضها
// if (!empty($errors)) {
//     require "views/pages/charity_campaigns/create_view.php";
//     die();
// }


try {
    $db->query(
        "INSERT INTO projects (
            partner_id,
            category_id,
            name,
            photo,
            short_description,
            full_description,
            cost,
            country,
            city,
            street
        ) VALUES (
            :partner_id,
            :category_id,
            :name,
            :photo,
            :short_description,
            :full_description,
            :cost,
            :country,
            :city,
            :street
        )",
        [
            'partner_id' => $_POST['partner_id'],
            'category_id' => $_POST['category_id'],
            'name' => htmlspecialchars($_POST['name']),
            'photo' => $_POST['photo'],
            'short_description' => htmlspecialchars($_POST['short_description']),
            'full_description' => htmlspecialchars($_POST['full_description']),
            'cost' => filter_var($_POST['cost'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION),
            'country' => htmlspecialchars($_POST['country']),
            'city' => htmlspecialchars($_POST['city']),
            'street' => htmlspecialchars($_POST['street'])
        ]
    );
} catch (PDOException $e) {
    error_log($e->getMessage());
    $_SESSION['error'] = "حدث خطأ أثناء حفظ البعانات";
    header("Location: /charity_projects_create");
    exit();
}


header("Location: " . $_SERVER["HTTP_REFERER"]);
die();
