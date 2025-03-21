
<?php

use core\App;
use core\Database;


$db  = App::resolve(Database::class);


$email = $_POST['email'];
$password = $_POST['password'];

$erorrs = [];

if (! Validator::email($email)) {
    $erorrs['email'] = "not a valid email ";
}
if (! Validator::string($password, 8, 255)) {
    $erorrs['password'] = "password is too short password ";
}

if (! empty($erorrs)) {
    require 'views/registertion/create_view.php';
}





$user =  $db->query(
    'select * from users where email = :email',
    ['email' => $email]
)->findOrFail();

$user_id = $db->query(
    "INSERT INTO USERS (username, password, photo, email, type, directorate, county, city, street, phone)
     VALUES (:username, :password, :photo, :email, :type, :directorate, :county, :city, :street, :phone)",
    [
    'username' => $_POST['username'],
    'password' => $_POST['password'],
    'photo' => $_POST['photo'],
    'email' => $_POST['email'],
    'type' => $_POST['type'],
    'directorate' => $_POST['directorate'],
    'county' => $_POST['county'],
    'city' => $_POST['city'],
    'street' => $_POST['street'],
    'phone' => $_POST['phone']
    ]
)->getGeneratedKey();

if ($user) {
    header("Location: /");
} else {

    // $db->query(
    //     'INSERT INTO users (username , email , password ,admin ) VALUES (:username ,:email , :password , :admin);',
    //     [
    //         'username' => 'guo',
    //         'email' => $email,
    //         'password' => password_hash($password, PASSWORD_BCRYPT),
    //         'admin' => 0
    //     ]
    // );


    logIn($user);



    header("Location: /");
    die();
}
