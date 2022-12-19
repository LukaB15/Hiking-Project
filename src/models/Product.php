<?php

class Product extends Database
{
    public function findAll(): array
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

    // public function find(string $code): array|false
    // {
    //     try {
    //         return $this->query(
    //             "SELECT name FROM Hikes WHERE ID = ?",
    //             [
    //                 $code
    //             ]
    //         )->fetch();

    //     } catch (Exception $e) {
    //         echo $e->getMessage();
    //         return [];
    //     }
    // }
}