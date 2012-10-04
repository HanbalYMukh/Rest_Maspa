<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gt_number{

    function getRupiah($n){
		return number_format($n,2,chr(44),".");
	}
}

