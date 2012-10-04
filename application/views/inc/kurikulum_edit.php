<link href="<?php echo base_url().'static/css/form2.css'; ?>" rel="stylesheet"/>
<form action="" method="post">
    <table border="0" cellpadding="1" cellspacing="1" id="tbl_layout" align="center" width="50%">
    	<tr class="tr_head" align="center">
	  		<td colspan="2">Ubah  Data Kurikulum</td>
		</tr>
		<tr class="tr_data">
            <th align="left">&nbsp;Kode Mata Pelajaran</th>
            <td><input size="60" class="text_box" name="id_pelajaran" value="<?php echo $m->id_pelajaran ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Mata Pelajaran</th>
            <td><input size="60" class="text_box" name="nama_pelajaran" value="<?php echo $m->nama_pelajaran ?>"/></td>
        </tr>
		<th align="left">&nbsp;Kelas</th>
          <td>
		  <select name="kelas" class="text_box">
              <option value="">-- Pilih --</option>
              <?php
				for($k=0;$k<count($id_kelas);$k++)
				{
					echo "<option value='$no_ruang[$k]'>$no_ruang[$k]</option>";
				}
				?>
            </select>
		  </td>
		</tr>
		        <tr class="tr_data">
            <th align="left">&nbsp;Guru Pengampu</th>
            <td><select name="guru" class="text_box">
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
            <th align="left">&nbsp;KKM</th>
            <td><input size="60" class="text_box" name="kkm" value="<?php echo $m->kkm ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Kelompok</th>
            <td><input size="60" class="text_box" name="kelompok" value="<?php echo $m->kelompok ?>"/></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="Simpan" class="button"/>&nbsp;<input class="button" type="button" value="Batalkan" onclick="location.href='<?=base_url()?>index.php/data_kurikulum';"/></td>
        </tr>
    </table>
</form>
