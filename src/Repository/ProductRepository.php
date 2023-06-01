<?php

namespace FebriRahman\Sambak\Repository;

use FebriRahman\Sambak\Products\Products;

class ProductRepository
{
    private \PDO $connection;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function save(Products $products): Products
    {
        $statement = $this->connection->prepare("INSERT INTO product(id, title, description, image, price) VALUES (?, ?, ?, ?, ?)");
        $statement->execute([
            $products->id,
            $products->title,
            $products->description,
            $products->image,
            $products->price
        ]);
        return $products;
    }

    public function update(Products $products): Products
    {
        $statement = $this->connection->prepare("UPDATE product SET title = ?, description = ?, image = ?, price = ? WHERE id = ?");
        $statement->execute([
           $products->title,
           $products->description,
           $products->image,
           $products->price,
           $products->id
        ]);
        return $products;
    }

    public function product(string $id): ?Products
    {
        $statement = $this->connection->prepare("SELECT title, description, image, price FROM product WHERE id = ?");
        $statement->execute([
            $id
        ]);
        try {
            if ($row = $statement->fetch()) {
                $product = new Products();
                $product->title = $row['title'];
                $product->description = $row['description'];
                $product->image = $row['image'];
                $product->price = $row['price'];
                return $product;
            } else {
                return null;
            }
        } finally {
            $statement->closeCursor();
        }
    }

    public function delete(string $id)
        : bool
    {
        $statement = $this->connection->prepare("DELETE FROM product WHERE id = ?");
        $statement->execute([
            $id
        ]);
        return true;
    }
}