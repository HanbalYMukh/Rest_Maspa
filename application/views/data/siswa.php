<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Data Siswa</title>
<link href="<?php echo base_url().'static/css/data.css'; ?>" rel="stylesheet"/>
<script type="text/javascript" >
function CA()
{
	var cIdx = 'id_siswa';
	//alert(counterIdx);
	var cControl = 'control';		
	for (var i=0;i < document.sisw.elements.length;i++)
	{
		var e = document.sisw.elements[i];
		if ((e.id == cIdx) && (e.id != cControl) && (e.type=='checkbox'))
		{
			e.checked = document.getElementById(cControl).checked;
		}
	}
}
function edit()
{
	document.getElementById('tipe').value="edit";
	document.getElementById('sisw').submit();
}
function hapus()
{
	var confir=confirm('Anda yakin akan menghapus data ini ?');
	
	if(confir==true)
	{
		document.getElementById('tipe').value="hapus";
		document.getElementById('sisw').submit();
	}else{
		document.getElementById('tipe').value="";
	}
}
function cari()
{
	var id=document.getElementById('key').value;
	location.href='<?=base_url()?>index.php/siswa/search/'+id;
}
</script>
</head>
<body>
<form name="sisw" id="sisw" action="<?=base_url()?>index.php/siswa/actionSiswa" method="post">
<input type="hidden" name="tipe" id="tipe" />
<div id="conten">
	<div id="header_data" align="center">
		<table width="100%" border="0" cellpadding="0" cellspacing="0" id="tbl_header">
		<tr>
		<td align="left" width="75%"><div id="menuUtama">
		<a href="<?=base_url()?>index.php/siswa/newSiswa" title="Tambah data baru"><img  src="<?=base_url()?>static/images/menu/add.png" align="absmiddle"/> Tambah</a>
		<a href="javascript:edit();" title="Edit data yang telah di pilih"><img  src="<?=base_url()?>static/images/menu/edit.png" align="absmiddle"/> Edit</a>
		<a href="javascript:hapus();" title="Hapus data yang telah di pilih"><input type="image"  src="<?=base_url()?>static/images/menu/delete.png" align="absmiddle"/> Hapus</a></div></td>
		<td align="right" width="20%"><input type="text" size="30" name="key" id="key"  class="text_box" /></td>
		<td width="3%"><input type="button" class="cari"  title="cari" onclick="cari();"/></td>
		</tr>
		<tr><td align="center" colspan="2">Data Siswa</td></tr>
		</table>
	</div>
	<div id="data_tabel">
	<p align="right" style="width:75%" class="info_text"># Total Record <b><?=$jumlah_data?></b></p>
	<table width="50%" border="0" cellpadding="1" cellspacing="1" id="tbl_data" align="center">
	<tr class="tr_head" align="center"><td width="5%"><input type="checkbox" id="control" onclick="CA(0)" /></td>
	<td width="5%">No</td>
	<td align="left">&nbsp;N I S</td>
	<td align="left">&nbsp;Nama Siswa</td></tr>
	<?php 
		for($i=0;$i<count($id_siswa);$i++)
		{
			echo "<tr class='tr_data' align='center'>
			<td><input type='checkbox' id='id_siswa' name='id_siswa[]' value='$id_siswa[$i]' ></td>
			<td>".($i+$offset+1)."</td></td>
			<td align='left'>&nbsp;$no_induk[$i]</td>
			<td align='left'>&nbsp;$nama_siswa[$i]</td></tr>";
		}
		if($jumlah_data=="0")
		{
			echo "<tr class='tr_data'><td colspan='4' align='center'><img src='".base_url()."static/images/sysimages/info_icon.png' align='absmiddle' class='info_icon' > Data tidak ada dalam database...!!</td></tr>";
		}
	?>
	</table>
	<center><?php echo $pagination; ?></center>
	</div>
</div>
</form>
</body>
</html>