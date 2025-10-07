<?php

namespace App\Models;

use PDO;
use Config\Database;

class ToDo
{
    private ?int $id_todos;
    private ?string $description;
    private ?string $creation_date;
    private ?string $status;

    public function __construct(?int $id_todos, ?string $description, ?string $creation_date, ?string $status)
    {
        $this->id_todos = $id_todos;
        $this->description = $description;
        $this ->creation_date = $creation_date;
        $this->status = $status;
    }

    public function addToDo()
    {
        $pdo = Database::getConnection();
        $sql = "INSERT INTO `todos` (`description`, `creation_date`,`status`) 
                VALUES (?,?,?)";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([$this->description, $this->creation_date, $this->id_status]);
    }

// Les GET
    public function getIdTodos(): ?int
    {
        return $this->id_todos;
    }
    public function getDescription(): ?string
    {
        return $this->description;
    }
    public function getCreationDate(): ?string
    {
        return $this->creation_date;
    }
    public function getStatus(): ?string
    {
        return $this->status;
    }

// Les SET
    public function setIdTodos(?int $id_todos): void
    {
        $this->id_todos = $id_todos;
    }
    public function setText(?string $description): void
    {
        $this->description = $description
    }
    public function setCreationDate(?string $creation_date): void
    {
        $this->creation_date = $creation_date;
    }
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }
}