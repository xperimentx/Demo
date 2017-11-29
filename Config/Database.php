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
 * Database configuration.
 */
class Database extends \Xperimentx\Atlas\Db\Db_cfg
{
    function __construct()
    {
        $this->user_name = 'atlas_db_user';
        $this->password  = 'atlas_db_passwd';
        $this->db_name   = 'atlas_demo_db';
    }
}

