<?php

use App\Model\Genders;

/**
 * @class implementation class HomeController.
 * @description - Home Controller.
 * @autor - Sergio Stives Barrios Buitrago.
 * @mail - sergiobuitrago54@gmail.com - sergiostivesbb@ufps.edu.co.
 * @phone - 3118938189 - 3114794520.
 */
class HomeController extends Controller
{
    //////////////////////////////////////////////////////
    // Construct
    //////////////////////////////////////////////////////
    public function __construct()
    {
        $this->initSession();
    }

    //////////////////////////////////////////////////////
    // Method
    //////////////////////////////////////////////////////
    public function index()
    {
        $genders = new Genders;
        $data = [];
        $this->view("index", $data);
    }

    //////////////////////////////////////////////////////
    // Method - Caracter
    //////////////////////////////////////////////////////
    public function user_list()
    {
        $genders = new Genders;
        $data = [
            "list" => $genders::get(),
        ];
        $this->view("index", $data);
    }
}
