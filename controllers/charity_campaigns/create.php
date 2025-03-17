<?php
$heading = "Create test";




// $db->query("INSERT INTO charity_campaigns (name) VALUES (':item')", [
//     'item' => $_POST['item'],
//   ]);
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
// if (isset($_POST['reports'])) {
//     foreach($_POST['reports'] as $rep){
//       $rs = $db->query("INSERT INTO reports 
//       (name, type, link, sent_at, last_read)
//       values
//       (:name, :type, link, now(), now()) RETURNING report_id
//       ",[
//         'name' => $rep['name'],
//         'type' => $rep['type']
//       ])->fetch();
//       $db->query("INSERT INTO campaigns_reports (campaign_id,report_id) values (:campaign_id, :report_id) ",[
//         'campaign_id' => $rep['campaign_id'],
//         'report_id' => $rs['report_id']
//       ]);
//     }
// }
require "views/pages/charity_campaigns/create_view.php";
