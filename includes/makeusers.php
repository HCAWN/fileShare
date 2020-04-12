<?php
include_once 'db_connect.php';
include_once 'functions.php';
sec_session_start();
/*FIRST CHECK IF DIRECTORY ALREADY MADE
DON't want somebody manually visiting register page and overwriting all thier stuff when they are logged in*/
$userdir = ("../" . $_SESSION['username']);
if (!is_dir($userdir)) {
	/* EXECUTE MAKING OF ALL */
	/*make main directory*/
	///////////////////////////MAKE DIRECTORY///////////////////////////
	mkdir("../" . $_SESSION['username']);
	//////////////////////////MAKE DIRECTORY///////////////////////////

	///////////////////////////MAKE ROOT.php///////////////////////////
	//read the entire string
	$str=implode("",file('TEMPLATEroot.php'));
	/*make first maincontents.php*/
	$root = fopen("../".$_SESSION['username']."/root.php", "w") or die("Unable to open file!");
	//replace something in the file string - this is a VERY simple example
	$str=str_replace('THEUSERNAME',$_SESSION['username'],$str);
	//now, TOTALLY rewrite the file
	fwrite($root,$str,strlen($str));
	fclose($root);
	///////////////////////////MAKE ROOT.php///////////////////////////
	
	///////////////////////////MAKE MAINCONTENTS.php///////////////////////////
	//read the entire string
	$str=implode("",file('TEMPLATEmaincontents.php'));
	/*make first maincontents.php*/
	$maincontents = fopen("../".$_SESSION['username']."/maincontents.php", "w") or die("Unable to open file!");
	//replace something in the file string - this is a VERY simple example
	$str=str_replace('THEUSERNAME',$_SESSION['username'],$str);
	//now, TOTALLY rewrite the file
	fwrite($maincontents,$str,strlen($str));
	fclose($maincontents);
	///////////////////////////MAKE MAINCONTENTS.php///////////////////////////
}