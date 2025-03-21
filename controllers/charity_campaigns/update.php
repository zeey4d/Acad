<?php

$heading = "update test";

require 'core\\' . "Validator.php";

use core\App ;
use core\Database;

$db = App::resolve(Database::class);



$userID = 1;



// $note = $db->query("SELECT * from charity_campaigns where id = :id ", [
//   'id' => $_POST['id'],
// ])->findOrFail();

authorize($note['other_id'] == $userID);




$errors = [];

if (!(Validator::string($_POST['anme'], 1, 255))) {
    $errors["titel"] = "Titel  is too short or too long";
}
// if (!(Validator::string($_POST['body'], 1, 1000))) {
//     $errors["titel"] = " body is too short or long";
// }


if (! empty($errors)) {
  
    require "views/pages/charity_campaigns/edit_view.php";
    die();
}
 

// $db->query("UPDATE charity_campaigns set name = :name  " , [
//     'name' => $_POST['name'],

// ]);
$campaigns = $db->query("SELECT * from campaigns where campign_id = :campaign_id ", [
    'campaign_id' => $_GET['campaign_id'],
    ])->findOrFail();
$db->query("update campaigns set
(
    partner_id = :partner_id,
    name= :name,
    short_description = :short_description ,
    full_description = :full_description,
    cost = :cost,
    state = :state,
    end_at = :end_at,
    photo = :photo
)where
    campaign_id = :campaign_id
",[
    'partner_id' =>  $_POST['partner_id'],
    'name' => $_POST['name'],
    'short_description' =>  $_POST['short_description'] ,
    'full_description' =>  $_POST['full_description'],
    'cost' =>  $_POST['cost'],
    'state' =>  $_POST['state'],
    'end_at' =>  $_POST['end_at'],
    'photo' =>  $_POST['photo'],
    'campaign_id' => $_POST['campaign_id']
]);


header("Location: /pages/charity_campaigns");
die();


