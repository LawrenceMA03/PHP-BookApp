<?php

declare(strict_types=1);
include_once('Book.php');
include_once('DB.php');

/**
 * Model
 */
class Model
{
    private $conn;

    public function __construct()
    {
        $this->conn = DB::getInstance();
    }

    public function getBookList()
    {
        $query = "SELECT * FROM book";
        $st = $this->conn->getHandler()->prepare($query);
        $st->execute();
        return $st->fetchAll(PDO::FETCH_OBJ);
    }

    public function getBook($id)
    {
        $query = "SELECT * FROM book WHERE id = :id";
        $st = $this->conn->getHandler()->prepare($query);
        $st->bindParam(':id', $id);
        $st->execute();
        return $st->fetch(PDO::FETCH_OBJ);
    }

    public function checkLogin($username, $password)
    {
        $hashedPassword = sha1($password);
        $query = "SELECT * FROM admin WHERE username = :username AND password = :password";
        $st = $this->conn->getHandler()->prepare($query);
        $st->bindParam(':username', $username);
        $st->bindParam(':password', $hashedPassword);
        $st->execute();
        $result = $st->fetch(PDO::FETCH_OBJ);
        return $result != null;
    }

    public function addBook($title, $author, $description)
    {
        $query = <<<INS
             INSERT INTO book(title, author, description) 
             VALUES(:title, :author, :description)
INS;
        $st = $this->conn->getHandler()->prepare($query);
        $st->bindParam(':title', $title);
        $st->bindParam(':author', $author);
        $st->bindParam(':description', $description);
        $st->execute();
    }
}
