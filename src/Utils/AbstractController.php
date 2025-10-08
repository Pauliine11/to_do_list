<?php

namespace App\Utils;

abstract class AbstractController
{
    protected array $arrayError = [];

    public function isNotEmpty ($nameInput){

        //si le post avec la valeur est vide alors
        if(empty($_POST[$nameInput])){
            $this->arrayError[$nameInput] = "Ce champs ne peut pas être vide.";
            return $this->arrayError;
        }

        return false;
    }

    public function checkFormat($nameInput, $value){

        //Vos regex = vos filtres
        $regexDescription = '/^[a-zA-Zà-üÀ-Ü ,!?;.:()<>$@£\'\"\-_°€&%#<>\-+\/0-9œ]{0,1000}$/';
        $regexTitle = '/^[a-zA-Zà-üÀ-Ü ,!?;.:()<>$@£\'\"\-_°€&%#<>\-+\/0-9œ]{5,1000}$/';
        $regexStatus = '/^[a-zA-Zà-üÀ-Ü ,!?;.:()<>$@£\'\"\-_°€&%#<>\-+\/0-9œ]{5,1000}$/';

        //on prend le nom de l'input
        switch($nameInput){
            case 'title':

                //si la valeur de l'input n'arrive pas a passer le filtre alors
                if(!preg_match($regexTitle, $value)){
                    //on appel notre tableau et on ajoute en clé pseudo et en valeur la string
                    $this->arrayError['title'] = 'Merci de renseigner un titre correct';
                }
                break;

            case 'description':

                if(!preg_match($regexDescription, $value)){
                    $this->arrayError['description'] = 'Merci de mettre une vraie description';
                }
                break;

                case 'status':

                if(!preg_match($regexStatus, $value)){
                    $this->arrayError['status'] = 'Merci de mettre une vraie description';
                }
                break;
        }
    }

    public function totalCheck($nameInput, $valueInput)
    {
        $this->checkFormat($nameInput, $valueInput);
        $this->isNotEmpty($nameInput);
        return $this->arrayError;
    }

    public function errorMessage($myMessage){
        ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= $myMessage ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
    }

    public function debug ($info){
        echo '<pre>';
        var_dump($info);
        echo '</pre>';
    }

    public function redirectToRoute($route, $code){
        http_response_code($code);
        header("Location: {$route}");
        exit;
    }
}