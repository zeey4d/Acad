<?php
$heading = "Edit test";

use core\App ;
use core\Database ;


$db = App::resolve(Database::class);


$userID = 1;

$campaigns = $db->query("SELECT * from campaigns where campign_id = :campaign_id ", [
'campaign_id' => $_GET['campaign_id'],
])->findOrFail();
//authorize($item['other_id'] == $userID);
$db->query("update campaigns set 
(
    partner_id = :partner_id,
    name= :name, 
    short_description = :short_description , 
    full_description = :full_description, 
    cost = :cost, 
    state = :state, 
    end_at = :end_at
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
    'campaign_id' => $_POST['campaign_id']
]);





require "views/pages/charity_campaigns/edit_view.php";
