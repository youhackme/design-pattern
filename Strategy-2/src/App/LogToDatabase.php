<?php

/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 15/09/2016
 * Time: 15:53
 */

namespace App;

class LogToDatabase implements Logger
{
    public function log($data)
    {
        var_dump("Log the data to the database");
        var_dump($data);
    }
}