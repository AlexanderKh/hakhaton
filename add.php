<?php
include_once('models/m_startup.php');
include_once('models/m_problems.php');
include_once('models/m_comments.php');
include_once('models/m_users.php');
include_once('models/m_main_functions.php');
include_once('models/m_categories.php');

// ????????? ??????????, ??????????? ? ??, ?????? ??????.
startup();

d($_POST, $die = 0);
if (isset($_POST['title']) && ($_POST['description']) && ($_POST['category_id']))
{
	create_problem($_POST['title'], $_POST['description'], $_POST['category_id']);
}

$categories=get_all_categories();

$title="Нова проблема";

$parameter='pl';

$content = view_include(
	'views/v_add_problem.php', 
	array('problem' => $problem, 'comments' => $comments, 'categories' => $categories));

// ??????? ??????.
$page = view_include(
	'views/v_main.php', 
	array('title' => $title, 'content' => $content, 'parameter' => $parameter));

// ?????.
echo $page;

?>
