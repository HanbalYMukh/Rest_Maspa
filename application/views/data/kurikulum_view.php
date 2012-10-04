<link href="<?php echo base_url().'static/css/data.css'; ?>" rel="stylesheet"/>

<script type="text/javascript" >

function cari()
{
	var id=document.getElementById('key').value;
	location.href='<?=base_url()?>index.php/data_kurikulum/searchData/'+id;
}
</script>

<div id="conten">

<div id="header_data" align="center">
		<table width="100%" border="0" cellpadding="0" cellspacing="0" id="tbl_header">
		<tr>
		  <td align="left" width="60%">&nbsp;<a href="<?=base_url()?>index.php/c_kurikulum"  title="Kembali ke menu utama" ><img  src="<?=base_url()?>static/images/menu/back.png" align="absmiddle"/><font size="2"> Kembali</font></a></td>
		  <td align="right" width="40%" ><font size="2">Pencarian data </font>
		    <input type="text" size="30" name="key" id="key"  class="text_box" /></td>
		<td width="3%"><input type="button" class="cari"  title="cari" onClick="cari();"/></td>
		</tr>
		<tr>
		  <td align="center" colspan="2">Data Kurikulum</td>
		</tr>
		</table>
	</div>


<!-- grid -->
<div id="data_tabel">
<table width="90%" border="0" cellpadding="1" cellspacing="1" id="tbl_data" align="center">
<td align="left" style="width:75%" ><img  src="<?=base_url()?>static/images/menu/add.png" align="absmiddle"/><?php echo anchor('data_kurikulum/addData', 'Tambah data'); ?></td>
<td align="right" style="width:75%" >Jumlah Data : <b><?=$jumlah_data?></b></td>
</table>
<table width="90%" border="0" cellpadding="1" cellspacing="1" id="tbl_data" align="center">
    <thead>
        <tr  class="tr_head" align="center">
            <th width="5%">No</th>
            <th>Kode</th>
			<th>Mata Pelajaran</th>
			<th>Kelas</th>
			<th>Guru Pengampu</th>
			<th>KKM</th>
            <th>Kelompok</th>
            <th width="150px">Aksi</th>
        </tr>
    </thead>
    <tbody>
	
    <!-- ============isi ============ -->
		<?php $i= 1+$offset ?>
		<?php foreach($fields as $m) : ?>
		<tr class='tr_data' align='center'>
			<td ><?php echo $i++; ?></td>
			<td align='left'>&nbsp;<?= $m->id_pelajaran; ?></td>
			<td align='left'>&nbsp;<?= $m->nama_pelajaran; ?></td>
			<td align='left'>&nbsp;<?= $m->kelas; ?></td>
			<td align='left'>&nbsp;<?= $m->nama_ptk; ?></td>
			<td align='left'>&nbsp;<?= $m->kkm; ?></td>
			<td align='left'>&nbsp;<?= $m->kelompok; ?></td>
		  <td align="center" width="190px"><a href="<?=base_url()?>index.php/data_kurikulum/editData/<?=$m->id_pelajaran?>" title="Ubah data"><img  src="<?=base_url()?>static/images/menu/update.png" align="absmiddle"/> Ubah</a> | <a href="<?=base_url()?>index.php/data_kurikulum/deleteData/<?=$m->id_pelajaran?>" title="Delete data" onClick="return confirm('Data tersebut akan dihapus dari database ?')"><img  src="<?=base_url()?>static/images/menu/del.png" align="absmiddle"/> Hapus</a>			
	  </tr>
		<?php endforeach; ?> 
	
    </tbody>
</table>
<table width="90%" border="0" cellpadding="1" cellspacing="1" id="tbl_data" align="center">
  <tr>
    <td align="left" style="width:75%" ><?php echo $pagination; ?></td>
    <td align="right" style="width:75%" ><img  src="<?=base_url()?>static/images/menu/next.png" align="absmiddle"/><?php echo anchor('data_kurikulum/', 'Reload Data'); ?></td>
  </tr>
</table>


</div>