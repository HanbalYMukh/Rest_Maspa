
<script type="text/javascript" >

function cari()
{
	var id=document.getElementById('key').value;
	location.href='<?=base_url()?>index.php/data_siswa/searchData/'+id;
}
</script>

<div id="header_data" align="center">
		
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="no-style">
		<tr>
		  <td align="left" width="60%">&nbsp;<a href="<?=base_url()?>index.php/c_siswa"  title="Kembali ke menu utama" ><img  src="<?=base_url()?>static/images/menu/back.png" align="absmiddle"/><font size="2"> Kembali</font></a></td>
		  <td align="right" width="40%" ><font size="2">Pencarian data </font>
		    <input type="text" size="30" name="key" id="key"  class="text_box" /></td>
		<td width="3%"><input type="button" class="cari"  title="cari" onClick="cari();"/></td>
		</tr>
		<tr>
		  <td align="center" colspan="2">Data Siswa </td>
		</tr>
		</table>
        
	</div>


<!-- grid -->
<div id="data_tabel">
<table class="no-style" width="100%"><td align="left" style="width:75%" ><img  src="<?=base_url()?>static/images/menu/add.png" align="absmiddle"/><?php echo anchor('data_siswa/addData', 'Tambah data'); ?></td>
<td align="right" style="width:75%" ><?php echo "Jumlah Data : ". $jumlah_data;?></td>
</table>
<table class="datatable">    <thead>
        <tr  align="center">
            <th width="2%">No</th>
            
            
			<th colspan="4">Profil</th>
			<th width="150px">Aksi</th>
        </tr>
    </thead>
    <tbody>
	
    <!-- ============isi ============ -->
		<?php $i= 1+$offset ?>
		<?php foreach($fields as $m) : ?>
        
      	<tr class='tr_data' align='center'>
			<td ><?php echo $i++; ?></td>
			<td><img src="<?=base_url()?>/asset/sisresize_thumb/<?echo $m->no_induk; ?>.jpg" alt="<?echo $m->nama_siswa ?>" align="centre"/></td>
			<td align='left'>&nbsp;<?= $m->nama_siswa; ?>
				<br>
							&nbsp;<?= $m->no_induk; ?>
			</td>
			<td>&nbsp;<?= $m->tmplahir_siswa; ?>,&nbsp;<?= $m->tgllahir_siswa; ?></td>
			<td>&nbsp;<?= $m->alamat_siswa; ?></td>
            <td align="center" width="190px">
            <a href="<?=base_url()?>index.php/data_siswa/detailData/<?=$m->id_siswa?>" title="Detail data"><img  src="<?=base_url()?>static/images/menu/view.png" align="absmiddle"/> Detail</a> | <a href="<?=base_url()?>index.php/data_siswa/editData/<?=$m->id_siswa?>" title="Ubah data"><img  src="<?=base_url()?>static/images/menu/update.png" align="absmiddle"/> Ubah</a> | <a href="<?=base_url()?>index.php/data_siswa/deleteData/<?=$m->id_siswa?>" title="Delete data" onClick="return confirm('Data tersebut akan dihapus dari database ?')"><img  src="<?=base_url()?>static/images/menu/del.png" align="absmiddle"/> Hapus</a>
            
	  </tr>
		<?php endforeach; ?> 
	
    </tbody>
</table>

<table class="no-style" width="100%">  <tr>
    <td align="left" style="width:75%" ><?php echo $pagination; ?></td>
    <td align="right" style="width:75%" ><img  src="<?=base_url()?>static/images/menu/next.png" align="absmiddle"/><?php echo anchor('data_siswa/', 'Reload Data'); ?></td>
  </tr>
</table>
</div>