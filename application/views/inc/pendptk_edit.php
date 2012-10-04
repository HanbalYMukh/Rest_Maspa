<link href="<?php echo base_url().'static/css/form2.css'; ?>" rel="stylesheet"/>
<form action="" method="post">
    <table border="0" cellpadding="1" cellspacing="1" id="tbl_layout" align="center" width="50%">
    	<tr class="tr_head" align="center">
	  		<td colspan="2">Ubah Data Pendidikan PTK</td>
		</tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Nama PTK </th>
            <td><input  size="60" class="text_box" name="nuptk" value="<?php echo $m->nuptk ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Tahun</th>
            <td><input  size="60" class="text_box" name="tahun" value="<?php echo $m->tahun ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Jenjang</th>
            <td><input  size="60" class="text_box" name="jenjang" value="<?php echo $m->jenjang ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Prodi</th>
            <td><input  size="60" class="text_box" name="prodi" value="<?php echo $m->prodi ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Jurusan</th>
            <td><input  size="60" class="text_box" name="jurusan" value="<?php echo $m->jurusan ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Nama Perguruan Tinggi</th>
            <td><input  size="60" class="text_box" name="nama_pt" value="<?php echo $m->nama_pt ?>"/></td>
        </tr>
        <tr class="tr_data">
            <th align="left">&nbsp;Kota Perguruan Tinggi</th>
            <td><input  size="60" class="text_box" name="kota_pt" value="<?php echo $m->kota_pt ?>"/></td>
        </tr>
         <tr>
            <th></th>
            <td><input type="submit" value="Simpan" class="button"/>&nbsp;<input class="button" type="button" value="Batalkan" onclick="location.href='<?=base_url()?>index.php/data_pendptk';"/></td>
            
        </tr>
    </table>

</form>
