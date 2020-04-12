<?php
include_once '/'.$_SERVER['DOCUMENT_ROOT'].'/includes/db_connect.php';
include_once '/'.$_SERVER['DOCUMENT_ROOT'].'/includes/functions.php';
sec_session_start();
//read the entire string
$str=implode("",file('TEMPLATEmaincontents.php'));
// open new file
$fp=fopen('changed.php','w');
//replace something in the file string - this is a VERY simple example
$str=str_replace('THEUSERNAME',$_SESSION['username'],$str);
//now, TOTALLY rewrite the file
fwrite($fp,$str,strlen($str));