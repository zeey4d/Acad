<?php
$heading = "one test";
use core\App ;
use core\Database ;


$db = App::resolve(Database::class);

// زيادة  قيمه المبلغ المتبرع به لي العنصر
// اضافة العنصر الى قئمة المتبرع اليها من قبل المستخدم


header("Location: " . $_SERVER["HTTP_REFERER"]);



