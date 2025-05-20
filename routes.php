<?php



$router->get('/users_index_view', 'views/users/index_view.php');
$router->get('/users_create_view', 'views/users/create_view.php');

$router->get('/show_view', 'views/show_view.php');

$router->get('/cart_view', 'views/cart_view.php');


//.......................
$router->get('/', 'controlers/index.php');

$router->get('/about', 'controlers/about.php');

$router->get('/contact', 'controlers/contact.php');

$router->get('/show', 'controlers/show.php');

$router->get('/cart', 'controlers/cart.php');


$router->get('/notes', 'controlers/notes/index.php')->only('auth');

$router->get('/note', 'controlers/notes/show.php')->only('auth');
$router->delete('/note', 'controlers/notes/destroy.php');
$router->delete('/note', 'controlers/notes/show.php');
$router->patch('/note', 'controlers/notes/update.php');


$router->get('/notes/Create', 'controlers/notes/create.php');
$router->post('/notes/Create', 'controlers/notes/store.php');

$router->get('/notes/edit', 'controlers/notes/edit.php');


$router->get('/users_index','controlers/users/index.php');
$router->get('/users_create','controlers/users/create.php')->only('guest');
$router->post('/register','controlers/registertion/store.php');

$router->get('/login','controlers/sessions/create.php')->only('guest');
$router->delete('/logout','controlers/sessions/destroy.php')->only('auth');
$router->post('/login','controlers/sessions/store.php');

