<?php include('D:\xammpp\htdocs\complete-blog-php\config.php');?>
<!--source code for handling register and login-->
<?php include('D:\xammpp\htdocs\complete-blog-php\includes\registration_login.php');?>

<?php include('D:\xammpp\htdocs\complete-blog-php\includes\head_section.php');?>

<title>LifeBlog | Sign up</title>
</head>
<body>
<div class="container">
	<!-- Navbar -->
		<?php include('D:\xammpp\htdocs\complete-blog-php\includes\navbar.php'); ?>
	<!-- // Navbar -->

	<div style="width: 40%; margin: 20px auto;">
		<form method="post" action="register.php" >
			<h2>Register on LifeBlog</h2>
			<?php include('D:\xammpp\htdocs\complete-blog-php\includes\errors.php') ?>
			<input  type="text" name="username" value="<?php echo $username; ?>"  placeholder="Username">
			<input type="email" name="email" value="<?php echo $email ?>" placeholder="Email">
			<input type="password" name="password_1" placeholder="Password">
			<input type="password" name="password_2" placeholder="Password confirmation">
			<button type="submit" class="btn" name="reg_user">Register</button>
			<p>
				Already a member? <a href="<?php echo BASE_URL . '/login.php'?>">Sign in</a>
			</p>
		</form>
	</div>
</div>
<!-- // container -->
<!-- Footer -->
	<?php include('D:\xammpp\htdocs\complete-blog-php\includes\footer.php'); ?>
<!-- // Footer -->