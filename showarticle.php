<?php
	require_once("mysqli_connect.php");
	
	$query="SELECT * FROM authors";
	$result=@mysqli_query($dbc, $query);
	
	if($result) {
		while ($row=mysqli_fetch_array($result)) {
			echo "<div>$row['article_text']<div>";
			echo "<div>$row['fullname']</div>";
			echo "<div>$row['email']</div>";		
			echo "<div>$row['website']</div>";		
			echo "<div>$row['phone']</div>";		
		}
		mysqli_close{$dbc};
	} else {
		echo "Not connected" . mysqli_error($dbc);
	}
?>