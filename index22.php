<?php
/* 
  Copyright (c) 2010-02 Game
  Game All Rights Reserved. 
  QQ:1834219632
  Author: Version:1.0
  Date:2011-12-07 09:28:32
*/
define('Copyright', '作者QQ:1834219632');
define('ROOT_PATH', $_SERVER["DOCUMENT_ROOT"].'/');
include_once ROOT_PATH.'function/global.php';
$sHome = include_once ROOT_PATH.'function/JumpPort.php';
if ($_SERVER["REQUEST_METHOD"] == "POST" && @$_POST['sid'] != null)
{
	include_once ROOT_PATH.'main.php';
}
else if($sHome == 1)
{
	include_once ROOT_PATH.'Login.php';
}
else if ($sHome == 2)
{
	include_once ROOT_PATH.'Manage/Login.php';
}
else if ($sHome == 3)
{
	include_once ROOT_PATH.'Manage/LoginRoot.php';
}
else if ($sHome == 4)
{
	include_once ROOT_PATH.'daohang/index.php';
}
?>