<?php

namespace FebriRahman\Sambak\Controller;

use FebriRahman\Sambak\App\View;

class HomeController 
{
    function index() {
        View::render('Home/index', [
            "title" => "Home"
        ]);
    }

    function contact() {
        View::render('Home/contatc', [
            "title" => "Contact"
        ]);
    }
}