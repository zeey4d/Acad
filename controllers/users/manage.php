<?php
use core\App ;
use core\Database ;
$db = App::resolve(Database::class);


$heading = "All My tests";


// $users = $db->query("SELECT * from users ;")->fetchAll();


$users = $db->query("SELECT * from users ;")->fetchAll();

require "views/pages/users/manage_view.php";
?>