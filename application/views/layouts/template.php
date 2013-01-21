<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" charset="utf-8"/>
	<link type="text/css" href="<?php echo base_url();?>asset/css/jquery.ui.all.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>asset/css/style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url();?>asset/css/demos.css">
	<link rel="stylesheet" href="<?php echo base_url();?>asset/css/tables.css">
	<link href="<?php echo base_url();?>asset/css/jquery-ui-1.9.0.custom.css" rel="stylesheet">
	<script src="<?php echo base_url();?>asset/js/jquery-1.8.2.js"></script>
	<script src="<?php echo base_url();?>asset/js/jquery-ui-1.9.0.custom.js"></script>
	<script src="<?php echo base_url();?>asset/js/typeface.js"></script>
    <script src="<?php echo base_url();?>asset/css/font/gentilis_font/gentilis_regular.typeface.js"></script>
	<script src="<?php echo base_url();?>asset/js/baloon.js"></script>

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
	$(function() {
		$('.ui-balloon').balloon( {
			tipSize: 11,
			  css: {
				border: 'solid 1px rgba(234,227,32,.4)',
				padding: '5px', 
				fontSize: '11px',
				fontWeight: 'bold',
				lineHeight: '1.3',
				backgroundColor: 'rgba(203,121,108,.4)',
				color: '#07355b'
			  }
		});
	});
	</script>
	<title> REST . Maspa </title>
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
		<div id="right-head">  --> Welcome <?php echo $this->session->userdata('nama');?></div><div class =" right ui-state-default ui-corner-all" title="Logout"><?php echo anchor('home/logout','<span class="ui-icon ui-icon-locked"></span>');?></div>
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
				echo '<li class="ui-state-default ui-corner-all">'.anchor($row->menu_uri,'<span class="ui-balloon ui-icon '.$row->icon.'" title="'.$row->menu_nama.'"></span>').'</li>';
				}
			?>
			</ul>
		</div>
		<div id="menu">
			<ul id="icons" class="ui-widget ui-helper-clearfix">
			<?php
			foreach($menudua->result() as $row)
				{
				echo '<li class="ui-state-default ui-corner-all">'.anchor($row->menu_uri,'<span class="ui-icon '.$row->icon.' ui-balloon" title="'.$row->menu_nama.'"></span>').'</li>';
				}
			?>
			</ul>
		</div>
		<div id="menu">
			<ul id="icons" class="ui-widget ui-helper-clearfix">
			<?php
			foreach($menutiga->result() as $row)
				{
				echo '<li class="ui-state-default ui-corner-all">'.anchor($row->menu_uri,'<span class="ui-icon '.$row->icon.' ui-balloon" title="'.$row->menu_nama.'"></span>').'</li>';
				}
			?>
			</ul>
		</div>
		<div id="menu">
			<ul id="icons" class="ui-widget ui-helper-clearfix">
			<?php
			foreach($menuempat->result() as $row)
				{
				echo '<li class="ui-state-default ui-corner-all">'.anchor($row->menu_uri,'<span class="ui-icon '.$row->icon.' ui-balloon" title="'.$row->menu_nama.'"></span>').'</li>';
				}
			?>
			</ul>
		</div>
	</div>
	<div class="space"></div>
	<div id="content" class="typeface-js"><?php echo $template['body']; ?></div>
	<div id="footer">
	<div id="top-footer">
		<div class="contain"> 
			<h4 class='logo'></h4>
		</div>
	</div>
	</div>
</div>
</body>
</html>