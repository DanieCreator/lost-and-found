<?php

/**
 * The Base Controller
 * Loads the models and views
 */
class Controller
{

    /**
     * Return the requested model if it exists else dies the process
     * 
     * @return mixed
     */
    public function getModel(string $model){

        if(file_exists(__DIR__ . '/../models/' . ucfirst($model) . '.php')){

            require_once __DIR__ . '/../models/' . ucfirst($model) . '.php';

            return new $model();
        }

        die("<strong>Could not find that model</strong>");

    }

    /**
     * Load view
     */

     public function view($view, $data = []){

        extract($data);

        if(file_exists(__DIR__ . '/../views/' . $view . '.php')){
            require_once(__DIR__ . '/../views/' . $view . '.php');
        }else{
            die("<strong>The requested view does not exist</strong>");
        }
     }

    
}