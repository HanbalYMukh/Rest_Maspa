<link href="<?php echo base_url().'static/css/form2.css'; ?>" rel="stylesheet"/>
<link href="<?php echo base_url().'static/css/data.css'; ?>" rel="stylesheet"/>

<script>
	function checkAll(chkAll,chkList) 
	{
		if (chkList != null) 
		{
			if (chkList.length == null) chkList.checked = chkAll.checked;
            else for (i=0;i<chkList.length;i++) chkList[i].checked = chkAll.checked;
        }
    }
        
    function isCheckedAll(chkAll,chkList) 
	{
		if (chkList.length == null) return chkList.checked;
        else 
		{
			for (i=0;i<chkList.length;i++) 
			{
				if (!chkList[i].checked) 
				{
					return false;
                    break;
                }
			}
            return true;
        }
    }
        
    function checkList(chkAll,chkList) 
	{
        chkAll.checked = isCheckedAll(chkAll,chkList);
    }
        
    function isChecked(chkAll,chkList) 
	{
		if (chkList != null) 
		{
			if (chkList.length == null) return chkList.checked;
            else 
			{
				for (i=0;i<chkList.length;i++) 
				{
					if (chkList[i].checked) 
					{
						return true;
                        break;
                    }
                }
                return false;
            }
        }
        else return false;
    }

    function hapus(thisform) 
	{
		if (!isChecked(thisform.chkAll,thisform["chkList[]"])) 
		{
			alert("Harap memilih sedikitnya 1 record data untuk dihapus");
            return;
        }
        else if (confirm("Apakah Anda yakin ingin menghapus data ini?")) 
		{
			thisform.action = "<?=base_url();?>index.php/data_sarana_kelas/delete";
            thisform.submit();
        }
    }
	
	function refreshAccessRight(thisform)
	{
		thisform.action = "<?=base_url();?>index.php/data_sarana_kelas/index";
		thisform.submit();
	}
	
</script>
<br>
<a href="<?=base_url()?>index.php/c_sarana"  title="Kembali ke menu utama" ><img  src="<?=base_url()?>static/images/menu/back.png" align="absmiddle"/><font size="2"> Kembali</font></a><br>
<div id="data_tabel">
<form name="frm" method="post" action="<?=base_url();?>index.php/data_sarana_kelas/tambah">
<table class="no-style" width="100%" border="0" cellpadding="1" cellspacing="1" align="center">

<tr><td align="center"><font size="+1">MASTER KELAS / SARANA KELAS</font></td></tr>
</table>

		<table border="0" width="90%" cellpadding="2" cellspacing="1" align="center" class="tbl_data">
		
		    
			
		    <tr>
				<td>
				<table align="center" width="100%" border="0" cellpadding="2" cellspacing="2" class="tbl_data" style="border: 1px solid #336699;">
				<tr>
					<td align="left" valign="bottom"><span style="width:75%"><img  src="<?=base_url()?>static/images/menu/view.png" align="absmiddle"/>&nbsp;Kelas :
                        <select name="id_kelas" rows="50px" class="select_box"  onchange="refreshAccessRight(document.frm)">
                          <? 
						$q=$this->db->query("SELECT id_kelas FROM tkelas order by id_kelas Asc"); 
						foreach($q->result() as $r){
							$strSelected = "";
				            if ($r->id_kelas == $id_kelas) $strSelected = "selected"; $kelas=$id_kelas;
				            echo "<option value=\"" . $r->id_kelas . "\" $strSelected>" . $r->id_kelas . "</option>\n";
				        }
						?>
                        </select>
					</span></td>
					<td>&nbsp;</td>
				  <td align="right" valign="bottom"><input name="button" type="button" class="button" onclick="location='<?=base_url();?>index.php/data_kelas/index'" value="Daftar Kelas&nbsp;" /></td>
				</tr>
	            <tr>
    	            <td align="center" colspan="6"><hr></td>
    	        </tr>				
	            <tr>
   	              <td align="right" colspan="6">
				  <img  src="<?=base_url()?>static/images/menu/add.png" align="absmiddle"/>
					 	<input type="button" class="button" onClick="location='<?=base_url();?>index.php/data_sarana_kelas/tambah/<?=$kelas?>'" value="Tambah"></td>
    	        </tr>
				<thead">
					
					<th align="Center">Jenis Sarana</th>
					<th align="Center" width="20%">Jumlah Sarana</th>
					<th align="Center" width="150px">Aksi</th>
				</thead>

<?php
	$bgcolor = '#DCF0D9';
	
	if(!$content)
	{
		echo "Data tidak ada !!!";
	}
	else
	{
	//$i=0;
	//foreach ($content1 as $list1){
	//$i=$list1->no;}
	foreach ($content as $list){
	
	$r=$this->db->count_all_results('tsarana_kelas');
	
	if($r == "") 
	{
       	break;
    }
    if($bgcolor == "#DCF0D9")
	{
		$bgcolor = "#FFFFFF";
    }
    else
	{
    	$bgcolor = "#DCF0D9";
    } 
?>
			
            	<tr class="tr_data" valign="top" bgcolor="<?=$bgcolor?>">	
                  
                    <td align="left">&nbsp;<?=$list->jns_sarana?></td>
                    <td width="20%">&nbsp;<?= $list->jml_sarana?></td>
               		<td align="center"><a href="<?=base_url();?>index.php/data_sarana_kelas/edit/<?=$list->id?>"><img  src="<?=base_url()?>static/images/menu/update.png" align="absmiddle"/> Ubah</a> | <a href="<?=base_url()?>index.php/data_sarana_kelas/deleteData/<?=$list->id?>" title="Delete data" onClick="return confirm('Data tersebut akan dihapus dari database ?')"><img  src="<?=base_url()?>static/images/menu/del.png" align="absmiddle"/> Hapus</a></td>
			    </tr>
				
<?				
	}	}
?>
</table>
  </form>
  
</div>

