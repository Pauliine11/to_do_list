<?php

namespace App\Controllers;

use App\Models\ToDo;
use App\Utils\AbstractController;


class ToDoController extends AbstractController
{
    public function addTache()
    {
        if(isset($_POST['addTache'])){
            $title = htmlspecialchars($_POST['title']);
            $description = htmlspecialchars($_POST['description']);
            $status = htmlspecialchars($_POST['title']);
            $this->totalCheck('title', $title);
            $this->totalCheck('description', $description);
            $this->totalCheck('title', $status);

            if(empty($this->arrayError)){
                $list = new ToDo(null, $title, $description, $status);
                $list->addToDo();
                $this->redirectToRoute('/', 200);
            }
        }
        require_once(__DIR__ . "/../Views/addToDo.view.php");
    }

    public function index()
    {
        if(isset($_GET['id'])){
            $id = htmlspecialchars($_GET['id']);
            $list = new ToDo($id, null, null, null);
            $myList = $list->getToDoById();

            if($myList)
            {
                require_once(__DIR__ . "/../Views/task.view.php");
            }else{
                $this->redirectToRoute('/', 302);
            }
        }else{
            $this->redirectToRoute('/', 302);
        }
    }
}
               


