<?php

function select_all_by_table ($tname) {
    $sql = ("SELECT * FROM $tname");

    $result = mysql_query($sql);
    $n = mysql_num_rows($result);

    $collection = array();
    for ($i = 0; $i < $n; $i++)
        $collection[] = mysql_fetch_assoc($result);

    return $collection;
}
