<?php
include_once 'models/m_startup.php';
include_once 'models/m_problems.php';
include_once('models/m_main_functions.php');
include_once('models/m_categories.php');

startup();

if(isset($_POST['method'])) {
    switch ($_POST['method']) {
        case 'approve':
            approve($_POST['id']);
            header("Location: admin.php");
            die();
        
    }
}

$allcategories=get_all_categories();

$problems = problems_all();

$title="Підтвердження проблем";

$content = view_include(
    'views/v_index.php',
    array('problems' => $problems, 'is_admin' => true));

$page = view_include(
    'views/v_main.php',
    array('title' => $title, 'content' => $content, 'allcategories' => $allcategories));

echo $page;