<?php
$ACL=array(
    "guest"=>array(
		"breadcrum" => array("*")
	   ,"login"=>array("dologin","display"),
	)
	,"Admin"=>array(
		"*" => array("*")
	)
);