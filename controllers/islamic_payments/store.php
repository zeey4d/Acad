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


try {
    $db->query(
        "INSERT INTO islamic_payments (
            type,
            cost,
            paid_cost,
            paid_for,
            payment_date,
            user_id,
            photo
        ) VALUES (
            :type,
            :cost,
            :paid_cost,
            :paid_for,
            :payment_date,
            :user_id,
            :photo
        )",
        [
            'type' => htmlspecialchars($_POST['type']),
            'cost' => filter_var($_POST['cost'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION),
            'paid_cost' => filter_var($_POST['paid_cost'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION),
            'paid_for' => htmlspecialchars($_POST['paid_for']),
            'payment_date' => $_POST['payment_date'] ?? date('Y-m-d H:i:s'), // Default to current timestamp
            'user_id' => $_POST['user_id'],
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

