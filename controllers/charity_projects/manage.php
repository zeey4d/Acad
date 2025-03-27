<?php

use core\App ;
use core\Database ;
$db = App::resolve(Database::class);


$heading = "All My tests";




try {
    $projects = $db->query("SELECT 
    P.project_id, 
    P.partner_id, 
    P.category_id, 
    P.level, 
    P.name, 
    P.photo, 
    P.short_description, 
    P.full_description, 
    P.type, 
    P.cost, 
    SUM(B.cost) AS collected_money, 
    P.start_at, 
    P.end_at, 
    P.state, 
    P.directorate
    FROM 
    projects P 
    LEFT JOIN 
    users_donate_projects B ON P.project_id = B.project_id
    GROUP BY 
    P.project_id
    ORDER BY 
    P.start_at DESC;"
    )->fetchAll();
} catch (PDOException $e) {
    error_log($e->getMessage());
    $_SESSION['error'] = "حدث خطأ أثناء حفظ البعانات";
    header("Location: /charity_campaigns_create");
    exit();
}

// $charity_projects = $db->query("SELECT * from charity_projects ;")->fetchAll();


require "views/pages/charity_projects/manage_view.php";
