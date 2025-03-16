<?php

// $router->get('/', 'controlers/index.php');

// $router->get('/about', 'controlers/about.php');

// $router->get('/contact', 'controlers/contact.php');

// $router->get('/notes', 'controlers/notes/index.php')->only('auth');

// $router->get('/note', 'controlers/notes/show.php')->only('auth');
// $router->delete('/note', 'controlers/notes/destroy.php');
// $router->delete('/note', 'controlers/notes/show.php');
// $router->patch('/note', 'controlers/notes/update.php');


// $router->get('/notes/Create', 'controlers/notes/create.php');
// $router->post('/notes/Create', 'controlers/notes/store.php');

// $router->get('/notes/edit', 'controlers/notes/edit.php');


// $router->get('/register','controlers/registertion/create.php')->only('guest');
// $router->post('/register','controlers/registertion/store.php');

// $router->get('/login','controlers/sessions/create.php')->only('guest');
// $router->delete('/logout','controlers/sessions/destroy.php')->only('auth');
// $router->post('/login','controlers/sessions/store.php');


$router->get('/items','controllers/items/index.php');
$router->get('/','controllers/home.php');
$router->get('/home','controllers/home.php');
$router->get('/about','controllers/about.php');
$router->get('/contact','controllers/contact.php');
$router->get('/policies_privacy','controllers/policies_privacy.php');


$router->get('/cards/create','controllers/cards/create.php');
$router->get('/cards/destroy','controllers/cards/destroy.php');
$router->get('/cards/edit','controllers/cards/edit.php');
$router->get('/cards/index','controllers/cards/index.php');
$router->get('/cards/show','controllers/cards/show.php');
$router->get('/cards/store','controllers/cards/store.php');
$router->get('/cards/update','controllers/cards/update.php');









