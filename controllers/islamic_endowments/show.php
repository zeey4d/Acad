<?php
$heading = "one test";
use core\App ;
use core\Database ;


$db = App::resolve(Database::class);


$userID = 1;



// $endowments = $db->query("SELECT * from endowments where endowment_id = :endowment_id ", [
//     'endowment_id' => $_GET['endowment_id']
// ])->findOrFail();

$endowments = $db->query(
    "SELECT 
        A.category_id,
        A.partner_id,
        A.name,
        A.short_description,
        A.full_description,
        A.cost,
        sum(B.cost) as donate_cost,
        max(B.donate_date) as donate_date,
        A.start_at,
        A.end_at,
        A.state,
        A.directorate,
        A.city,
        A.street,
        A.photo
    FROM endowments A JOIN users_donate_endowments B ON (A.endowment_id = B. endowment_id)
    GROUP BY(A.endowment_id)
    HAVING A.endowment_id = : endowment_id
    ORDER BY donate_date DESC
    ",[
        'endowment_id' => $_GET['endowment_id']
    ]
);

// $note = $db->query("SELECT * from islamic_endowments where id = :id ", [
//   'id' => $_GET['id'],
// ])->findOrFail();

//authorize($note['other_id'] == $userID);



require "views/pages/islamic_endowments/show_view.php";
