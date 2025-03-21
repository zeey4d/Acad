<?php
$heading = "Create test";



use core\App ;
use core\Database;

$db = App::resolve(Database::class);



$errors = [];

if (!(Validator::string($_POST['name'], 1, 255))) {
    $errors["name"] = "Titel  is too short or too long";
}
// if (!(Validator::string($_POST['body'], 1, 1000))) {
//     $errors["titel"] = " body is too short or long";
// }


if (! empty($errors)) {

    require "views/pages/charity_projects/create_view.php";
    die();
}


// $db->query("INSERT INTO charity_projects (name) VALUES (:name)", [
//     'name' => $_POST['name'],
// ]);
$partner_id = $db->query("INSERT INTO projects ( partner_id,  category_id,  level,  name,  photo,  short_description,  full_description,  type,  cost,  start_at,  end_at,  state,  directorate)
VALUES
    (
    :partner_id,
    :category_id,
    :level,
    :name,
    :photo,
    :short_description,
    :full_description,
    :type, :cost,
    now(),
    :end_at,
    :state,
    :directorate
    )",
    [
        'partner_id' => $_POST['partner_id'],
        'category_id'=> $_POST['category_id'],
        'name' => $_POST['name'],
        'photo' => $_POST['photo'],
        'level' => $_POST['level'],
        'short_description' => $_POST['short_description'],
        'full_description' => $_POST['full_description'],
        'type' => $_POST['type'],
        'cost' => $_POST['cost'],
        'end_at' => $_POST['end_at'],
        'state' => $_POST['state'],
        'directorate' => $_POST['directorate']
    ])->getGeneratedKey();
header("Location: /pages/charity_projects");
die();


