<link href="<?php echo base_url().'static/css/form2.css'; ?>" rel="stylesheet"/>
<form action="" method="post">
    <table border="0" cellpadding="1" cellspacing="1" id="tbl_layout" align="center" width="50%">
    	 <tr align="center"><td colspan="2"><div class="error" align="center"><?php echo validation_errors(); ?></div></td></tr>
        <tr class="tr_head" align="center">
	  		<td colspan="2">Tambah Data Pendidikan PTK</td>
		</tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Nama PTK </th>
            <td>
			<select name="nuptk" class="text_box">
				<option value="">-- Pilih --</option>
				<?php
				for($i=0;$i<count($nuptk);$i++)
				{
					echo "<option value='$nuptk[$i]'>$nama_ptk[$i]</option>";
				}
				?>
			</select>
			</td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Tahun</th>
            <td><input  size="60" class="text_box" name="tahun" /></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Jenjang</th>
            <td><input  size="60" class="text_box" name="jenjang" /></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Prodi</th>
            <td><input  size="60" class="text_box" name="prodi" /></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Jurusan</th>
            <td><input  size="60" class="text_box" name="jurusan" /></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Nama Perguruan Tinggi</th>
            <td><input  size="60" class="text_box" name="nama_pt" /></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Kota Perguruan Tinggi</th>
            <td><input  size="60" class="text_box" name="kota_pt" /></td>
        </tr>
         <tr>
            <th></th>
            <td><input type="submit" value="Simpan" class="button"/>&nbsp;<input class="button" type="button" value="Batalkan" onclick="location.href='<?=base_url()?>index.php/data_pendptk';"/></td>
            
        </tr>
    </table>

</form>
