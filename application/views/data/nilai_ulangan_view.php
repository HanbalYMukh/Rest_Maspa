
<script type="text/javascript" src="<?php echo base_url();?>asset/js/rekor_nilai.js"></script>
<div id="dialog-form">
	LIHAT DATA SPESIFIK KELAS <? echo "".$nama_kelas->no_ruang; ?>
	<form id="Form" method="GET" action="<?=base_url()?>index.php/data_nilai_ulangan/viewSpesifik" charset='utf-8'>
	<fieldset>
		<label for="mapel">Mata Pelajaran </label>
		<select name='mapel'>
			<option value=''>Pilih</option>
		<?foreach($mapel as $map) :?>
			<option value="<?= $map->id_pelajaran;?>"><?=$map->nama_pelajaran;?></option>
		<?endforeach?>
	</select>
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
		<input type="hidden" name="kelas" id="kelas" value="<? echo"".$kelas; ?>"/>
		<input type="submit" name="submit" value="Lihat Data" />
	</fieldset>
	</form>

</div>
<?php echo anchor('data_nilai_ulangan/addData/'.$kelas, '<button class="add">Tambah data</button>
'); ?>
<div id="header_data" align="center">

		
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="no-style">
		
		<tr>
		  <td align="center" colspan="2"> <span class="seratus">Daftar Nilai Terbaru kelas <? echo "".$nama_kelas->no_ruang; ?></span><span class="datakelas"> kelas <? echo "".$nama_kelas->no_ruang; ?> </span> </td>
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
			<th> 1 </th>
			<th> 2 </th>
			<th> 3 </th>
			<th> 4 </th>
			<th> 5 </th>
			<th class='action'>aksi</th>
        </tr>
    </thead>
    <tbody id="rekor">
	
    <!-- ============isi ============ -->
		<?php $i= 1 ?>
		<?php foreach($fields as $m) : ?>
        
      	<tr class='tr_data' align='center'>
			<td ><?php echo $i++; ?></td>
			<td align='left'>&nbsp;<?= $m->nis; ?></td>
			<td align='left'>&nbsp;<?= $m->nama_siswa; ?></td>
			<td align='left'>&nbsp;<?= $m->nama_pelajaran; ?></td>
			<td align='left'>&nbsp;<?= $m->smester; ?></td>
			<td align='left'>&nbsp;<?= $m->tahun; ?></td>
			<td align='left'>&nbsp;<?= $m->nilai_1; ?></td>
			<td align='left'>&nbsp;<?= $m->nilai_2; ?></td>
			<td align='left'>&nbsp;<?= $m->nilai_3; ?></td>
			<td align='left'>&nbsp;<?= $m->nilai_4; ?></td>
			<td align='left'>&nbsp;<?= $m->nilai_5; ?></td>
	  </tr>
		<?php endforeach; ?> 
		
    </tbody>
	<tbody class='data_spesifik'> </tbody>
</table>
	
	<div id="ajaxStatus"> Disini Loading </div>

