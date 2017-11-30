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


namespace Config;

/**
 * Migrator configuration
 * @author Roberto González Vázquez
 */
class  Migrator extends \Xperimentx\Atlas\Db\Migrations\Migrator_cfg
{
    function __construct()
    {
        $this->root       = dirname(__DIR__).'/Devel/Migrations';
        $this->namespace  = 'Migrations';
        $this->use_colors = true;
    }
}
