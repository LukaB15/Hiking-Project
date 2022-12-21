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
                "SELECT * FROM Hikes WHERE id = ?",
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
        if(!$this->query("DELETE FROM Hikes WHERE id = ?", [$code])) {
            throw new Exception("Product code was not provided.");
        }
    }
}
