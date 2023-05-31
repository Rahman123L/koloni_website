<?php

namespace FebriRahman\Sambak\Controller;

use FebriRahman\Sambak\App\View;

class AdminController
{
    function checkout()
    {
        View::render('Admin/checkout', [
            "title" => "Checkout Admin"
        ]);
    }

    function products()
    {
        View::render('Admin/products', [
            "title" => "Products Admin"
        ]);
    }

    function users()
    {
        View::render('Admin/users', [
            "title" => "Users"
        ]);
    }
}