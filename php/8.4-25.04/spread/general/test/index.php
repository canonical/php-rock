<?php
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Sanitize path for routing
switch ($path) {
    case '/':
    case '/index.php':
        echo 'hello, world';
        break;

    case '/api':
        include 'pages/api.php';
        break;

    case '/form':
        include 'pages/form.php';
        break;

    default:
        http_response_code(404);
        echo 'Not Found';
        break;
}
?>
