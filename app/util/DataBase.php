<?php

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * @class implementation class DataBase.
 * @description - Use Eloquent.
 * @autor - Sergio Stives Barrios Buitrago.
 * @mail - sergiobuitrago54@gmail.com - sergiostivesbb@ufps.edu.co.
 * @phone - 3118938189 - 3114794520.
 */
class DataBase
{
    private $capsule;

    //////////////////////////////////////////////////////
    // Construct
    //////////////////////////////////////////////////////
    public function __construct()
    {
        $this->capsule = new Capsule;
        $this->capsule->addConnection([
            'driver' => ROOT_APP_DB_DRIVER,
            'host' => ROOT_APP_DB_HOST,
            'database' => ROOT_APP_DB_NAME,
            'username' => ROOT_APP_DB_USER,
            'password' => ROOT_APP_DB_PASSWORD,
            'charset' => ROOT_APP_DB_CHARSET,
            'collation' => ROOT_APP_DB_COLLATION,
            'prefix' => ROOT_APP_DB_PREFLIX,
        ]);
    }

    //////////////////////////////////////////////////////
    // Method
    //////////////////////////////////////////////////////
    public function init(){
        if(!is_null($this->capsule)){
            $this->capsule->bootEloquent();
            return true;
        }
        return false;
    }
    //////////////////////////////////////////////////////
    // Getter and Setters
    //////////////////////////////////////////////////////
    public function getCapsule()
    {
        return $this->capsule;
    }
}
