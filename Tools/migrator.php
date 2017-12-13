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

define ('RUNNING',1 );
include dirname(__DIR__).'/base_cli.php';


use Xperimentx\Atlas\Tools;

(new Tools\Migrator( new Config\Migrator() ))->Run();
