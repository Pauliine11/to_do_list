<?php

namespace App\Controllers;

use App\Models\ToDo;
use App\Utils\AbstractController;

class ToDoController extends AbstractController
{
    public function addTache()
    {

        require_once(__DIR__ . "/../Views/toDo.view.php");

    }
}