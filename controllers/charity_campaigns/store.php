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
    require "views/pages/charity_campaigns/create_view.php";
    die();
}


$db->query
  ("INSERT INTO campaigns (category_id, partner_id, campaign_request_id, name, short_description, full_description, cost, state, start_at, end_at) 
  VALUES (':category_id', ':partner_id', ':campaign_request_id', ':name', ':short_description', ':full_description', ':cost', ':state', ':start_at', ':end_at')", 
  [
      'category_id' => $_POST['category_id'],
      'partner_id' => $_POST['partner_id'],
      'campaign_request_id' => $_POST['campaign_request_id'],
      'name' => $_POST['name'],
      'short_description' => $_POST['short_description'],
      'full_description' => $_POST['full_description'],
      'cost' => $_POST['cost'],
      'state' => $_POST['state'],
      'start_at' => $_POST['start_at'],
      'end_at' => $_POST['end_at'],
  ]);
  

header("Location: /pages/charity_campaigns");
die();


