<?php
use core\App ;
use core\Database ;
$db = App::resolve(Database::class);


$heading = "All My tests";

 $partners = $db->query("SELECT * from partners" )->fetchAll();


require "views/pages/executive_partners/manage_view.php";


?>