<?php


// require "../models/Database.php";
class Auth extends Database
{
    public function create(string $firstname,string $lastname, string $username, string $email, string $password): void
    {
        if (!$this->query(
            "INSERT INTO users(firstname, lastname, nickname, email, password) VALUES (?, ?, ?)",
            [
                $firstname,
                $lastname,
                $username,
                $email,
                $password
            ]
        )) {
            throw new Exception('Error during registration.');
        }
    }

    public function find(string $username): array
    {
        if (!$user = $this->query(
            "SELECT * FROM users WHERE firstname = ?",
            [
                $username,
            ]
        )->fetch()) {
            throw new Exception('Failed login attempt : connection error.');
        }

        return $user;
    }
}