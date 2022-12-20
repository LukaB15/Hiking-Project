<?php

class Product extends Database
{
    public function findAll(): array|false
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

    public function find(string $name): array|false
    {
        try {
            return $this->query(
                "SELECT name, distance, duration, description, elevation_gain FROM Hikes WHERE name = ?",
                [
                    $name
                ]
            )->fetch();

        } catch (Exception $e) {
            echo $e->getMessage();
            return [];
        }
    }
}