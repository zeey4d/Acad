<?php
$heading = "one test";
use core\App ;
use core\Database ;


$db = App::resolve(Database::class);


$userID = 1;



// $note = $db->query("SELECT * from users where id = :id ", [
//   'id' => $_GET['id'],
// ])->findOrFail();
$users = $db->query("SELECT (username, password, photo, email, type, directorate, county, city, street, phone) from users where user_id = :user_id ", [
    'user_id' => $_GET['user_id']
  ])->findOrFail();
  
//authorize($note['other_id'] == $userID);



require "views/pages/users/show_view.php";
