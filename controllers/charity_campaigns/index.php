<?php

use core\App;
use core\Database;

$db = App::resolve(Database::class);


$heading = "All My tests";
try {
    $campaigns = $db->query(
        "SELECT 
            g.campaign_id, 
            g.category_id, 
            g.partner_id, 
            COALESCE(SUM(u.cost), 0) AS collected_money, 
            g.name, 
            g.photo, 
            g.short_description, 
            g.full_description, 
            g.cost, 
            g.state, 
            g.start_at, 
            g.stop_at, 
            g.end_at
        FROM campaigns g  
        LEFT JOIN users_donate_campaigns u ON g.campaign_id = u.campaign_id  
        GROUP BY g.campaign_id
        ORDER BY g.start_at;"
        )->fetchAll();
} catch (PDOException $e) {
    error_log($e->getMessage());
    $_SESSION['error'] = "حدث خطأ أثناء حفظ البعانات";
    header("Location: /charity_campaigns_create");
    exit();
}





require "views/pages/charity_campaigns/index_view.php";
