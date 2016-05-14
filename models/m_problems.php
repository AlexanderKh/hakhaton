<?php

function problems_all (){
	$sql = ("SELECT * FROM problems");
	
	$result = mysql_query($sql);
	$n = mysql_num_rows($result);

	$problem = array();
	for ($i = 0; $i < $n; $i++)
		$problem[] = mysql_fetch_assoc($result);
	
	return $problem;
}

function get_problem_by_id($id) {
	$sql = "SELECT * FROM problems WHERE id = '$id'";
	$result = mysql_query($sql);

	return mysql_fetch_assoc($result);
}