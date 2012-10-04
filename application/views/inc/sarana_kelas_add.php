<link href="<?php echo base_url().'static/css/form2.css'; ?>" rel="stylesheet"/>
<script>
	function checkForm(thisform) 
	{
		if (thisform.txtIdKelas.value == "") 
		{
			alert("Harap semua field di isi");
            thisform.txtIdKelas.focus();
            return;                
        }
		
       	else if (thisform.txtJnsSarana.value == "") 
		{
			alert("Harap mengisi jenis sarana");
            thisform.txtJnsSarana.focus();
            return;                
        }
		else if (thisform.txtJmlSarana.value == "") 
		{
			alert("Harap mengisi jumlah sarana");
            thisform.txtJmlSarana.focus();
            return;                
        }
        else if (confirm("Apakah yakin ingin menyimpan data ini?")) 
		{
             thisform.submit();
        }
    }
	
	
</script>
<br><br><br>
<div id="data_tabel">
  <form name="frm" method="post" action="<?=base_url();?>/index.php/data_sarana_kelas/create">
<table border="0" cellpadding="1" cellspacing="1" id="tbl_layout" align="center" width="50%">
  <tr align="center">
    <td colspan="2"><div class="error" align="center"><?php echo validation_errors(); ?></div></td>
  </tr>
  <tr class="tr_head" align="center">
    <td colspan="2"><? $id=$this->uri->segment(3);?>
      Tambah Data Sarana Kelas </td>
  </tr>
  <tr class="tr_data">
    <th align="left">&nbsp;Nama Provinsi </th>
    <td><input name="txtIdKelas" type="hidden" class="inputstyle" size="6" maxlength="6" value="<?=$id?>">&nbsp;<?php echo $id?></td>
  </tr>
  <tr class="tr_data">
    <th align="left">&nbsp;<span class="fieldcaption">Jenis Sarana</span></th>
    <td><input name="txtJnsSarana" type="text" class="inputstyle" size="50" maxlength="50"></td>
  </tr>
  <tr class="tr_data">
    <th align="left">&nbsp;<span class="fieldcaption">Jumlah Sarana</span></th>
    <td><input name="txtJmlSarana" type="text" class="inputstyle" size="50" maxlength="50"></td>
  </tr>
  <tr>
    <th></th>
    <td><input name="submit" type="submit" class="button" value="Simpan" onClick="checkForm(document.frm)"/>
      &nbsp;
      <input name="button" type="button" class="button" onclick="location.href='<?=base_url()?>index.php/data_sarana_kelas';" value="Batalkan"/></td>
  </tr>
</table>
</form>
</div>

