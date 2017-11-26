<?php
// Autoloader
// ¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨
// Normally you only need:
// include __DIR__.'/Xperimentx/Atlas/php/Autoloader.php';

include file_exists( __DIR__.'/Xperimentx/Atlas/php/Autoloader.php')
        ? __DIR__.'/Xperimentx/Atlas/php/Autoloader.php'                      // Normal include
        : dirname(__DIR__).'/atlas-www/Xperimentx/Atlas/php/Autoloader.php';  // For my developmentdenviroment

use Xperimentx\Atlas\Autoloader;
use Xperimentx\Atlas\Db;
use Xperimentx\Atlas\Db\Migrations;


Autoloader::Register(__DIR__);


// Loading config
// ¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨
Config\Autoloader ::Load();
Config\Routes     ::Load();


// Connect database
// ¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨
$db = new Db(new Config\Database());

if (!$db->Connect())
{
    die ("Database connection error \n");
}


// Connect database
// ¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨
class  My_migrator_cfg extends Migrations\Migrator_cfg
{
    function __construct()
    {
        $this->root      = __DIR__.'/Migrations';
        $this->namespace = 'Migrations';
    }
}


$migrator= new Migrations\Migrator_cli(new My_migrator_cfg());
$migrator->Run();
