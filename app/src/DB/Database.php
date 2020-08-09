<?php
namespace db;


class Database {
    function __construct($pdo) {
        $this->pdo = $pdo;
    }

    function getData() {
        $query = $this->pdo->prepare('SELECT * FROM products');
        $query->execute();
        return $query->fetchAll();
    }
}