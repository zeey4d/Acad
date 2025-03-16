<?php
// use core\App ;
// use core\Database ;
// $db = App::resolve(Database::class);


// $heading = "All My cards";


// // $cards = $db->query("SELECT * from cards ;")->fetchAll();


// require "views/pages/index_view.php";

$heading = "Home";

$_SESSION['name']= "Developer";

require "views/pages/cards/index_view.php";


?>