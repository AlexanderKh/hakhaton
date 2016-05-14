<?php
include_once 'helpers.php';

function get_all_categories() {
    return select_all_by_table('categories');
}