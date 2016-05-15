<?php
include_once 'helpers.php';

function get_all_categories() {
    return select_all_by_table('categories');
}

function delete_category_by_id($id) {
    $rmassoc = "UPDATE problems
                SET category_id=NULL
                WHERE category_id=$id";
    mysql_query($rmassoc);
    $sql = "DELETE FROM categories WHERE id = '$id'";
    mysql_query($sql);
}

function get_category_by_id($id) {
    return get_entity_by_id ('categories', $id);
}

function update_category_by_id($id, $name) {
    $sql = "UPDATE categories
            SET name='$name'
            WHERE id='$id' ";
    mysql_query($sql);
}

function create_category($name) {
    $sql = "INSERT INTO categories(name) VALUES ('$name')";
    mysql_query($sql);
}