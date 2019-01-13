<?php  include('D:\xammpp\htdocs\complete-blog-php\config.php'); ?>
<?php  include('D:\xammpp\htdocs\complete-blog-php\includes\registration_login.php'); ?>
<?php  include('D:\xammpp\htdocs\complete-blog-php\includes\head_section.php'); ?>
	<title>LifeBlog | Sign in </title>
</head>
<body>
<div class="container">
	<!-- Navbar -->
	<?php include('D:\xammpp\htdocs\complete-blog-php\includes\navbar.php'); ?>
	<!-- // Navbar -->

	<div style="width: 40%; margin: 20px auto;">
		<form method="post" action="login.php" >
			<h2>Login</h2>
			<?php include('D:\xammpp\htdocs\complete-blog-php\includes\errors.php') ?>
			<input type="text" name="username" value="<?php echo $username; ?>" value="" placeholder="Username">
			<input type="password" name="password" placeholder="Password">
			<button type="submit" class="btn" name="login_btn">Login</button>
			<p>
				Not yet a member? <a href="<?php echo BASE_URL . '/register.php'?>">Sign up</a>
			</p>
		</form>
	</div>
</div>
<!-- // container -->

<!-- Footer -->
	<?php include('D:\xammpp\htdocs\complete-blog-php\includes\footer.php'); ?>
<!-- // Footer -->