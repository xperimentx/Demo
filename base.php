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

/* Load configuration
 * ¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨
 */
include_once $dir.'/Config/Autoloader.php';
include_once $dir.'/Config/Environment.php';

$stage = Atlas\Environment::Get_stage();

// Connect database or die
$db = new Atlas\Db('Config\Database_'.$stage);
$db->Connect_or_die();

