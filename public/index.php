<?php

// Autoloader function to load classes based on namespace and directory structure
spl_autoload_register(function ($class) {
    $prefix = 'App\\';
    $base_dir = __DIR__ . '/../src/';

    // Does the class use the namespace prefix?
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        // No, move to the next registered autoloader
        return;
    }

    // Get the relative class name
    $relative_class = substr($class, $len);

    // Replace the namespace prefix with the base directory, replace namespace
    // separators with directory separators in the relative class name, append
    // with .php
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
    
    require $file;
});

// Include the Router and Controller classes
use App\Router;
use App\Controllers\MovieRentalController;

// Initialize the Router
$router = new Router();

// Define your routes
$router->addRoute('/', MovieRentalController::class, 'plainTextStatement');
$router->addRoute('/statement/plain', MovieRentalController::class, 'plainTextStatement');
$router->addRoute('/statement/html', MovieRentalController::class, 'htmlStatement');
$router->addRoute('/statement/plain-text-and-html', MovieRentalController::class, 'plainTextAndHtmlStatement');

// Get the requested path and dispatch it
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$router->dispatch($path);
