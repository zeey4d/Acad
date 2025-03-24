<?php
$heading = "one test";
use core\App ;
use core\Database ;


$db = App::resolve(Database::class);

try {
    $db->query(
        "INSERT INTO users_cart_campaigns (
            user_id,
            campaign_id,
            cost
        ) VALUES (
            :user_id,
            :campaign_id,
            :cost
        )",
        [
            'user_id' => $_POST['user_id'],
            'campaign_id' => $_POST['campaign_id'],
            'cost' => filter_var($_POST['cost'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION)
        ]
    );
} catch (PDOException $e) {
    error_log($e->getMessage());
    $_SESSION['error'] = "حدث خطأ أثناء حفظ البعانات";
    header("Location: /charity_campaigns_create");
    exit();
}


header("Location: " . $_SERVER["HTTP_REFERER"]);



