
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
	<div id="content" class="typeface-js">
	<?php echo form_open('home/login');?>

<div class='title'>Login Form</div>
<?php
// hanya untuk menampilkan informasi saja
if(isset($login_info))
{
	echo "<span style='background-color:#eee;padding:3px;'>";
	echo $login_info;
	echo '</span>';
}
?>
<table>
	<tr>
		<td>Username</td>
		<td>
			<?php
				echo form_input('username',set_value('username'));
				echo form_error('username');
			?>
		</td>
	</tr>
	<tr>
		<td>Password</td>
		<td>
			<?php
				echo form_password('password');
				echo form_error('password');
			?>	
		</td>
	</tr>
	<tr>
		<td></td>
		<td><?php echo form_submit('submit','LOGIN');?></td>
	</tr>
</table>

<?php echo form_close();?>
	</div>
	<div id="footer">Tetap sengat, jangan mau kalah . keep Focuss</div>
</div>
</body>
</html>