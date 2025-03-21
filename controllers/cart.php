<?php
$heading = "About";


$projects = $db->query(
    "SELECT ( project_id, cost, donate_date) FROM users_cart_projects WHERE user_id = :user_id",[
        'user_id' => $userID
    ]
)->fetchAll();// محتوى السلة من المشاريع
$campaigns = $db->query(
    "SELECT ( campaign_id, cost, donate_date) FROM users_cart_campaigns WHERE user_id = :user_id",[
        'user_id' => $userID
    ]
)->fetchAll();// محتوى السلة من الحملات الخيرية
$endowments = $db->query(
    "SELECT ( endowment_id, cost, donate_date) FROM users_cart_endowments WHERE user_id = :user_id",[
        'user_id' => $userID
    ]
)->fetchAll();// محتوى السلة من الأوقاف
$islamic_payments =$db->query(
    "SELECT
    (
        islamic_payment_describtion,"// وصف المدفوعات الاسلامية قد يتم ربطه برابط الى صفحة المدفوعات الاسلامية لانها غير مخزنة في قاعدة البيانات
        ."cost,
        donate_date
    )
    FROM users_cart_islamic_payments WHERE user_id = :user_id",[
        'user_id' => $userID
    ]
)->fetchAll();// محتوى السلة من المصاريف الاسلامية
//صفحة التكلم عن الموقع
require "views/pages/cart_view.php";
