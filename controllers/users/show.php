<?php
$heading = "one test";

use core\App;
use core\Database;


$db = App::resolve(Database::class);

$_SESSION['user_id'] = 1;






// $note = $db->query("SELECT * from users where id = :id ", [
//   'id' => $_GET['id'],
// ])->findOrFail();

try {
  $categories = $db->query(
    "SELECT * FROM categories"
  )->fetchAll(); // Fetch all rows from the query result 
  $partners = $db->query(
    "SELECT * FROM partners"
  )->fetchAll(); // Fetch all rows from the query result
  $users = $db->query("SELECT * from users where user_id = :user_id ", [
    'user_id' => $_SESSION['user_id']
  ])->findOrFail();
} catch (PDOException $e) {
  error_log($e->getMessage());
  $_SESSION['error'] = "حدث خطأ أثناء حفظ البعانات";
  header("Location: /charity_campaigns_create");
  exit();
}

//authorize($note['other_id'] == $userID);



require "views/pages/users/show_view.php";
