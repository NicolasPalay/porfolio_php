<?php

namespace Model;

use src\Constants;

class Connect
{
    protected string $table;
    protected static \PDO $pdo;

    public function __construct()
    {
        try{
            static::$pdo = new \PDO('mysql:host=' . Constants::DB_HOST . ';
        dbname=' . Constants::DB_NAME .';
            charset=utf8',
                Constants::DB_USERNAME,
                Constants::DB_PASSWORD,
                [
                    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
                ]);
        } catch (\PDOException $e) {
            echo $e->getMessage(); die();
        }
        $this->table = strtolower(explode('\\', get_class($this))[1]) . 's';
    }

    public function all(): array
    {
        $statement = $this->getPDO()->query("SELECT * FROM {$this->table}");
        return $statement->fetchAll();

    }
    public function findByLast(): array
    {
        $statement = $this->getPDO()->query("SELECT * FROM {$this->table} ORDER BY id DESC LIMIT 1");
        return $statement->fetchAll();

    }
    protected function getPDO(): \PDO
    {
        return static::$pdo;
    }
}
