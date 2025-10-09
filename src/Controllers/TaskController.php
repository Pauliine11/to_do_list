<?php

namespace App\Controllers;

use App\Models\Task;
use App\Utils\AbstractController;


class TaskController extends AbstractController
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
                $list = new Task(null, $title, $description, $status);
                $list->addToDo();
                $this->redirectToRoute('/', 200);
            }
        }
        require_once(__DIR__ . "/../Views/addTask.view.php");
    }

    public function index()
    {
        if(isset($_GET['id'])){
            $id = htmlspecialchars($_GET['id']);
            $list = new Task($id, null, null, null);
            $myList = $list->getTaskById();

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

    public function editTask()
    {
        if(isset($_GET['id'])){
            $id = htmlspecialchars($_GET['id'] );
            
            //Je dois instancier l'objet Comment pour poouvoir utiliser la méthode getCommentById (pas oublier le use)
            $task = new Task($id, null, null, null);
            $myTask = $task->getIdTask();
            /*
            * si j'ai bien un commentaire dans la base de donner avec cet id
            * si j'ai bien unse session avec user ( donc si une personne est connecté)
            * si id_user et === à l'id du user qui a créer le commentaire
            */
            if($myTask && $_POST['todos'] && $_POST['todos']['id_todos'] === $myTask->getIdTask()){

                if(isset($_POST['editTask'])){
                    $task = htmlspecialchars($_POST['title']);
                    $task = htmlspecialchars($_POST['description']);
                    $task = htmlspecialchars($_POST['status']);
                    $this->totalCheck('title', $title);
                    $this->totalCheck('description', $description);
                    $this->totalCheck('status', $title);
                    if(empty($this->arrayError)){
                        $newTask = new Task($id, $title, $description, $status, $myTask->getIdtask(), $myTask->getIdTodos());
                        $newTask->editTask();
                        $this->redirectToRoute('/tache?id=' . $myTask->getIdTask() , 200);
                    }
                }

                require_once(__DIR__ . "/../Views/task.view.php");
            }else{
                $this->RedirectToRoute('/', 302);
            }
            
            //Si la personne clique sur le submit alors vérifier les erreurs puis créer une méthode update pour envoyer la modification
        }else{
            $this->RedirectToRoute('/', 302);
        }
        
    }
}
    
           


