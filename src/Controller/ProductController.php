<?php

namespace FebriRahman\Sambak\Controller;

use FebriRahman\Sambak\App\View;
use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

class ProductController
{
    static Client $client;
    static ResponseInterface $data;

    public function __construct()
    {
        self::$client = new Client();
    }

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
        $id = $_GET['id'];
        self::$data = self::$client->request('GET', "https://fakestoreapi.com/products/$id");
        $response = self::$data->getBody()->getContents();
        $data = json_decode($response, true);

        View::render('products/productDetail', [
            "title" => "Product Name",
            "product" => $data
        ]);
    }

    function categories()
    {
        View::render('products/categories', [
            "title" => "Categories Products"
        ]);
    }
}
