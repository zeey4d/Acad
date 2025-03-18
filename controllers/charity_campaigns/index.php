<?php
use core\App ;
use core\Database ;
$db = App::resolve(Database::class);


$heading = "All My tests";


$campaigns = $db->query("SELECT * from campaigns ;")->fetchAll();


require "views/pages/charity_campaigns/index_view.php";


?>