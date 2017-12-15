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
 * Migrator tool
 * @author Roberto González Vázquez
 */

// Only cli
defined('STDIN') ?? header(($_SERVER["SERVER_PROTOCOL"]??'HTTP/1.1').' 403 Forbidden') & exit();

define ('RUNNING',1 );
include dirname(__DIR__).'/base.php';


use Xperimentx\Atlas\Tools;

(new Tools\Migrator( new Config\Migrator() ))->Run();
