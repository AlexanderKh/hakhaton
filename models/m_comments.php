<?php

function get_comments_by_problem_id($pr_id) {
    $sql = ("SELECT * FROM comments WHERE problem_id = '$pr_id'");

    $result = mysql_query($sql);
    $n = mysql_num_rows($result);

    $comments = array();
    for ($i = 0; $i < $n; $i++)
        $comments[] = mysql_fetch_assoc($result);

    return $comments;
}

