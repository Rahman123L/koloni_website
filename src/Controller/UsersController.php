<?php

namespace FebriRahman\Sambak\Controller;

use FebriRahman\Sambak\App\View;

class UsersController
{
    function register()
    {
        View::render('Users/register', [
            "title" => "Register"
        ]);
    }

    function login()
    {
        View::render('Users/login', [
            "title" => "Login"
        ]);
    }
}