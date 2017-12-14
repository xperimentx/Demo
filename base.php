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

use Xperimentx\Atlas;


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

Atlas\Autoloader::Register($dir);

// ¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨



/* Load configuration
 * ¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨
 */
include_once $dir.'/Config/Environment.php';

$stage = Atlas\Environment::Get_stage();

include_once $dir.'/Config/Autoloader.php';


// Connect database or die
$db = new Atlas\Db('Config\Database_'.$stage);
$db->Connect_or_die();

