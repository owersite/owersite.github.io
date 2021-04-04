<?php
/**
* Build the class if CLI is used with parameters
*
* @package DDOS
* @author JamesMcAvoy
*/
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'DDOS.php';

if(!DDOS::is_cli())
	exit;

$params = DDOS::getArgs();

$ddos = new DDOS($params);
