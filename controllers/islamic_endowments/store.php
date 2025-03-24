<?php
$heading = "Create test";



use core\App ;
use core\Database;

$db = App::resolve(Database::class);



$errors = [];

if (!(Validator::string($_POST['name'], 1, 255))) {
    $errors["name"] = "Titel  is too short or too long";
}
// if (!(Validator::string($_POST['body'], 1, 1000))) {
//     $errors["titel"] = " body is too short or long";
// }


if (! empty($errors)) {

    require "views/pages/islamic_endowments/create_view.php";
    die();
}


try {
    $db->query(
        "INSERT INTO endowments (
            category_id,
            partner_id,
            name,
            short_description,
            full_description,
            cost,
            photo
        ) VALUES (
            :category_id,
            :partner_id,
            :name,
            :short_description,
            :full_description,
            :cost,
            :photo
        )",
        [
            'category_id' => $_POST['category_id'],
            'partner_id' => $_POST['partner_id'],
            'name' => htmlspecialchars($_POST['name']),
            'short_description' => htmlspecialchars($_POST['short_description']),
            'full_description' => htmlspecialchars($_POST['full_description']),
            'cost' => filter_var($_POST['cost'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION),
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


