<?php

function d($value = NULL, $die=1){
    
    echo "Debug: <br /><pre>";
    print_r($value);
    echo "</pre>";
    if($die) die;
    
}

function view_include($fileName, $vars = array())
{
	foreach ($vars as $k => $v)
	{
		$$k=$v;
	}
	
	ob_start();
	include $fileName;
	return ob_get_clean();
}

