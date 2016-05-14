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

function create_problem ($title, $description, $category_id) {
	$sql = "INSERT INTO problems(title, description, category_id, approved, creation_date, user_id) VALUES('$title', '$description', '$category_id', 1, NOW(), 1)";
	mysql_query($sql);
}

function update_problem ($id, $title, $description, $category_id) {
	$sql = "UPDATE problems 
			SET title='$title', 
				description='$description', 
				category_id='$category_id' 
			WHERE id='$id'";
	mysql_query($sql);
}