<?php
$heading = "one test";
use core\App ;
use core\Database ;


$db = App::resolve(Database::class);


$userID = 1;



// $note = $db->query("SELECT * from statistics where id = :id ", [
//   'id' => $_GET['id'],
// ])->findOrFail();

//authorize($note['other_id'] == $userID);

$campaigns_statistics['donates_sum'] = $db->query("SELECT sum(cost) as donates_sum from users_donate_campaigns ;")->fetch();// اجمالي التبرعات للحملات الخيرية
$campaigns_statistics['count'] = $db->query("SELECT count(*) as count from campaigns ;")->fetch();// عدد الحملات الخيرية

$endowments_statistics['donates_sum'] = $db->query("SELECT sum(cost) as donates_sum from users_donate_endowments ;")->fetch(); //اجمالي التبرعات للاوقاف 
$endowments_statistics['count'] = $db->query("SELECT count(*) as count from endowments ;")->fetch(); // عدد الاوقاف

$projects_statistics['donates_sum'] = $db->query("SELECT sum(cost) as donates_sum from users_donate_projects ;")->fetch(); //  اجمالي التبرعات للمشاريع
$projects_statistics['count'] = $db->query("SELECT count(*) as count from projects ;")->fetch(); // عدد المشاريع

$users_statistics['donates_sum'] =
    $campaigns_statistics['donates_sum']['donates_sum']+
    $endowments_statistics['donates_sum']['donates_sum']+
    $projects_statistics['donates_sum']['donates_sum']+
    $islamic_payments_statistics['users_paid_count']['users_paid_count']; // اجمالي تبرعات المستخدمين



require "views/pages/statistics/show_view.php";
