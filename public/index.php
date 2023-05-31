<?php
require_once __DIR__ . '/../vendor/autoload.php';

use FebriRahman\Sambak\App\Router;
use FebriRahman\Sambak\Controller\HomeController;
use FebriRahman\Sambak\Controller\ProductController;
use FebriRahman\Sambak\Controller\UsersController;
use FebriRahman\Sambak\Controller\AdminController;

// Home Router Page
Router::add('GET', '/', HomeController::class, 'index', []);
Router::add('GET', '/home/contact', HomeController::class, 'contact', []);
Router::add('GET', '/home/information', HomeController::class, 'information', []);

// Products Router Page
Router::add('GET', '/products', ProductController::class, 'products', []);
Router::add('GET', '/product/detail', ProductController::class, 'productDetail', []);
Router::add('GET', '/product/checkout', ProductController::class, 'checkout', []);
Router::add('GET', '/product/payment', ProductController::class, 'payment', []);
Router::add('GET', '/product/categories', ProductController::class, 'categories', []);

// Users Router Page
Router::add('GET', '/login', UsersController::class, 'login', []);
Router::add('GET', '/register', UsersController::class, 'register', []);

// Admin Router Page
Router::add('GET', '/admin/checkout', AdminController::class, 'checkout', []);
Router::add('GET', '/admin/products', AdminController::class, 'products', []);
Router::add('GET', '/admin/users', AdminController::class, 'users', []);

Router::run();
