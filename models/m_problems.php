<?php

include_once 'helpers.php';

function problems_all (){
	$sql = ("SELECT * FROM problems ORDER BY approved ASC");
	
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

function create_problem ($title, $description, $category_id)
{
	$sql = "INSERT INTO problems(title, description, category_id, approved, creation_date) VALUES('$title', '$description', '$category_id', 0, NOW())";
	d($sql, $die = 0);
	$result = mysql_query($sql);
}

function update_problem ($id, $title, $description, $category_id) {
	$sql = "UPDATE problems 
			SET title='$title', 
				description='$description', 
				category_id='$category_id' 
			WHERE id='$id'";
	mysql_query($sql);
}

function get_unapproved_problems() {
	return select_by_sql("SELECT * FROM problems WHERE approved = 0");
}

function get_approved_problems() {
	return select_by_sql("SELECT * FROM problems WHERE approved = 1 ORDER BY creation_date DESC");
}

function approve($id) {
	$sql = "UPDATE problems
			SET approved=1
			WHERE id='$id'";
	mysql_query($sql);
}

function delete_problem($id) {
	$sql = "DELETE FROM problems WHERE id = '$id'";
	mysql_query($sql);
}

function get_problems_by_category($id){
	$sql = "SELECT * FROM problems WHERE category_id='$id'";
	$result=mysql_query($sql);
	$n = mysql_num_rows($result);
	
	$problem = array();
	for ($i = 0; $i < $n; $i++)
		$problem[] = mysql_fetch_assoc($result);
	
	return $problem;
}