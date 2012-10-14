<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" charset="utf-8"/>
	<link type="text/css" href="<?php echo base_url();?>asset/css/jquery.ui.all.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>asset/css/style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url();?>asset/css/demos.css">
	<link href="<?php echo base_url();?>asset/css/jquery-ui-1.9.0.custom.css" rel="stylesheet">
	<script src="<?php echo base_url();?>asset/js/jquery-1.8.2.js"></script>
	<script src="<?php echo base_url();?>asset/js/jquery-ui-1.9.0.custom.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>asset/js/jquery-1.8.0.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>asset/js/jquery-ui-1.8.23.custom.min.js"></script>
	<script src="<?php echo base_url();?>asset/js/typeface.js"></script>
    <script src="<?php echo base_url();?>asset/css/font/gentilis_font/gentilis_regular.typeface.js"></script>
	<script>
	$(function() {
		// Hover states on the static widgets
		$( "#dialog-link, #icons li" ).hover(
			function() {
				$( this ).addClass( "ui-state-hover" );
			},
			function() {
				$( this ).removeClass( "ui-state-hover" );
			}
		);
	});
	</script>
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
		<div id="right-head"> Welcome <?php echo $this->session->userdata('nama');?>, <?php echo anchor('home/logout','Logout');?></div>
		</div>
	</div>
	<div class="space"></div>
	<div id="menu-head-wrapp"> 
		<div id="nama-menu"><p>Kesiswaan</p></div>
		<div id="nama-menu"><p>Tenaga Pengajar</p></div>
		<div id="nama-menu"><p>Akademika</p></div>
		<div id="nama-menu"><p>Utilitas System</p></div>

	</div>
	<div id="menu-wrapp">
		<div id="menu">
			<ul id="icons" class="ui-widget ui-helper-clearfix">
			<?php
			foreach($menusatu->result() as $row)
				{
				echo '<li class="ui-state-default ui-corner-all" title="'.$row->menu_nama.'">'.anchor($row->menu_uri,'<span class="ui-icon '.$row->icon.'"></span>').'</li>';
				}
			?>
			</ul>
		</div>
		<div id="menu">
			<ul id="icons" class="ui-widget ui-helper-clearfix">
			<?php
			foreach($menudua->result() as $row)
				{
				echo '<li class="ui-state-default ui-corner-all" title="'.$row->menu_nama.'">'.anchor($row->menu_uri,'<span class="ui-icon '.$row->icon.'"></span>').'</li>';
				}
			?>
			</ul>
		</div>
		<div id="menu">
			<ul id="icons" class="ui-widget ui-helper-clearfix">
			<?php
			foreach($menutiga->result() as $row)
				{
				echo '<li class="ui-state-default ui-corner-all" title="'.$row->menu_nama.'">'.anchor($row->menu_uri,'<span class="ui-icon '.$row->icon.'"></span>').'</li>';
				}
			?>
			</ul>
		</div>
		<div id="menu">
			<ul id="icons" class="ui-widget ui-helper-clearfix">
			<?php
			foreach($menuempat->result() as $row)
				{
				echo '<li class="ui-state-default ui-corner-all" title="'.$row->menu_nama.'">'.anchor($row->menu_uri,'<span class="ui-icon '.$row->icon.'"></span>').'</li>';
				}
			?>
			</ul>
		</div>
	</div>
	<div id="content" class="typeface-js"><?php echo $template['body']; ?></div>
	<div id="footer">Tetap sengat, jangan mau kalah . keep Focuss</div>
</div>
</body>
</html>