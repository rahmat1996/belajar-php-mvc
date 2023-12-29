<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Tamhar\BelajarPhpMvc\App\Router;
use Tamhar\BelajarPhpMvc\Controller\HomeController;
use Tamhar\BelajarPhpMvc\Controller\ProductController;
use Tamhar\BelajarPhpMvc\Middleware\AuthMiddleware;

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello',[AuthMiddleware::class]);
Router::add('GET', '/world', HomeController::class, 'world',[AuthMiddleware::class]);
Router::add('GET', '/about', HomeController::class, 'about');

Router::add('GET', '/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)', ProductController::class, 'categories');

Router::run();
