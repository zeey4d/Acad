<?php
$heading = "destroy note";
use core\App ;
use core\Database ;

$db = App::resolve(Database::class);

$userID = 1;
 

// $note = $db->query("SELECT * from users where id = :id ", [
//   'id' => $_POST['id'],
// ])->findOrFail();
$user = $db->query("SELECT * from users where user_id = :user_id ", [
  'user_id' => $_GET['user_id']
])->findOrFail();

//authorize($note['other_id'] == $userID);
$db->query("DELETE FROM users where user_id = :user_id", [
    'user_id' => $_POST['user_id']
]);

// $db->query("DELETE FROM users where id = :id", [
//   'id' => $_POST['id'],
// ]);
header("Location: /pages/users");
exit();



