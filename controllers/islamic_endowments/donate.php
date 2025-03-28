\<?php
$heading = "one test";
use core\App ;
use core\Database ;


$db = App::resolve(Database::class);

try {
    $db->query(
        "INSERT INTO users_donate_endowments (
            user_id,
            endowment_id,
            cost,
            donate_date
        ) VALUES (
            :user_id,
            :endowment_id,
            :cost,
            :donate_date
        )",
        [
            'user_id' => filter_var( $_SESSION['user']['id'], FILTER_SANITIZE_NUMBER_INT),
            'endowment_id' => $_POST['endowment_id'],
            'cost' => filter_var($_POST['cost'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION),
            'donate_date' => date('Y-m-d H:i:s') // Defaulting to current timestamp if not provided
        ]
    );
    
} catch (PDOException $e) {
    error_log($e->getMessage());
    $_SESSION['error'] = "حدث خطأ أثناء حفظ البعانات";
    header("Location: /charity_campaigns_create");
    exit();
}


header("Location: " . $_SERVER["HTTP_REFERER"]);



