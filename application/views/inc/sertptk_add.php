<link href="<?php echo base_url().'static/css/form2.css'; ?>" rel="stylesheet"/>

<form action="" method="post">
    <table border="0" cellpadding="1" cellspacing="1" id="tbl_layout" align="center" width="50%">
    <tr align="center"><td colspan="2"><div class="error" align="center"><?php echo validation_errors(); ?></div></td></tr>
      <tr class="tr_head" align="center">
	  		<td colspan="2">Tambah Data Sertifikasi PTK</td>
	  </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Nama PTK</th>
            <td><select name="nuptk" class="text_box">
              <option value="">-- Pilih --</option>
              <?php
				for($i=0;$i<count($nuptk);$i++)
				{
					echo "<option value='$nuptk[$i]'>$nama_ptk[$i]</option>";
				}
				?>
            </select></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Tahun</th>
            <td><input size="60" class="text_box" name="tahun"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Nama Sertifikasi</th>
            <td><input size="60" class="text_box" name="nama_sertifikasi"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Jenis Keahlian</th>
            <td><input size="60" class="text_box" name="jns_keahlian"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Lembaga Penerbit</th>
            <td><input size="60" class="text_box" name="lembaga_penerbit"/></td>
        </tr>
        
        <tr>
            <th></th>
            <td><input type="submit" value="Simpan" class="button"/>&nbsp;<input class="button" type="button" value="Batalkan" onclick="location.href='<?=base_url()?>index.php/data_sertptk';"/></td>
        </tr>
    </table>
</form>