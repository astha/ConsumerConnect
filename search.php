<?php

	include("connect_sql.php");

//Output HTML Formating
$html = '';
$html .= '<li class="results">';
$html .= '<img src="PHOTO" width="25px" height="25px">';
$html .= '<a href="consprofile.php?see=USERID"><font class=\"user-name\">';
$html .= '  NAME SURNAM';
$html .= '</a>';
$html .= '</li>';

// Get Search
$search_string = $_POST['query'];
// $search_string = mysql_real_escape_string($search_string);
// echo $search_string;
// Check Length More Than One Character
if (strlen($search_string) >= 1 && $search_string !== ' ') {
	$sql = "SELECT \"UserID\", \"FirstName\", \"LastName\", \"Photograph\" from \"Users\" where LOWER(\"FirstName\") like LOWER('%$search_string%') or LOWER(\"LastName\") like LOWER('%$search_string%') or LOWER(CONCAT(\"FirstName\",\"LastName\")) like LOWER('%$search_string%')limit 5";
	//$sql = "SELECT \"FirstName\" from \"Users\" where \"FirstName\" = 'Aaloka'";
                  //$query = pg_query($db, $sql);
                  //$row = pg_fetch_row($query);
                  
	// echo $sql;
	$query = pg_query($db, $sql);
	 
 
  
	
		while($row = pg_fetch_row($query)){
			// $output = $row[0];
			$output = str_replace('PHOTO', $row[4], $html);
			$output = str_replace('NAME', $row[1], $html);
			$output = str_replace('SURNAM', $row[2], $output);
			$output = str_replace('USERID',$row[0],$output);
			echo "$output";
		
	}
}
?>