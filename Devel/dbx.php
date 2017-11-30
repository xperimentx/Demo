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

// Includes the base: autoloader, database
define ('RUNNING',1 );
include dirname(__DIR__).'/base.php';

//$db = new Xperimentx\Atlas\Db();
$db->throw_exceptions=false;
try
{
    $db->Connect();
} catch (\Xperimentx\Atlas\Db\Db_exception $ex)
{
    print_r($ex->Get_error_item());
}


