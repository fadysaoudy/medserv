<?php
session_start();
define("BURL","http://localhost/project/medical/");
define("BURLA","http://localhost/project/medical/admin/");
define("ASSETS","http://localhost/project/medical/assets");
//TAKE US TO MEDICAL SERVER
define("BL",__DIR__.'/');

define("BLA",__DIR__.'/admin/');
//TAKE US TO admin
//define("BUA","http://localhost/project/medical/admin/");
require_once (BL.'functions/db.php'); 

?>