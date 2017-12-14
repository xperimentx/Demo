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
 * Environment setup
 *
 * Do not blindly trust in $_SERVER['HTTP_HOST'] or $_SERVER['SERVER_NAME']
 * In this project if the /Config/.development file exists, we are in the development environment.
 *
 * More info: https://github.com/xperimentx/atlas/blob/master/Atlas/doc/Enviroment.md
 */

defined('RUNNING') || header(($_SERVER["SERVER_PROTOCOL"]??'HTTP/1.1').' 403 Forbidden') & exit();

use Xperimentx\Atlas\Environment;


if (file_exists(__DIR__.'/.development'))
     Environment::Set_development_stage();
else Environment::Set_production_stage('demo.xperimentx.com');




Environment::Initialize();