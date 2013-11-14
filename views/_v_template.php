<!DOCTYPE html>
<html>
<head>
	<title><?php if (isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	<!-- Common CSS/JSS -->
    <link rel="stylesheet" href="/css/normalize.css" type="text/css">
    <link rel="stylesheet" href="/css/app.css" type="text/css">

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
					
	<!-- Controller Specific JS/CSS -->
	<?php if (isset($client_files_head)) echo $client_files_head; ?>
	
</head>

<body>	
<!-- Menu for those who are logged in -->
<?php if($user): ?>
<nav>
	<ul>
		<li><a href="/">Home</a></li>
		<li><a href='/users/logout'>Log out</a></li>
		<li><a href='/users/profile'>My Profile</a></li>
		<li><a href='/shows/add'>Add a Show</a></li>
		<li><a href='/shows'>Archive</a></li>
	</ul>
</nav>
<?php endif; ?>
<br></br>
	<?php if (isset($content)) echo $content; ?>

	<?php if (isset($client_files_body)) echo $client_files_body; ?>
</body>
<footer>
	<small>&copy; Copyright 2013 Edge of Forever Studios</small>
	<!-- If there's no logged in user: log in link -->	
	<?php if(!$user): ?>
	<div class="login_button">
		<a href="/users/login">log in</a>
	</div>
	<?php endif; ?> 
</footer>
</html>
