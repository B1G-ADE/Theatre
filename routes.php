<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {

    case '/home':
        require __DIR__ . 'index.php';
        break;

    case '/users':
        require __DIR__ . '/views/courses.php';
        break;

    case '/views/authors':
        require __DIR__ . '/views/authors.php';
        break;

    case '/about':
        require __DIR__ . '/views/aboutus.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}
?>