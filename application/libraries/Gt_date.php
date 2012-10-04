<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gt_date{

    function inputtodb($d) {
		if($d!="")
	    	return substr($d,6,4)."-".substr($d,3,2)."-".substr($d,0,2);
		else return "";
	}
	
	function dbtoinput($d) {
		if($d!="")
	    	return substr($d,8,2)."-".substr($d,5,2)."-".substr($d,0,4);
		else return "";
	}
	
	function getNormalFormat($tgl){
			return substr($tgl,8,2).' '.$this->getBulan(substr($tgl,5,2)).' '.substr($tgl,0,4);		 
	}	
	function getTimeFormat($tgl){
			$jam = substr($tgl,11,8);
			return $jam;	 
	}	
	function getNowDate(){
		return date('Y-m-d');
	}
	function getNowTime(){
		return date('H:i:s');
	}
	function getCompleteTimeToDb(){
		return date('Y-m-d')." ".date('H:i:s');
	}
	function getCompleteTimeToView(){
		return $this->getCompleteTimeFromDb(date('Y-m-d')." ".date('H:i:s'));
	}
	function getCompleteTimeFromDb($datetime){
		return $this->getNormalFormat($datetime)." ".$this->getTimeFormat($datetime);
	}
	function getBulan($bln){
		switch ($bln){
			case 1: 
				return "Januari";
				break;
			case 2:
				return "Februari";
				break;
			case 3:
				return "Maret";
				break;
			case 4:
				return "April";
				break;
			case 5:
				return "Mei";
				break;
			case 6:
				return "Juni";
				break;
			case 7:
				return "Juli";
				break;
			case 8:
				return "Agustus";
				break;
			case 9:
				return "September";
				break;
			case 10:
				return "Oktober";
				break;
			case 11:
				return "November";
				break;
			case 12:
				return "Desember";
				break;
		}
	}
}

