<?php

class Product extends Database
{
<<<<<<< HEAD
    public function findAll(): array|false
=======
    public function findAll(): array|false 
>>>>>>> luka2
    {
        try {
           return $this->query(
                'SELECT name FROM Hikes LIMIT 20'
            )->fetchAll();

        } catch (Exception $e) {
            echo $e->getMessage();
            return [];
        }
    }

    public function find(string $code): array|false
    {
        try {
            return $this->query(
                "SELECT name, distance FROM Hikes WHERE name = ?",
                [
                    $code
                ]
            )->fetch();

        } catch (Exception $e) {
            echo $e->getMessage();
            return [];
        }
    }
}