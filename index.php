<?php
include_once('models/m_startup.php');
include_once('models/m_problems.php');
include_once('models/m_users.php');
include_once('models/m_main_functions.php');
include_once('models/m_categories.php');

startup();

$problems=get_approved_problems();

$allcategories=get_all_categories();

$title="Головна";

$parameter='pr';

$content = view_include(
	'views/v_index.php', 
	array('problems' => $problems, 'is_admin' => false));

$page = view_include(
	'views/v_main.php', 
	array('title' => $title, 'content' => $content, 'parameter' => $parameter, 'allcategories' => $allcategories));

echo $page;

?>
