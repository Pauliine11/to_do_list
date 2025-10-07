<?php

namespace App\Controllers;

use App\Models\ToDo;
use App\Utils\AbstractController;


class ToDoController extends AbstractController
{
    public function addTache()
    {
        if(isset($_SESSION['todos'])){
            if(isset($_POST['addTache'])){
                $description = htmlspecialchars($_POST['toDo']);
                $this->totalCheck('toDo', $text);

               /* if(empty($this->arrayError)){
                    $today = date("d-m-Y");
                    $list = new ToDo(null, $description, $today,null, $_SESSION['todos']['id_todos']);
                    $list = addTache();
                    $this->redirectToRoute('/', 200);
                }*/
            }
            require_once(__DIR__ . "/../Views/addToDo.view.php");
        }else{
            $this->redirectToRoute('/', 302);
        }
    }
}
       

