<?php
include_once('models/m_startup.php');
include_once('models/m_problems.php');
include_once('models/m_users.php');
include_once('models/m_main_functions.php');

startup();

$problems=problems_all();

$title="пїЅпїЅпїЅпїЅпїЅпїЅпїЅ пїЅпїЅпїЅпїЅпїЅпїЅпїЅ";

$parameter='pr';

$content = view_include(
	'views/v_index.php', 
	array('problems' => $problems));

$page = view_include(
	'views/v_main.php', 
	array('title' => $title, 'content' => $content, 'parameter' => $parameter));

echo $page;

?>
