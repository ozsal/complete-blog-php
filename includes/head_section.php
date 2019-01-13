<!DOCTYPE html>
<html>
<head>
<!--Google fonts-->
	<link href=""https://fonts.googleapis.com/css?family=Averia+Serif+Libre|Noto+Serif|Tangerine" rel="stylesheet">
	<!-- styling for public area-->
	<?php
		$style_path= is_file('static/css/public_styling.css') ? 'static/css/public_styling.css' : '../static/css/public_styling.css';
	?>
	<link rel="stylesheet" type="text/css" href="<?php echo $style_path; ?>">
	<meta charset="UTF-8">