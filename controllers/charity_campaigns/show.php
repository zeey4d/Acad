<?php
$heading = "one test";
use core\App ;
use core\Database ;


$db = App::resolve(Database::class);


$userID = 1;



$campaigns = $db->query("SELECT * from campaigns where campaign_id = :campaign_id ", [
  'campaign_id' => $_GET['campaign_id'],
])->findOrFail();

//authorize($note['other_id'] == $userID);



require "views/pages/charity_campaigns/show_view.php";
