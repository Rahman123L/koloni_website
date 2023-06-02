<?php

namespace FebriRahman\Sambak\Controller;

use FebriRahman\Sambak\App\View;
use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

class HomeController 
{
    static Client $client;
    static ResponseInterface $data;

    public function __construct()
    {
        self::$client = new Client();
        self::$data = self::$client->request('GET', 'https://fakestoreapi.com/products');
    }

    function index() {
        $response = self::$data->getBody()->getContents();
        $data = json_decode($response, true);
        $products = array_slice($data, 0, 3);
        View::render('Home/index', [
            "title" => "Home",
            "products" => $products
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

    function gallery()
    {
        View::render('Home/gallery', [
            "title" => "Gallery"
        ]);
    }
}