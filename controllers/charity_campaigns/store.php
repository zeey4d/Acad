<?php
$heading = "Create test";

//dd("goood");

use core\App;
use core\Database;

$db = App::resolve(Database::class);
$errors = [];

//  التحقق من طريقة الإرسال
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $errors['general'] = "يجب إرسال النموذج بطريقة POST";
    header("Location: " . $_SERVER["HTTP_REFERER"]);
    exit();
}

$category_id = $db->query(
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
// استقبال البيانات المطابقة لقاعدة البيانات 
if(isset($_POST['Go__create_chatity'])){
$category_id = $_POST['category_id'];
$partner_id = $_POST['partner_id'];
$name = $_POST['name'];
$short_description = $_POST['short_description'];
$full_description = $_POST['full_description'];
$cost = $_POST['cost'];
$state = $_POST['state'];
$photo = $_POST['photo'];
}

// التحقق من الحقول المطلوبة

// . التحقق من تصنيف الحملة
if (empty($_POST['category_id'])) {
    $errors['category_id'] = "حقل التصنيف مطلوب";
} elseif (!Validator::string($_POST['category_id']?? '', 1, 255)) {
    $errors['category_id'] = "يجب اختيار تصنيف صحيح من القائمة";

}
// . التحقق من الشريك
if (empty($_POST['partner_id'])) {
    $errors['partner_id'] = "حقل الشريك مطلوب";
} elseif (!Validator::number($_POST['partner_id'] ?? '', 1, 1000)) {
    $errors['partner_id'] = "يجب اختيار شريك صحيح من القائمة";
}

// . التحقق من اسم الحملة
if (empty($_POST['name'])) {
    $errors['name'] = "حقل اسم الحملة مطلوب";
} elseif (!Validator::string($_POST['name'] ?? '', 3, 255)) {
    $errors['name'] = "يجب أن يكون اسم الحملة بين 3 إلى 255 حرفاً";
}
// . التحقق من الوصف المختصر
if (empty($_POST['short_description'])) {
   $errors['short_description'] = "حقل الوصف المختصر مطلوب";
} elseif (!Validator::string($_POST['short_description'] ?? '', 20, 1000)) {
    $errors['short_description'] = "يجب أن يكون الوصف المختصر بين 20 إلى 1000 حرفاً";
 }

// . التحقق من الوصف الكامل
if (empty($_POST['full_description'])) {
    $errors['full_description'] = "حقل الوصف الكامل مطلوب";
} elseif (!Validator::string($_POST['full_description'] ?? '', 50, 5000)) {
    $errors['full_description'] = "يجب أن يكون الوصف الكامل بين 50 إلى 5000 حرفاً";
}
// و. التحقق من التكلفة
if (empty($_POST['cost'])) {
    $errors['cost'] = "حقل التكلفة مطلوب";
} elseif (!Validator::number($_POST['cost'] ?? 0, 1, 10000000)) {
 $errors['cost'] = "يجب أن تكون التكلفة بين 1 إلى 10,000,000";
}

// ط. التحقق من الصورة (إذا تم إدخالها)
if (!empty($inputs['photo']) && !filter_var($inputs['photo'], FILTER_VALIDATE_URL)) {
    $errors['photo'] = "رابط الصورة غير صالح. يجب أن يكون رابطاً صحيحاً";
}
// معالجة الأخطاء
if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    $_SESSION['old'] = $_POST;
    header("Location: " . $_SERVER["HTTP_REFERER"]);
        exit();
}

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

//     $_SESSION['success'] = "تم تقديم الطلب بنجاح";
//     header('Location: /charity_campaigns');
//     exit();

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

    $_SESSION['success'] = "تم إنشاء الحملة بنجاح!";
    header('Location: /campaigns');
    exit();


} catch (PDOException $e) {
    error_log($e->getMessage());
    $_SESSION['error'] = "حدث خطأ أثناء حفظ البيانات";
    header("Location: /charity_campaigns_create");
    exit();
}

header("Location: " . $_SERVER["HTTP_REFERER"]);
