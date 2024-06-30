<?php
require_once dirname(__DIR__).'/seProject/se/core/init.php';


//print_r($_SESSION);
if(isset($_SESSION['empid']))
{
//	header('Location: home.php');
	//print_r($_SESSION);
    session_destroy();
    header('Location:../se/index.php');
}
header('Location:/seProject/home.php');
?>