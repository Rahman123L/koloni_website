<?php
function getDatbaseConfig(): array
{
    return [
        "database" => [
            "test" => [
                "url" => "mysql:host=localhost:3306;dbname=db_sambak_test",
                "username" => "root",
                "password" => ""
            ],
            "production" => [
                "url" => "mysql:host=localhost:3306;dbname=db_sambak",
                "username" => "root",
                "password" => ""
            ]
        ]
    ];
}