<?php 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	foreach ($_POST as $field => $value) {
		echo "$"."_POST['"."$field"."']"." == '$value'<br>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Md. Mostak Shahid">
	<link rel="stylesheet" href="<?php echo plugins_url( 'css/bootstrap.min.css', __FILE__ )?>">
	<link rel="stylesheet" href="<?php echo plugins_url( 'css/dashboard.css', __FILE__ )?>">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?php echo  plugins_url( 'js/popper.min.js', __FILE__ )?>"></script>
	<script src="<?php echo  plugins_url( 'js/bootstrap.min.js', __FILE__ )?>"></script>

</head>
<body>
	<header id="jportal-header"><?php do_action( 'jportal_header' ); ?></header>
	<main id="jportal-content">
		<div class="container">
			<div class="content-wrapper">

	