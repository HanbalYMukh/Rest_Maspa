<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Fungsi
{
	function Fungsi()
	{
		$this->CI =& get_instance();
	}
	function complete($str,$max)
	{
	    $num = strlen($str);
	    $res = '';
	    if($num < $max)
	    {
	         for($i=1;$i<=$max-$num;$i++)
	         {
	              $res .= '0';
	         }
	         $res .= $str;
	         return $res;
	    }
         else
         {
	         return $str;
	    }
	}
	function getValue($dbObject,$key)
	{
     if($dbObject->num_rows()>0)
	   {
	     $row = $dbObject->row();
	     if(is_array($key))
	     {
	       foreach($key as $val)
	       {
	         $res[$val] = $row->$val;
	       }
	     }
       else
       {
	       $res = $row->$key;
	     }
	     return $res;
	   }
	   return FALSE;
	}
	function pecah($in)
	{
		$out = number_format($in,0,',','.');
		return 'Rp. '.$out.',-';
	}
	function bulan($rrr)
	{
  	if($rrr=='1' || $rrr=='01'){$ttt='Januari';}
  	if($rrr=='2' || $rrr=='02'){$ttt='Pebruari';}
  	if($rrr=='3' || $rrr=='03'){$ttt='Maret';}
  	if($rrr=='4' || $rrr=='04'){$ttt='April';}
  	if($rrr=='5' || $rrr=='05'){$ttt='Mei';}
  	if($rrr=='6' || $rrr=='06'){$ttt='Juni';}
  	if($rrr=='7' || $rrr=='07'){$ttt='Juli';}
  	if($rrr=='8' || $rrr=='08'){$ttt='Agustus';}
  	if($rrr=='9' || $rrr=='09'){$ttt='September';}
  	if($rrr=='10'){$ttt='Oktober';}
  	if($rrr=='11'){$ttt='Nopember';}
  	if($rrr=='12'){$ttt='Desember';}
  	return $ttt;
	}
}