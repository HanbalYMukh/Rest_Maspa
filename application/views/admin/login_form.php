<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

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

<?php echo form_close();