<?php
include_once('models/m_startup.php');
include_once('models/m_problems.php');
include_once('models/m_comments.php');
include_once('models/m_users.php');
include_once('models/m_main_functions.php');

// Установка параметров, подключение к БД, запуск сессии.
startup();

if (isset($_POST['name_user']) && ($_POST['comment_text'])){
	add_comment($_GET['id'], $_POST['name_user'], $_POST['comment_text'], "lol");
	
}

$problem=get_problem_by_id($_GET['id']); //
$comments=get_comments_by_problem_id($_GET['id']);

$title=$problem['title'];

$parameter='pl';

$content = view_include(
	'views/v_problem.php', 
	array('problem' => $problem, 'comments' => $comments));

// Внешний шаблон.
$page = view_include(
	'views/v_main.php', 
	array('title' => $title, 'content' => $content, 'parameter' => $parameter));

// Вывод.
echo $page;

?>
