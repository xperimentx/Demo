<?php

use Xperimentx\Atlas\Autoloader;
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



/** Autoloader
 * ¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨
 * Normally you only need:
 * include $dir.'/Xperimentx/Atlas/php/Autoloader.php';
 * Autoloader::Register($dir);
 *
 * In big projects that uses composer maybe you prefer use the composer autoload:
 * include_once (__DIR__.'/vendor/autoload.php')

 * This project is also used in the Atlas of research and development tools,
 * therefore, we will use the Atlas promoter in Demo.
 *
 * Atlas and Demo are partners and are being developed together, since one project helps the other.
 *
 * To make the simultaneous development of both easier I use a little trick that
 * facilitates the development with my IDE and development web server.
 */

defined('RUNNING') || header(($_SERVER["SERVER_PROTOCOL"]??'HTTP/1.1').' 403 Forbidden') & exit();

$dir = dirname(__DIR__);

// Antoloader phat in xperimentX Research & development Labs :)
$atlas_RnD_autoloader = dirname($dir).'/atlas-www/Xperimentx/Atlas/php/Autoloader.php';

include file_exists($atlas_RnD_autoloader)
        ? $atlas_RnD_autoloader                        // Atlas R&D labs
        : $dir.'/Xperimentx/Atlas/php/Autoloader.php'; // Typical situatuation

Autoloader::Register($dir);





