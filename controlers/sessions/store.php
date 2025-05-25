<?php

use core\App;
use core\Database;
use models\User;

$db  = App::resolve(Database::class);


// $email = $_POST['email'];
// $password = $_POST['password'];

// $erorrs = [];

// if (! Validator::email($email)) {
//     $erorrs['email'] = "not a valid email ";
// }
// if (! Validator::string($password)) {
//     $erorrs['password'] = "password is not valid ";
// }

// if (! empty($erorrs)) {
//     require 'views/sessions/create_view.php';
// }

// $user = $db->query("select * from users where email = :email ; ", [
//     "email" => $email
// ])->fetch();

// if ($user) {
//     if (password_verify($password, $user['password'])) {
//         logIn($user);
//         header("Location: /");
//         exit();
//     }
// }


// $erorrs['email'] = "There No Matching Email Or Password Like this";


$erorrs = [];




if (empty($_POST['email'])) {
    $erorrs['email'] = "Please enter your email";
}

if (empty($_POST['password'])) {
    $erorrs['password'] = "Please enter your password";
}


if (! Validator::email($_POST['email'])) {
    $erorrs['email'] = "not a valid email ";
}
if (! Validator::string($_POST['password'])) {
    $erorrs['password'] = "password is not valid ";
}

if (! empty($erorrs)) {
    require 'views/sessions/create_view.php';
}

$user = $db->query("select * from users where email = :email ; ", [
    "email" => $_POST['email']
])->fetch();


// $password = $_POST['password'];
// $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// $db->query("INSERT INTO users (email, password) VALUES (:email, :password)", [
//     "email" => $_POST['email'],
//     "password" => $hashedPassword
// ]);



// if ($user) {
//     if (password_verify($_POST['password'], $user['password'])) {
//         logIn($user);
//         header("Location: /");
//         exit();
//     }
// }

if ($user) {
    if ($_POST['password'] == $user['password']) {
        logIn($user);
        header("Location: /");
        exit();
    }
}



var_dump($_POST);

$user = $db->query("SELECT * FROM users WHERE email = :email", [
    "email" => $_POST['email']
])->fetch();

if (!$user) {
    die("User not found.");
}

if (!password_verify($_POST['password'], $user['password'])) {
    die("Wrong password.");
}


$erorrs['email'] = "There No Matching Email Or Password Like this";


// require 'views/sessions/create_view.php';

require 'views/users/index_view.php';

