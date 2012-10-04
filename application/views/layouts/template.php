<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" charset="utf-8"/>
    <script src="<?php echo base_url();?>asset/js/typeface.js"></script>
    <script src="<?php echo base_url();?>asset/css/font/gentilis_font/gentilis_regular.typeface.js"></script>
	<link type="text/css" href="<?php echo base_url();?>asset/css/jquery.ui.all.css" rel="stylesheet" />
	<script type="text/javascript" src="<?php echo base_url();?>asset/js/jquery-1.8.0.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>asset/js/jquery-ui-1.8.23.custom.min.js"></script>
	<link href="<?php echo base_url();?>asset/css/style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url();?>asset/css/demos.css">
</head>
<body>
<div id="site-container">
	<div id="header">
		<div id="head-container">
		<div id="maspa">
			<a href="<? echo base_url();?>">Home</a>
		</div>
		<div id="logo">
		</div>
		</div>
	</div>
	<div class="space"></div>
	<div id="menu-head-wrapp"> <p>Menu Kelola Sistem</p> </div>
	<div id="menu-wrapp">
		<div id="menu"></div>
		<div id="menu"></div>
		<div id="menu"></div>
		<div id="menu"></div>
	</div>
	<div id="content" class="typeface-js"><?php echo $template['body']; ?></div>
	<div id="footer">Tetap sengat, jangan mau kalah . keep Focuss</div>
</div>
</body>
</html>