<?php
$heading = "Create test";




// $db->query("INSERT INTO charity_campaigns (name) VALUES (':item')", [
//     'item' => $_POST['item'],
//   ]);
// $campaign_id = $db->query
//   ("INSERT INTO campaigns (category_id, partner_id, campaign_request_id, name, short_description, full_description, cost, state, start_at, end_at)
//   VALUES (:category_id, :partner_id, :campaign_request_id, :name, :short_description, :full_description, :cost, :state, now(), :end_at) RETURNING campaign_id",
//   [
//       'category_id' => $_POST['category_id'],
//       'partner_id' => $_POST['partner_id'],
//       'campaign_request_id' => $_POST['campaign_request_id'],
//       'name' => $_POST['name'],
//       'short_description' => $_POST['short_description'],
//       'full_description' => $_POST['full_description'],
//       'cost' => $_POST['cost'],
//       'state' => $_POST['state'],
//       'end_at' => $_POST['end_at'],
//   ])->getGeneratedKey('campaign_id');

require "views/pages/charity_campaigns/create_view.php";
