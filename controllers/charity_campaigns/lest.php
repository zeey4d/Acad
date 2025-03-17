<?php
$heading = "one test";
use core\App ;
use core\Database ;


$db = App::resolve(Database::class);


$userID = 1;


// يعرض الحملات التي قد تبرعت له
// يعني ششجمع العناصر بي النسبه لي علاقت المستخدم بهم 
// $note = $db->query("SELECT * from charity_campaigns where id = :id ", [
//   'id' => $_GET['id'],
// ])->findOrFail();

$campaigns = $db->query("SELECT 
C.category_id, 
C.partner_id, 
C.campaign_request_id, 
C.name, 
C.short_description, 
C.full_description, 
C.cost, 
C.state, 
C.start_at, 
C.end_at
FROM CAMPAIGNS C JOIN USERS_DONATE_CAMPAIGNS UDC ON(C.CAMPAIGN_ID = UDC.CAMPAIGN_ID) WHERE UDC.USER_ID = :USER_ID;
",[
    'USER_ID' => $userID
])->fetchAll();

//authorize($note['other_id'] == $userID);



require "views/pages/charity_campaigns/show_view.php";
