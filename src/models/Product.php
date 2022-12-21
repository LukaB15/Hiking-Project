<?php

class Product extends Database
{
    public function findAll(): array|false
    {
        try {
           return $this->query(
                'SELECT * FROM Hikes LIMIT 20'
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
                "SELECT * FROM Hikes WHERE name = ?",
                [
                    $code
                ]
            )->fetch();

        } catch (Exception $e) {
            echo $e->getMessage();
            return [];
        }
    }

    public function remove(string $code): void
    {
        if (!$this->query("DELETE from Hikes WHERE name = ?", [$code])) 
        {
            throw new Exception('Error during registration.');
        }

    }
}