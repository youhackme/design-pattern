<?php

/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 11/09/2016
 * Time: 16:30
 */

namespace App;

abstract class ComponentsFactory
{
    abstract function createEngine();

    abstract function createWheel();

    abstract function createRotorBlade();
}