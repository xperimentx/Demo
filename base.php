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
use Xperimentx\Atlas\Environment;

$dir = __DIR__;


/* Autoloader
 * ¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨
 * Normally you only need:
 * include __DIR__.'/Xperimentx/Atlas/php/Autoloader.php';
 *
 * This proyect is used for de Research & development Atlas toolkit, this helps my IDE
 */


$atlas_RnD_autoloader = dirname($dir).'/atlas-www/Xperimentx/Atlas/php/Autoloader.php';


include file_exists($atlas_RnD_autoloader)
        ? $atlas_RnD_autoloader                        // Atlas R&D enviroment
        : $dir.'/Xperimentx/Atlas/php/Autoloader.php'; // typical

Autoloader::Register($dir);



/*
 * Environment
 * ¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨
 * Do not blindly trust in $_SERVER['HTTP_HOST'] or $_SERVER['SERVER_NAME']
 * In this project if the Config/.development file exists, we are in the development environment.
 *
 * More info: https://github.com/xperimentx/atlas/blob/master/Atlas/doc/Enviroment.md
 */

if (file_exists($dir.'/Config/.development'))
     Environment::Set_development_stage();
else Environment::Set_production_stage('demo.xperimentx.com');



/* Load configuration
 * ¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨
 */

$stage = Environment::Get_Stage();

include $dir.'/Config/Autoloader.php';


// Connect database
$db = new Db('Config\Database_'.$stage);

if (!$db->Connect())
{
    exit("Database connection error \n");
}
