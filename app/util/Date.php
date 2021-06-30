<?php

/**
 * @class implementation class Date.
 * @description - Allows you to manage dates.
 * @autor - Sergio Stives Barrios Buitrago.
 * @mail - sergiobuitrago54@gmail.com - sergiostivesbb@ufps.edu.co.
 * @phone - 3118938189 - 3114794520.
 */
class Date
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
     * Method that allows to know the current date and time.
     */
    public static function dateTime($format = ROOT_APP_DATE_TIME_FORMAT, $zone = ROOT_APP_DATE_ZONE)
    {
        date_default_timezone_set($zone);
        return date($format, time());
    }
}
