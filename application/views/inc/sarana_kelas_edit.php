<link href="<?php echo base_url().'static/css/data.css'; ?>" rel="stylesheet"/>
<script>
	function checkForm(thisform)
	{

		if (confirm("Apakah yakin ingin menyimpan data ini?")) 
		{
            thisform.submit();
        }
    }
</script>
<br><br>
<div id="data_table">
<?php foreach($content->result() as $row):?>
<table width="50%" border="0" cellpadding="0" cellspacing="1" id="tbl_data" align="center">
	<tr class="tr_head">
		<td height="20" align="center">SARANA KELAS [Ubah]</td>
    </tr>
    <tr>
		<td>
			<table border="0" cellpadding="1" cellspacing="1" align="center" width="100%">
            
			<form name="frm" method="post" action="<?=base_url();?>index.php/data_sarana_kelas/proc_edit/">
                <tr class="tr_data">
                    <td nowrap class="fieldcaption">&nbsp;Id Kelas*</td>
                    <td nowrap>
                        <input name="txtIdKelas" type="hidden" class="inputstyle" size="6" maxlength="6" value="<?=$row->id_kelas?>">&nbsp;<?=$row->id_kelas?>
					</td>
                </tr>
            	<tr class="tr_data">
                    <td nowrap class="fieldcaption">&nbsp;Jenis Sarana</td>
                    
                    <td nowrap>
                       <input name="txtJnsSarana" type="text" class="text_box" size="50" maxlength="50" value="<?=$row->jns_sarana?>">
					</td>
                </tr>
				<tr class="tr_data">
                    <td nowrap class="fieldcaption">&nbsp;Jumlah Sarana</td>
                    <td>
                       <input name="txtJmlSarana" type="text" class="text_box" size="10" maxlength="10" value="<?=$row->jml_sarana?>">
					</td>
                </tr>
            	<tr>
                    <td></td>
                    <td height="35px">
						<input type="hidden" value="<?=$row->id?>" name="id">
                        <input type="button" class="button" value="Simpan" onClick="checkForm(document.frm)">&nbsp;
                        <input type="button" class="button" onClick="history.back();" value="Batal">
					</td>
                </tr>
			</form>
            </table>
		</td>
	</tr>
</table>


<div id="data_tabel">
  <?php endforeach?>
</div>
