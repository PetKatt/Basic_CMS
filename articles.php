<html>
	<head>
	</head>
	<body>
		<?php
		if (isset($_POST['submit'])) {
			
			$message=$_POST['message'];
			$fullname=$_POST['fullname'];
			$email=$_POST['email'];
			$website=$_POST['website'];
			$phone=$_POST['phone'];

			require_once "mysqli_connect.php";
			
			$query="INSERT INTO authors (fullname, email, website, phone, article_text) VALUES (?, ?, ?, ?, ?)";
			$stmt=mysqli_prepare($dbc, $query);
			/*
			i integers
			d Doubles
			b Blobs
			s Everything Else
			*/
			mysqli_stmt_bind_param($stmt, "sssis", $fullname, $email, $website, $phone, $message);
			
			mysqli_stmt_execute($stmt);
			
			if (mysqli_stmt_affected_rows($stmt)==1) {
				echo "Article Added";
				
				mysqli_stmt_close($stmt);
				mysqli_close($dbc);
			}
		
		} else {
			echo "Error: " . mysqli_error($dbc);
		}
		?>
		
		
		<?php
			require_once "mysqli_connect.php";
			
			$query="SELECT fullname, email, article_text FROM authors";
			$result=@mysqli_query($dbc, $query);
			
			if($result) {
				while ($row=mysqli_fetch_array($result)) {
					echo $row['article_text'];
					echo $row['fullname'];
					echo $row['email'];		
				}
				mysqli_close($dbc);
			} else {
				echo "Not connected";
			}
		?>
	</body>
</html>