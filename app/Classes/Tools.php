<?php

namespace App\Classes;


class Tools
{

    public static function checkSession()
    {

        return session()->has('user');
    }

    //================================================================

    public static function printData($data, $die = true)
    {

        if (is_array($data) || is_object($data)) {

            echo '<pre>';
            print_r($data);
        } else {
            echo $data;
        }

        if ($die) {

            die('FIM');
        }
    }
}
