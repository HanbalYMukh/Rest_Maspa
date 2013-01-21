<?$i=1;?>
<?foreach($nilai as $m) :?>
<tr class="dada dada<?= $m->id_uts; ?>">
	<td ><?php echo $i++; ?></td>
	<td align='left'>&nbsp;<?= $m->nis; ?></td>
	<td align='left'>&nbsp;<?= $m->nama_siswa; ?></td>
	<td align='left'>&nbsp;<?= $m->nama_pelajaran; ?></td>
	<td align='left'>&nbsp;<?= $m->smester; ?></td>
	<td align='left'>&nbsp;<?= $m->tahun; ?></td>
	<td><span class="nilai<?= $m->id_uts; ?>">&nbsp;<?= $m->nilai; ?></span><span  class="nilaiEditan<?= $m->id_uts; ?>"></span></td> 
	<td><a class="linkEdit<?= $m->id_uts; ?>" href="javascript:void(0);" onclick="return edit(<?= $m->id_uts; ?>,<?= $m->nilai; ?>)"> Edit</a>
	<a href="javascript:void(0);" onclick="return tanya(<?= $m->id_uts; ?>)"> Hapus</a></td>
</tr>
<?endforeach?>