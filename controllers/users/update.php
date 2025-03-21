<?php

$heading = "update test";

require 'core\\' . "Validator.php";

use core\App ;
use core\Database;

$db = App::resolve(Database::class);



$userID = 1;



// $note = $db->query("SELECT * from users where id = :id ", [
//   'id' => $_POST['id'],
// ])->findOrFail();

authorize($note['other_id'] == $userID);




$errors = [];

if (!(Validator::string($_POST['anme'], 1, 255))) {
    $errors["titel"] = "Titel  is too short or too long";
}
// if (!(Validator::string($_POST['body'], 1, 1000))) {
//     $errors["titel"] = " body is too short or long";
// }


if (! empty($errors)) {
    require "views/pages/users/edit_view.php";
    die();
}
$users = $db->query("SELECT (username, password, photo, email, type, directorate, county, city, street, phone) from users where user_id = :user_id ", [
    'user_id' => $_GET['user_id']
  ])->findOrFail();
// $db->query("UPDATE users set name = :name  " , [
//     'name' => $_POST['name'],

// ]);

$db->query("UPDATE users SET
    username = :username,
    password = :password,
    photo = :photo,
    email = :email,
    type = :type,
    directorate = :directorate,
    county = :county,
    city = :city,
    street = :street,
    phone = :phone
    WHERE user_id = :user_id",[
    'username' => $_POST['username'],
    'password' => $_POST['password'],
    'photo' => $_POST['photo'],
    'email' => $_POST['email'],
    'type' => $_POST['type'],
    'directorate' => $_POST['directorate'],
    'county' => $_POST['county'],
    'city' => $_POST['city'],
    'street' => $_POST['street'],
    'phone' => $_POST['phone'],
    'user_id' => $_POST['user_id']
]);

header("Location: /pages/users");
die();


