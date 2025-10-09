<?php

namespace App\Models;

use PDO;
use App\Models\Task;
use Config\Database;

class Task
{
    private ?int $id_todos;
    private ?string $title;
    private ?string $description;
    private ?string $status;

    public function __construct(?int $id_todos, ?string $title, ?string $description, ?string $status)
    {
        $this->id_todos = $id_todos;
        $this->title = $title;
        $this->description = $description;
        $this->status = $status;
    }

    public function addToDo()
    {
        $pdo = Database::getConnection();
        $sql = "INSERT INTO `todos` (`title`, `description`,`status`) 
                VALUES (?,?,?)";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([$this->title, $this->description, $this->status]);
    }

    public function getTaskById()
    {
        $pdo = Database::getConnection();
        $sql = "SELECT `id_todos`, `title`, `description`, `status`
        FROM `todos` WHERE `id_todos`= ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$this->id_todos]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        //var_dump($result);
        if($result){
            return new Task($result['id_todos'], $result["title"],$result["description"], $result['status']);
        }else{
            return false;
        }
    }

    public function getAllTask()
    {
        $pdo = Database::getConnection();
        $sql = "SELECT `id_todos`, `title`, `description`, `status`
        FROM `todos`"; 
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $tasks = [];
        //Je boucle sur mon tableau de resultat pour créer un nouvel objet de chaque resultat
        foreach($result as $row){
            //Je créer un nouvel objet
            $task = new Task($row['id_todos'], $row['title'], $row['description'], $row['status']);
            //Je l'insert dans mon tableau
            $tasks[] = $task;
        } 
        return $tasks;  
    }

    public function getIdTask()
    {
        $pdo = Database::getConnection();
        $sql = "SELECT `id_todos`, `title`, `description`, `status`
        FROM `todos` WHERE `id_todos` = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$this->id_todos]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if($result){
            return new Task($result['id_todos'], $result['title'], $result['description'] , $result['status']);
        }else{
            return false;
        }
    }

    public function editTask()
    {
        $pdo = Database::getConnection();
        $sql = "UPDATE `todos` SET `title` = ?, `description` = ?, `status` = ? WHERE `id_todos` = ?";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([$this->title, $this->description, $this->status, $this->id_todos]);
    }

// Les GET
    public function getIdTodos(): ?int
    {
        return $this->id_todos;
    }
    public function getTitle(): ?string
    {
        return $this->title;
    }
    public function getDescription(): ?string
    {
        return $this->description;
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
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }
}