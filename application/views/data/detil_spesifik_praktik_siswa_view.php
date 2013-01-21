<?$i=1;?>
<?foreach($nilai as $m) :?>
<tr class="dada dada<?= $m->id_pengamatan; ?>">
	<td ><?php echo $i++; ?></td>
	<td align='left'>&nbsp;<?= $m->nis; ?></td>
	<td align='left'>&nbsp;<?= $m->nama_siswa; ?></td>
	<td align='left'>&nbsp;<?= $m->nama_pelajaran; ?></td>
	<td align='left'>&nbsp;<?= $m->smester; ?></td>
	<td align='left'>&nbsp;<?= $m->tahun; ?></td>
	<td><span class="nilai<?= $m->id_pengamatan; ?>">&nbsp;<?= $m->nilai; ?></span><span  class="nilaiEditan<?= $m->id_pengamatan; ?>"></span></td> 
	<td><a class="linkEdit<?= $m->id_pengamatan; ?>" href="javascript:void(0);" onclick="return edit(<?= $m->id_pengamatan; ?>,<?= $m->nilai; ?>)"> Edit</a>
	<a href="javascript:void(0);" onclick="return tanya(<?= $m->id_pengamatan; ?>)"> Hapus</a></td>
</tr>
<?endforeach?>