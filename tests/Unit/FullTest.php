<?php
require_once __DIR__ . '/../../core/function.php';


test('urls function correctly checks URI', function () {
    $_SERVER["REQUEST_URI"] = "/home";
    expect(urls("/home"))->toBeTrue();
    expect(urls("/dashboard"))->toBeFalse();
});

// test('routeToController function loads correct file', function () {
//     $routes = [
//         "/home" => "controllers/home.php"
//     ];
    
//     ob_start();
//     routeToControler("/home", $routes);
//     $output = ob_get_clean();
    
//     expect($output)->not()->toBeEmpty();
// });


test('logIn function sets session correctly', function () {
    session_start();
    $user = ['email' => 'test@example.com'];
    logIn($user);
    expect($_SESSION['user']['email'])->toBe('test@example.com');
});

test('logOut function clears session', function () {
    session_start();
    $_SESSION['user'] = ['email' => 'test@example.com'];
    logOut();
    expect($_SESSION)->not()->toHaveKey('user');
});