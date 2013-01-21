<div id="header_data" align="center">
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="no-style">
		
		<tr>
		  <td align="center" colspan="2">Data Tahun Ajaran</td>
		</tr>
		</table>
	</div>


<!-- grid -->
<div id="data_tabel">
<table class="no-style" width="100%"><td align="left" style="width:75%" ><img  src="<?=base_url()?>static/images/menu/add.png" align="absmiddle"/><?php echo anchor('tahun_ajaran/addData', 'Tambah data'); ?></td>
<td align="right" style="width:75%" >Jumlah Data : <b><?=$jumlah_data?></b></td>
</table>
<table class="datatable">    <thead>
        <tr  class="tr_head" align="center">
            <th width="2%">No</th>
            <th>Tahun Ajaran</th>
			<th width="150px">Aksi</th>
        </tr>
    </thead>
    <tbody>
	
    <!-- ============isi ============ -->
		<?php $i= 1+$offset ?>
		<?php foreach($fields as $m) : ?>
		<tr class='tr_data' align='center'>
			<td ><?php echo $i++; ?></td>
			<td align='center'>&nbsp;<?=$m->tahun; ?></td>
		  <td align="center" width="190px"><a href="<?=base_url()?>index.php/tahun_ajaran/editData/<?=$m->id?>" title="Ubah data"><img  src="<?=base_url()?>static/images/menu/update.png" align="absmiddle"/> Ubah</a> | <a href="<?=base_url()?>index.php/tahun_ajaran/deleteData/<?=$m->id?>" title="Delete data" onClick="return confirm('Data tersebut akan dihapus dari database ?')"><img  src="<?=base_url()?>static/images/menu/del.png" align="absmiddle"/> Hapus</a>			
	  </tr>
		<?php endforeach; ?> 
	
    </tbody>
</table>

<table class="datatable">  <tr>
    <td align="left" style="width:75%" ><?php echo $pagination; ?></td>
    <td align="right" style="width:75%" ><img  src="<?=base_url()?>static/images/menu/next.png" align="absmiddle"/><?php echo anchor('/', 'Reload Data'); ?></td>
  </tr>
</table>

</div>