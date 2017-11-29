<?php

//echo "------". __FILE__ ."\n";
namespace Migrations;
use Xperimentx\Atlas\Db;

class Create_catalog_table extends Db\Migrations\Step
{
    public function Up()
    {
        $maker = new Db\Create_table('catalog');
        $maker->Add_column ('INT'        , 'id'  )->Set_auto_increment();
        $maker->Add_column ('VARCHAR(50)', 'name');
        $maker->Add_index  ('auto_id', 'id');
        $maker->Run();

    }

    public function Down()
    {
        Db::$db->Drop_table('catalog');
    }
}

