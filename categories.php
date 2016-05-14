<?php

include_once('models/m_startup.php');
include_once('models/m_categories.php');
include_once('models/m_main_functions.php');

startup();

$categories = get_all_categories();

//d($categories);

$content = view_include(
    'views/v_categories.php',
    array('categories' => $categories));

$page = view_include(
    'views/v_main.php',
    array('title' => 'categories', 'content' => $content));

echo $page;