<?php

/**
 * @class implementation class Core.
 * @description - Allows you to control user permissions.
 * @autor - Sergio Stives Barrios Buitrago.
 * @mail - sergiobuitrago54@gmail.com - sergiostivesbb@ufps.edu.co.
 * @phone - 3118938189 - 3114794520.
 */
class Core
{
    protected $controller = ROOT_APP_DEFAULT_CONTROLLER;
    protected $method = ROOT_APP_DEFAULT_METHOD;
    protected $parameters = ROOT_APP_DEFAULT_PARAMETERS;
    protected $exist = true;

    //////////////////////////////////////////////////////
    // Construct
    //////////////////////////////////////////////////////
    public function __construct()
    {
        $this->exist = true;
        $url = App::getUrl();
        $url = $this->getController($url);
        if ($this->exist) {
            $url = $this->getMethod($url);
            $this->parameters = $url ? array_values($url) : [];
            call_user_func_array([$this->controller, $this->method], $this->parameters);
        } else {
            echo "Error 404 - Controller " . $this->controller . ROOT_APP_NAME_CONTROLLER . ".";
        }
    }



    //////////////////////////////////////////////////////
    // Method
    //////////////////////////////////////////////////////
    /**
     * Method that allows you to call a controller.
     */
    public function getController($url, $name = "controller", $ext = "php")
    {
        $aux = ($url != null && count($url) > 0) ? ucwords($url[0]) : $this->controller;
        $controller = $aux . ROOT_APP_NAME_CONTROLLER;
        $path = ROOT_APP_PATH_APP . '/' . $name . '/' . $controller . '.' . $ext;
        $bool = file_exists($path);
        if ($url != null && count($url) > 0) {
            if ($bool) {
                $this->controller = $aux;
                unset($url[0]);
            }
        }
        if ($bool) {
            require_once $path;
            $this->controller = new $controller;
            $this->exist = true;
        } else {
            $this->exist = false;
        }
        return $url;
    }

    /**
     * Method that allows calling a method from a controller.
     */
    public function getMethod($url)
    {
        if (!is_null($url) && isset($url[1])) {
            $aux = $url[1];
            if (!is_null($aux)) {
                $aux = str_replace(ROOT_APP_ESPACE, ROOT_APP_ESPACE_VALUE, $aux);
                if (method_exists($this->controller, $aux)) {
                    $this->method = $aux;
                    unset($url[1]);
                }
            }
        }
        return $url;
    }
}
