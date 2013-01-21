<script
src="<?php echo base_url();?>asset/js/jquery.ui.core.js">
</script>
<script
src="<?php echo base_url();?>asset/js/jquery.ui.widget.js">
</script>
<script
src="<?php echo base_url();?>asset/js/jquery.ui.position.js">
</script>
<script
src="<?php echo base_url();?>asset/js/jquery.ui.dialog.js">
</script>
<script language="JavaScript" src="<?php echo base_url();?>asset/js/ajaxnilai.js"></script>

<script language="JavaScript">
function tanya(id){
		if(confirm('Hapus Data Terpilih?')){
			load_no_loading("<?=base_url()?>index.php/data_nilai_uts/hapus/"+id,id)
			return true;
		}else{
			return false;
		}
	}
</script>

<div id="dialog-form">
	LIHAT DATA SPESIFIK SISWA
	<form id="Form" method="GET" action="<?=base_url()?>index.php/data_nilai_uts/viewDetail" charset='utf-8'>
	<fieldset>
		<label for="thn_ajaran">Tahun Ajaran</label>
		<select name='thn_ajaran'>
			<option value=''>Pilih</option>
		<?foreach($thn_ajaran as $aje) :?>
			<option value="<?= $aje->id;?>"><?=$aje->tahun;?></option>
		<?endforeach?>
	</select>
		<label for="semester">Semester</label>
		<select name='semester'>
		<option value=''>Pilih</option>
		<option value='Ganjil'>Ganjil</option>
		<option value='Genap'>Genap</option>
	</select>
		<input type="hidden" name="nis" id="nis" value="<? echo $nis; ?>"/>
		<input type="submit" name="submit" value="Lihat Data" />
	</fieldset>
	</form>

</div>

<div id="biodata">
	<table> 
	<tr>
	</tr>
	</table>
 </div>

<div id="header_data" align="center">

		
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="no-style">
		
		<tr>
		 
		</tr>
		</table>
        
	</div>
<br>

<!-- grid -->

	
<table class="datatable">    <thead>
        <tr  align="center">
            <th width="2%">No</th>
            <th width="9%">No. Induk </th>
            <th width="25%">Nama Siswa </th>
			<th width="18%">Mata Pelajaran</th>
			<th>Semester</th>
			<th width="14%">Tahun Ajaran </th>
			<th> Nilai </th>
			<th class='action'>aksi</th>
        </tr>
    </thead>
    <tbody id="rekor">
	
    <!-- ============isi ============ -->
		<?php $i= 1 ?>
		<?php foreach($field as $m) : ?>
        
      	<tr class='tr_data' align='center'>
			<td ><?php echo $i++; ?></td>
			<td align='left'>&nbsp;<?= $m->nis; ?></td>
			<td align='left'>&nbsp;<?= $m->nama_siswa; ?></td>
			<td align='left'>&nbsp;<?= $m->nama_pelajaran; ?></td>
			<td align='left'>&nbsp;<?= $m->smester; ?></td>
			<td align='left'>&nbsp;<?= $m->tahun; ?></td>
			<td align='left'>&nbsp;<?= $m->nilai; ?></td>
	  </tr>
		<?php endforeach; ?> 
		
    </tbody>
	<tbody class='data_spesifik'> </tbody>
</table>
<div id="ajaxStatus"> Disini Loading </div>

<div id="Dialog">
 <form id="formEdit" method="POST" action="<?=base_url()?>index.php/data_nilai_uts/edit" charset="utf-8">
 Ubah Nilai Berikut 
	<input  id="nilai" type="text" name="nilai" value="" size="3" maxlength="3"></input>
	<input  id="id" type="hidden" name="id" value=""></input>
	<input type="submit" name="submit" value="Update" />
	</form>
</div>