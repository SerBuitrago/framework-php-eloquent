<?php

/**
 * @class implementation class Controller.
 * @description - Allows you to import controllers, models and views.
 * @autor - Sergio Stives Barrios Buitrago.
 * @mail - sergiobuitrago54@gmail.com - sergiostivesbb@ufps.edu.co.
 * @phone - 3118938189 - 3114794520.
 */
class Controller extends Auth
{

    //////////////////////////////////////////////////////
    // Construct
    //////////////////////////////////////////////////////
    public function __construct()
    {
    }

    //////////////////////////////////////////////////////
    // Method
    //////////////////////////////////////////////////////
    /**
     * Method that allows to load a model.
     */
    public function model($model, $name = "model", $ext = "php")
    {
        $model = ucwords($model) . ROOT_APP_NAME_MODEL;
        $path = ROOT_APP_PATH_APP . '/' . $name . '/' . $model . '.' . $ext;
        if (file_exists($path)) {
            require_once $path;
            // return new $model();
        } else {
            echo "Error Model " . $model . " 404.";
        }
    }

    /**
     * Method that allows to load a controller.
     */
    public function controller($controller, $name = "controller", $ext = "php")
    {
        $controller = $controller . ROOT_APP_NAME_CONTROLLER;
        $path = ROOT_APP_PATH_APP . '/' . $name . '/' . $controller . '.' . $ext;
        if (file_exists($path)) {
            require_once  $path;
            return new $controller();
        } else {
            echo "Error Controller " . $controller . " 404.";
        }
    }

    /**
     * Method that allows to load a view.
     */
    public function view($view, $data = [], $name = "view", $ext = "php")
    {
        $view = $view . ROOT_APP_NAME_VIEW;
        $path = ROOT_APP_PATH_APP . '/' . $name . '/' . $view . '.' . $ext;
        if (file_exists($path)) {
            require_once  $path;
        } else {
            die('Error View 404 - ' . $view . '.');
        }
    }
}
