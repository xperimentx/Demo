<?php
include __DIR__.'/Atlas/php/Autoloader.php';

use Xperimentx\Atlas;

Atlas\Autoloader::Register(__DIR__);


// Load config files
Config\Autoloader ::Load();
Config\Routes     ::Load();

// Connect the main database
$db = new Atlas\Db(new Config\Database());



if (!$db->Connect())
{
    die ("Database connection error \n");
}


echo "Hola mundo!";
