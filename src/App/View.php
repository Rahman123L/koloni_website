<?php

namespace FebriRahman\Sambak\App;

class View
{
    public static function render(string $view, $model)
    {
        require __DIR__ . '/../view/' . $view . '.php';
    }

    public static function redirect(string $url)
    {
        header("Location: $url");
        if (getenv("mode") != "test") {
            exit();
        }
    }
}