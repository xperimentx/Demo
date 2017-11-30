<?php
/**
 * xperimentX Atlas Demo
 *
 * @link      https://github.com/xperimentx/Demo
 * @link      https://xperimentX.com
 *
 * @author    Roberto González Vázquez, https://github.com/xperimentx
 * @copyright 2017 Roberto González Vázquez
 *
 * @license   MIT
 */


/**
 * Base of demo programs-
 * Include autoloader an database conecction.
 * Stops if no data base conection available.
 */

defined('RUNNING') || header(($_SERVER["SERVER_PROTOCOL"]??'HTTP/1.1').' 403 Forbidden') & exit();

use Xperimentx\Atlas\Autoloader;
use Xperimentx\Atlas\Db;


// Autoloader
// ¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨
// Normally you only need:
// include __DIR__.'/Xperimentx/Atlas/php/Autoloader.php';
//
// this ternary operator is necessary only for development purposes

include file_exists( __DIR__.'/Xperimentx/Atlas/php/Autoloader.php')
        ? __DIR__.'/Xperimentx/Atlas/php/Autoloader.php'
        : dirname(__DIR__).'/atlas-www/Xperimentx/Atlas/php/Autoloader.php';


Autoloader::Register(__DIR__);

Config\Autoloader ::Load();


// Connect database
// ¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨
$db = new Db(new Config\Database());

if (!$db->Connect())
{
    exit("Database connection error \n");
}
