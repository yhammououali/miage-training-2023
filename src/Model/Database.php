<?php

namespace App\Model;

class Database
{
    private const DB_NAME = 'miage-blog';
    private const DB_HOST = 'localhost';
    private const DB_USERNAME = 'root';
    private const DB_PASSWORD = 'root';

    protected \PDO $connection;

    public function __construct()
    {
        $this->connection = $this->getConnection();
    }

    public function getConnection(): \PDO
    {
        try {
            $this->connection = new \PDO(
                sprintf('mysql:dbname=%s;host=%s;charset=utf8', self::DB_NAME, self::DB_HOST),
                self::DB_USERNAME,
                self::DB_PASSWORD, [
                    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
                ]);

                return $this->connection;
        } catch(\PDOException $exception) {
            echo $$exception->getMessage();
        }
    }
}
