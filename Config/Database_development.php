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

use Xperimentx\Atlas\Db\Db_cfg;

/**
 * Database configuration for development stage.
 */
class Database_development extends Db_cfg
{
    function __construct()
    {
        $this->db_name   = 'atlas_demo_db'  ;
        $this->user_name = 'atlas_db_user'  ;
        $this->password  = 'atlas_db_passwd';
    }
}

