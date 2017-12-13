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

// Show all errors
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Only cli
$argv[0] ?? header(($_SERVER["SERVER_PROTOCOL"]??'HTTP/1.1').' 403 Forbidden') & exit();


// Includes the base: autoloader, database
include __DIR__.'/base.php';
