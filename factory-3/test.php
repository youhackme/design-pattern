<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 17/07/2016
 * Time: 23:23
 */

require('vendor/autoload.php');

//The Franchise Factory
$toys = new  \App\NyToysFactory();
$toys->produceToy('car');


