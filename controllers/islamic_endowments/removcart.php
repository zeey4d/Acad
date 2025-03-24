<?php
$heading = "one test";
use core\App ;
use core\Database ;


$db = App::resolve(Database::class);

try {
    $db->query(
        "DELETE FROM users_cart_endowments 
         WHERE user_id = :user_id AND endowment_id = :endowment_id",
        [
            'user_id' => $_POST['user_id'],
            'endowment_id' => $_POST['endowment_id']
        ]
    );    
} catch (PDOException $e) {
    error_log($e->getMessage());
    $_SESSION['error'] = "حدث خطأ أثناء حفظ البعانات";
    header("Location: /charity_campaigns_create");
    exit();
}


header("Location: " . $_SERVER["HTTP_REFERER"]);
