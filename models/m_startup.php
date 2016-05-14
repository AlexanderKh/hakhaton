<?php

function startup()
{
	// РќР°СЃС‚СЂРѕР№РєРё РїРѕРґРєР»СЋС‡РµРЅРёСЏ Рє Р‘Р”.
	$hostname = 'localhost'; 
	$username = 'root'; 
	$password = '';
	$dbName = 'hakhaton';
	
	// РЇР·С‹РєРѕРІР°СЏ РЅР°СЃС‚СЂРѕР№РєР°.
	setlocale(LC_ALL, 'ru_RU.CP1251');	
	
	// РџРѕРґРєР»СЋС‡РµРЅРёРµ Рє Р‘Р”.
	mysql_connect($hostname, $username, $password) or die('No connect with data base'); 
	mysql_query('SET NAMES utf-8');
	mysql_select_db($dbName) or die('No data base');

	// РћС‚РєСЂС‹С‚РёРµ СЃРµСЃСЃРёРё.
	session_start();
		
}
