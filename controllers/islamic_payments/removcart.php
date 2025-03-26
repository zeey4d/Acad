<?php
$heading = "one test";
use core\App ;
use core\Database ;


$db = App::resolve(Database::class);
$_POST['user_id'] = $_SESSION['user_id'];
try {
    $db->query(
        "DELETE FROM users_cart_islamic_payments 
         WHERE user_id = :user_id AND islamic_payment_id = :islamic_payment_id",
        [
            'user_id' => $_POST['user_id'],
            'islamic_payment_id' => $_POST['islamic_payment_id']
        ]
    );
} catch (PDOException $e) {
    error_log($e->getMessage());
    $_SESSION['error'] = "حدث خطأ أثناء حفظ البعانات";
    header("Location: /charity_campaigns_create");
    exit();
}


header("Location: " . $_SERVER["HTTP_REFERER"]);
