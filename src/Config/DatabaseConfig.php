<?php

namespace FebriRahman\Sambak\Config;

class DatabaseConfig
{
    private static ?\PDO $pdo = null;

    public static function getConnection(string $env = "production"): \PDO
    {
        if (self::$pdo === null) {
            // create nq pdo instance
            require_once __DIR__ . '/../../config/database/database.php';
            $config = getDatbaseConfig();
            self::$pdo = new \PDO(
                $config['database'][$env]['url'],
                $config['database'][$env]['username'],
                $config['database'][$env]['password'],
            );
        }

        return self::$pdo;
    }

    public
    static function beginTransaction()
    {
        self::$pdo->beginTransaction();
    }

    public
    static function commitTransaction()
    {
        self::$pdo->commit();
    }

    public
    static function rollbackTransaction()
    {
        self::$pdo->rollBack();
    }
}