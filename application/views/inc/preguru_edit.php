<script>
	$(function() {
		$( "#datepicker" ).datepicker({ dateFormat: "yy-mm-dd" });
	});
</script>
<form action="" method="post">
    <table border="0" cellpadding="1" cellspacing="1" id="tbl_layout" align="center" width="50%">
    	<tr align="center"><td colspan="2"><div class="error" align="center"><?php echo validation_errors(); ?></div></td></tr>
        <tr class="tr_head" align="center">
	  		<td colspan="2">Tambah Data Absensi Guru </td>
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
		<th align="left">&nbsp;Tanggal: </th>
		<td><input type="text" name="tanggal"id="datepicker"/>
		</td>
		</tr>
        <tr class="tr_data">
          <th align="left">&nbsp;Mata Pelajaran </th>
          <td>
		  <select name="id_pelajaran" class="text_box">
              <option value="">-- Pilih --</option>
              <?php
				for($p=0;$p<count($id_pelajaran);$p++)
				{
					echo "<option value='$id_pelajaran[$p]'>$nama_pelajaran[$p]</option>";
				}
				?>
            </select>
		  </td>
		</tr>
		<tr class="tr_data">
          <th align="left">&nbsp;Semester ke </th>
          <td>
			<select name="semester" class="text_box">
              <option value="">-- Pilih --</option>
			  <option value="1">Satu</option>
			  <option value="2">Dua</option>
			</select>
		  </td>
		 </tr>
		<tr class="tr_data">
          <th align="left">&nbsp;Tahun ajaran </th>
          <td>
		  <select name="tahun_ajar" class="text_box">
              <option value="">-- Pilih --</option>
              <?php
				for($q=0;$q<count($id);$q++)
				{
					echo "<option value='$id[$q]'>$tahun[$q]</option>";
				}
				?>
            </select>
		  </td>
		</tr>
		<tr class="tr_data">
		<th align="left">&nbsp;Ruang Kelas</th>
          <td>
		  <select name="no_ruang" class="text_box">
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
		<th align="left" valign="top">&nbsp;Pertemuan Ke</th>
		<td>
			<input type="text" name="pertemuan" cols="45" rows="3" />
		</td>
		</tr>
		  <tr class="tr_data">
		<th align="left" valign="top">&nbsp;Materi</th>
		<td>
			<textarea name="materi" cols="45" rows="3" class="textarea"></textarea>
		</td>
		</tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Jam Masuk</th>
            <td>
			<select name="m_jam">
          	<option value=''> jj </option>
          	<?php 
          	for($i=6;$i<=22;$i++)
          	{
          	    $str = $this->fungsi->complete($i,2);
          	    echo "<option value=".$str." ".$this->validation->set_select('m_jam',$str).">$str</option>";
          	}
          	?>
          	</select>
			<select name="m_menit">
          	<option value=''> mm </option>
          	<?php 
          	for($i=0;$i<=59;$i=$i+5)
          	{
          	    $str = $this->fungsi->complete($i,2);
          	    echo "<option value=".$str." ".$this->validation->set_select('m_menit',$str).">$str</option>";
          	}
          	?>
          	</select>
			</td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Jam Keluar </th>
            <td><!--input size="60" class="text_box" name="jam_keluar"/-->
              <select name="p_jam">
                <option value=''> jj </option>
                <?php 
          	for($i=6;$i<=22;$i++)
          	{
          	    $str = $this->fungsi->complete($i,2);
          	    echo "<option value=".$str." ".$this->validation->set_select('p_jam',$str).">$str</option>";
          	}
          	?>
              </select>
              <select name="p_menit">
                <option value=''> mm </option>
                <?php 
          	for($i=0;$i<=59;$i=$i+5)
          	{
          	    $str = $this->fungsi->complete($i,2);
          	    echo "<option value=".$str." ".$this->validation->set_select('p_menit',$str).">$str</option>";
          	}
          	?>
              </select></td>
        </tr>
		<tr class="tr_data">
		<th align="left" valign="top">&nbsp;Keterangan</th>
		<td>
			<textarea name="keterangan" cols="45" rows="3" class="textarea"></textarea>
		</td>
		</tr>
        <tr>
            <th></th>
            <td><input type="submit" value="Simpan" class="button"/>&nbsp;<input class="button" type="button" value="Batalkan" onclick="location.href='<?=base_url()?>index.php/data_preguru';"/></td>
        </tr>
    </table>
</form>
