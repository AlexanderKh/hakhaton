<?php

include_once('models/m_startup.php');
include_once('models/m_categories.php');
include_once('models/m_main_functions.php');

startup();


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $category = get_category_by_id($id);
    $name = $category['name'];

    $content = view_include(
        'views/v_categories_edit.php',
        array('category' => $category));

    $page = view_include(
        'views/v_main.php',
        array('title' => "Editing $name category", 'content' => $content));

    echo $page;
    return;
}

if (isset($_POST['method'])) {
    switch ($_POST['method']) {
        case 'delete':
            delete_category_by_id($_POST['id']);
            header("Location: categories.php");
            die();
        case 'update':
            $id = $_POST['id'];
            update_category_by_id($id, $_POST['name']);
            header("Location: categories.php?id=$id");
            die();
        case 'create':
            //d($_POST);
            create_category($_POST['name']);
            header("Location: categories.php");
            die();
    }
}

$categories = get_all_categories();

//d($categories);

$content = view_include(
    'views/v_categories.php',
    array('categories' => $categories));

$page = view_include(
    'views/v_main.php',
    array('title' => 'categories', 'content' => $content));

echo $page;