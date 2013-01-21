<link href="<?php echo base_url().'static/css/data.css'; ?>" rel="stylesheet"/>
<script type="text/javascript" >

function cari()
{
	var id=document.getElementById('key').value;
	location.href='<?=base_url()?>index.php/data_pelptk/searchData/'+id;
}
</script>
<div id="header_data" align="center">
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="no-style">
		<tr>
		  <td align="left" width="60%">&nbsp;<a href="<?=base_url()?>index.php/c_ptk"  title="Kembali ke menu utama" ><img  src="<?=base_url()?>static/images/menu/back.png" align="absmiddle"/><font size="2"> Kembali</font></a></td>
		  <td align="right" width="40%" ><font size="2">Nama PTK </font>
	        <input type="text" size="30" name="key" id="key"  class="text_box" /></td>
		<td width="3%"><input type="button" class="cari"  title="cari" onClick="cari();"/></td>
		</tr>
		<tr>
		  <td align="center" colspan="2">Data Pelatihan PTK</td>
		</tr>
		</table>
	</div>


<!-- grid -->
<div id="data_tabel">
<table class="no-style full"><td align="left" style="width:75%" ><img  src="<?=base_url()?>static/images/menu/add.png" align="absmiddle"/><?php echo anchor('data_pelptk/addData', 'Tambah data'); ?></td>
<td align="right" style="width:75%" >Jumlah Data : <b><?=$jumlah_data?></b></td>
</table>
<table class="datatable">    <thead>
        <tr  class="tr_head" align="center">
            <th width="2%">No</th>
			<th>Nama PTK</th>
            <th>Nama Pelatihan</th>
            <th>Jenis Pelatihan</th>
			<th>Tahun</th>
            <th width="150px">Aksi</th>
        </tr>
    </thead>
    <tbody>
	
    <!-- ============isi ============ -->
		<?php $i= 1+$offset ?>
		<?php foreach($fields as $m) : ?>
		<tr class='tr_data' align='center'>
			<td ><?php echo $i++; ?></td>
			<td align='left'>&nbsp;<?= $m->nama_ptk; ?></td>
			<td align='left'>&nbsp;<?= $m->nama_pelatihan; ?></td>
			<td align='left'>&nbsp;<?= $m->jns_pelatihan; ?></td>
            <td align='left'>&nbsp;<?= $m->tahun; ?></td>
			<td align="center" width="190px">
            <a href="<?=base_url()?>index.php/data_pelptk/detailData/<?=$m->id_pelatihan?>" title="Detail data"><img  src="<?=base_url()?>static/images/menu/view.png" align="absmiddle"/> Detail</a> | <a href="<?=base_url()?>index.php/data_pelptk/deleteData/<?=$m->id_pelatihan?>" title="Delete data" onClick="return confirm('Data tersebut akan dihapus dari database ?')"><img  src="<?=base_url()?>static/images/menu/del.png" align="absmiddle"/> Hapus</a>	  
	  </tr>
		<?php endforeach; ?> 
	
    </tbody>
</table>
<table class="no-style full">  <tr>
    <td align="left" style="width:75%" ><?php echo $pagination; ?></td>
    <td align="right" style="width:75%" ><img  src="<?=base_url()?>static/images/menu/next.png" align="absmiddle"/><?php echo anchor('data_pelptk/', 'Reload Data'); ?></td>
  </tr>
</table>
</div>