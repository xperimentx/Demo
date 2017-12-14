
**xperimentX Demo** is the Demonstration application of  
[xperimentX Atlas Toolkit](https://github.com/xperimentx/atlas).


* Atlas and Demo are partners and they are being developed together, 
 since one project helps the other.

Demo shows is a real world example of use Atlas.

[![xperimentx atlas](doc/images/atlas.png)](https://github.com/xperimentx/atlas) 


---

## In the research and development state
First beta estimated in summer of 2018

![xperimentx atlas](doc/images/pensando.png) 

----

## Draft

<pre>
www
├── <b>base.php</b>         <i>. . . . Common base for app and tools</i>
├── <b>index.php</b>        <i>. . . . Aplication main php</i>
│    
├── <b>Config</b>           <i>. . . . Configuration files</i>
│   ├── <b>.development</b> <i>. . . . Only exist in development stage</i>    
│   ├── <b>Autoload.php</b>               
│   ├── <b>Database_development.php</b>
│   ├── <b>Database_production.php</b>
│   ├── <b>Environment.php</b>
│   ├── <b>Migrator.php</b>
│   └── <b>Routes.php</b>
│
├── <b>App</b>              <i>. . . . Application stuff</i>
│   ├── <b>Controllers</b>  
│   ├── <b>Views</b>
│   └── <b>Templates</b> 
|
├── <b>Tools</b>
│   ├── <b>active_record.php</b> <i>. Helps to generate model classes
│   ├── <b>migrator.php</b>  <i>. . . Migration tool 
│   |
│   └── <b>Migrations</b>  <i>. . . . Migration steps</i>
│      ├── <b>001-Frirst_migration.php</b>
│      ├── <b>002-Create_users_table.php</b>
│      ├── ....
│      └── <b>999-Last_migration.php</b>
│     
├── <b>Web</b>              <i>. . . . Public web</i>
│   ├── <b>Common_class.php</b> <i>. . Auxiliary classes</i>
│   ├── ...
│   ├── <b>Models</b>       <i>. . . . The hard work</i> 
│   ├── <b>Controllers</b>  
│   ├── <b>Views</b>
│   └── <b>Templates</b>
│
│
├── <b>media
│   └── <b>images</b>
│
├── <b>Xperimentx</b>
│   ├── <b>Atlas</b>
│   ├── <b>Control</b>
│   └── <b>Crud</b>
│
└── <b>vendor </b>          . . . . Other libraries
    └── <b>Acme</b>
        └── <b>src</b>
</pre>
 