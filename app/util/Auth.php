<?php

/**
 * @class implementation class Auth.
 * @description - Allows you to control user permissions.
 * @autor - Sergio Stives Barrios Buitrago.
 * @mail - sergiobuitrago54@gmail.com - sergiostivesbb@ufps.edu.co.
 * @phone - 3118938189 - 3114794520.
 */
class Auth
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
     * Method that allows to verify if someone is logged in.
     */
    public function getAuth()
    {
        if (isset($_SESSION[ROOT_APP_SESSION_USER])) {
            return true;
        } else {
            return false;
        }
    }

    //////////////////////////////////////////////////////
    // Method - Session.
    //////////////////////////////////////////////////////
    /**
     * Method that allows you to start the session.
     */
    public function initSession()
    {
        $status = false;
        if (version_compare(phpversion(), ROOT_APP_PHP_VERSION, '<')) {
            if (session_id() == '') {
                session_start();
                $status = true;
            }
        } else {
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
                $status = true;
            }
        }
        return $status;
    }
}
