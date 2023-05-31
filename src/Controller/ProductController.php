<?php

namespace FebriRahman\Sambak\Controller;

use FebriRahman\Sambak\App\View;

class ProductController
{
    function checkout()
    {
        View::render('Products/checkout', [
            "title" => "Checkout Product"
        ]);
    }

    function payment()
    {
        View::render('Products/payment', [
            "title" => "Payment Gateway"
        ]);
    }

    function products()
    {
        View::render('Products/products', [
            "title" => "Product"
        ]);
    }

    function productDetail()
    {
        View::render('products/productDetail', [
            "title" => "Product Name"
        ]);
    }

    function kategories()
    {
        View::render('products/kategories', [
            "title" => "Kategories Products"
        ]);
    }
}