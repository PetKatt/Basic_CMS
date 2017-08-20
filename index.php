<html>
	<head>
		<meta charset="utf-8" />
		<title>Add your article</title>
		<meta type="description" content="Here you can add your thought of the day. And share it to others." />
		<meta type="keywords" content="thought, day, your, article, share, write, add" />
		<meta type="author" content="Piotr Wiercinski" />
		
		<link rel="stylesheet" href="style.css" type="text/css" />
	</head>
	<body>
		<div class="container">
			<h1>Write Your Thought of the Day!</h1>
			<form action="articles.php" method="post">
				Your message: <textarea rows="10" cols="50" type="text" name="message"></textarea><br />
				Full name: <input type="text" name="fullname" /><br />
				Email: <input type="text" name="email" /><br />
				Website: <input type="text" name="website" /><br />
				Phone: <input type="text" name="phone" /><br />
				<input type="submit" name="submit" value="Send" />
			</form>
		</div>
	
	</body>
</html>