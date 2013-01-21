
<div> Input Data Nilai praktik </div>
<br>

<table>
<form method="POST" action="<?=base_url()?>index.php/data_nilai_praktik/addData/<?= $kelas;?>">
<?php 
	$i=1;
	foreach($man as $d)	:?>
	<tr>
	<td width="15px"><? echo $i++?></td>
	<td width="100px"><?= $d->siswa; ?></td>
	<td width="250px"><?= $d->nama_siswa; ?></td>
	<td>
	<input type='text' name='nilai[<?= $d->siswa; ?>]' size='4'></td>
	</td>
	</tr>
	<?endforeach?>
	</table>
	
	
	Mata Pelajaran 
	<select name='mapel'>
			<option value=''>Pilih</option>
		<?foreach($mapel as $map) :?>
			<option value="<?= $map->id_pelajaran;?>"><?=$map->nama_pelajaran;?></option>
		<?endforeach?>
	</select>
	Tahun Ajaran 
	<select name='thn_ajaran'>
			<option value=''>Pilih</option>
		<?foreach($thn_ajaran as $aje) :?>
			<option value="<?= $aje->id;?>"><?=$aje->tahun;?></option>
		<?endforeach?>
	</select>
	Semester 
	<select name='semester'>
		<option value=''>Pilih</option>
		<option value='Ganjil'>Ganjil</option>
		<option value='Genap'>Genap</option>
	</select>
	<input type='submit' name='inputan_nilai' value='Simpan'>
</form>
<div><?php echo validation_errors(); ?></div>