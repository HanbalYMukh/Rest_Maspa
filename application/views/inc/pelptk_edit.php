<link href="<?php echo base_url().'static/css/form2.css'; ?>" rel="stylesheet"/>
<form action="" method="post">
    <table border="0" cellpadding="1" cellspacing="1" id="tbl_layout" align="center" width="50%">
    	<tr class="tr_head" align="center">
	  		<td colspan="2">Ubah Data Pelatihan PTK</td>
		</tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Nama PTK</th>
            <td><input size="60" class="text_box" name="id_ptk" value="<?php echo $m->id_ptk ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Tahun</th>
            <td><input size="60" class="text_box" name="tahun" value="<?php echo $m->tahun ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Nama Pelatihan</th>
            <td><input size="60" class="text_box" name="nama_pelatihan" value="<?php echo $m->nama_pelatihan ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Jenis Pelatihan</th>
            <td><input size="60" class="text_box" name="jns_pelatihan" value="<?php echo $m->jns_pelatihan ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Nama Lembaga</th>
            <td><input size="60" class="text_box" name="nama_lembaga" value="<?php echo $m->nama_lembaga ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Alamat Lembaga</th>
            <td><input size="60" class="text_box" name="alamat_lembaga" value="<?php echo $m->alamat_lembaga ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Kota Lembaga</th>
            <td><input size="60" class="text_box" name="kota_lembaga" value="<?php echo $m->kota_lembaga ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Kode Pos</th>
            <td><input size="60" class="text_box" name="kodepos_lembaga" value="<?php echo $m->kodepos_lembaga ?>"/></td>
        </tr>
            <th></th>
            <td><input type="submit" value="Simpan" class="button"/>&nbsp;<input class="button" type="button" value="Batalkan" onclick="location.href='<?=base_url()?>index.php/data_pelptk';"/></td>
            
        </tr>
    </table>

</form>
