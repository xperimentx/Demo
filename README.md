
xperiment**X Demo** is the Demonstration application of the xperimentX libraries.
It shows in a more realistic way than the documentation the use of the php xperimentX libraries.

[Credits.](doc/Credits.md)


## Libraries

> ![xperimentx atlas](doc/images/atlas.png) <br>
> [xperiment**X Atlas**](https://github.com/xperimentx/atlas), a php toolkit 

---

## In the research and development state
First beta estimated in summer of 2018

![xperimentx atlas](doc/images/pensando.png) 

----

## Draft
```
www
├── index.php        ....... Main php
│
├── Config           ....... Configuration files
│   ├── Autoload.php
│   ├── Database.php
│   ├── Migration.php
│   └── Routes.php
│
├── App              ....... Application stuff
│   ├── App.php      ....... Main class
│   ├── Common_class.php ... Auxiliary classes
│   ├── Tools.php
│   ├── ...
│   ├── Models       ....... The hard work 
│   ├── Controllers  
│   ├── Views
│   └── Templates
|
├── Web              ....... Public web
│   ├── Common_class.php ... Auxiliary classes
│   ├── Tools.php
│   ├── ...
│   ├── Models       ....... The hard work 
│   ├── Controllers  
│   ├── Views
│   └── Templates|
|
|
├── migration.php    ....... Migration tool
├── Migrations
│   ├── 001-Create_catalog_table.php
│   ├── 002-Create_users_table.php
│   ├── ...
│   ├── View
│   └── 013-Alter_users_add_gps_position.php
│
│
├── media
│   └── images
│
├── Xperimentx
│   ├── Atlas
│   ├── Control
│   └── Crud
│
└── vendor           ....... Other libraries
    └── Acme
        └── src
```
 