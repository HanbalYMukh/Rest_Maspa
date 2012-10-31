<table width="90%" border="0" cellpadding="1" cellspacing="1" id="tbl_data" align="center">
    <thead>
        <tr  class="tr_head" align="center">
            <th width="5%">No</th>
            <th> Kelas </th>
			<th> Jumlah Siswa </th>
			<th width="150px">Aksi</th>
        </tr>
    </thead>
    <tbody>
	
    <!-- ============isi ============ -->
		<?php $i= 1; ?>
		<?php foreach($fields as $m) : ?>
		<tr class='tr_data' align='center'>
			<td ><?php echo $i++; ?></td>
			<td align='center'>&nbsp;<?= $m->no_ruang; ?></td>
			<td align='center'>&nbsp;<?= $m->jml; ?></td>
		  <td align="center" width="190px"><a href="<?=base_url()?>index.php/data_komunitas/naikKelas/<?=$m->kelas?>" title="Ubah data"><img  src="<?=base_url()?>static/images/menu/update.png" align="absmiddle"/> Ubah</a> </td>			
	  </tr>
		<?php endforeach; ?> 
	
    </tbody>
</table>