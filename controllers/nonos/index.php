<?php
use core\App ;
use core\Database ;
$db = App::resolve(Database::class);


$heading = "All My tests";


$nonos = $db->query("SELECT * from nonos ;")->fetchAll();


require "views/nonos/index_view.php";


?>