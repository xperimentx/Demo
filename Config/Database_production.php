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
 * Database configuration for production stage.
 */
class Database_production extends Db_cfg
{
    function __construct()
    {
        $this->db_name   = 'atlas_demo_db'  ;
        $this->user_name = 'production_user'  ;
        $this->password  = 'very_secret_password';
    }
}