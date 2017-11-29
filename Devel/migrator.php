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

use Xperimentx\Atlas\Db\Migrations\Migrator_cli;


// Only cli
$argv[0] ?? header(($_SERVER["SERVER_PROTOCOL"]??'HTTP/1.1').' 403 Forbidden') & exit();


// Includes the base: autoloader, database
define ('RUNNING',1 );
include dirname(__DIR__).'/base.php';


// Maim
(new Migrator_cli( new Config\Migrator() ))->Run();
