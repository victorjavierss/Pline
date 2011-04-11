<?php

   //Wisdom Framework PATH
   define('WISDOM_HOME',dirname(dirname(__FILE__))."/wisdom");
   
   //Aplication PATH
   define('APP_HOME',dirname(__FILE__));
   
   //Config PATH
   define('CONFIG_PATH',APP_HOME.'/config');
   
   define('CHECKUSER',1);
  
  include_once(WISDOM_HOME."/library/Wisdom/App.php");  

  Wisdom_App::parse();  
?>