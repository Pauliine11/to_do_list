<?php

namespace App\Controllers;

use App\Models\ToDo;
use App\Utils\AbstractController;


class ToDoController extends AbstractController
{
    public function addTache()
    {
        if(isset($_POST['addTache'])){
            $title = htmlspecialchars($_POST['ToDo']);
            $description = htmlspecialchars($_POST['ToDo']);
            $status = htmlspecialchars($_POST['ToDo']);
            $this->totalCheck('ToDo', $description, $title, $status);

            if(empty($this->arrayError)){
                $list = new ToDo(null, $title, $description, $status);
                $list->addToDo();
                $this->redirectToRoute('/', 200);
            }
        }
        require_once(__DIR__ . "/../Views/addToDo.view.php");
    }

    public function getTacheById()
    {

    }
}
               


