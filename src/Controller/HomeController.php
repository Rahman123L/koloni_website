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
        View::render('Home/contact', [
            "title" => "Contact"
        ]);
    }

    function information() {
        View::render('Home/information', [
            "title" => "Information"
        ]);
    }
}