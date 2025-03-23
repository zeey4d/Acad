<?php
use core\App ;
use core\Database ;
$db = App::resolve(Database::class);


$heading = "All My tests";


 $islamic_endowments = $db->query("SELECT * from endowments;")->fetchAll();
// $endowments = $db->query(
//     "SELECT 
//         A.category_id,
//         A.partner_id,
//         A.name,
//         A.short_description,
//         A.full_description,
//         A.cost,
//         sum(B.cost) as donate_cost,
//         max(B.donate_date) as donate_date,
//         A.start_at,
//         A.end_at,
//         A.state,
//         A.directorate,
//         A.city,
//         A.street,
//         A.photo
//     FROM endowments A JOIN users_donate_endowments B ON (A.endowment_id = B. endowment_id)
//     GROUP BY(A.endowment_id)
//     HAVING A.endowment_id IN
//     (
//         select endowment_id from users_donate_endowments
//     )
//     ORDER BY donate_date DESC
//     "
// );


require "views/pages/islamic_endowments/manage_view.php";


?>