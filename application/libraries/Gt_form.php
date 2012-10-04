<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gt_form{

    function getLoginForm($url,$msg=""){
		$hasil='<form action="'.$url.'" method="post"><table class="tab_login">';
		if($msg!="")
			$hasil.='<tr><td colspan="2"><div class="err_msg">'.$msg.'</div></td></tr>';
		$hasil.='
		<tr>
			<td>Username</td><td><input type="text" name="user" value="" placeholder="username" maxlength="30" class="frm_text" /></td>
		</tr>
		<tr>
			<td>Password</td><td><input type="password" value="" name="pass" maxlength="30" class="frm_text" /></td>
		</tr>
		<tr>
			<td>&nbsp;</td><td><input type="submit" value="" class="login_button" /></td>
		</tr>
		</table></form>';
		
		return $hasil;
	}
}