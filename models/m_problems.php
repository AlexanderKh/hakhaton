<?php

function problems_all (){
	$sql = ("SELECT * FROM problems");
	
	$result = mysql_query($sql);
	$n = mysql_num_rows($result);
	
	for ($i = 0; $i < $n; $i++)
		{
		$row = mysql_fetch_assoc($result);		
		$problem["$i"]['id'] = $row['pl'];
		$problem["$i"]['title'] = $row['title'];
		$problem["$i"]['description'] = $row['description'];
		$problem["$i"]['creation_date'] = $row['creation_date'];
		$problem["$i"]['user_id'] = $row['creation_date'];
		$problem["$i"]['category_id'] = $row['category_id'];
		$problem["$i"]['approved'] = $row['approved'];
		}
		
		return $problem;
}