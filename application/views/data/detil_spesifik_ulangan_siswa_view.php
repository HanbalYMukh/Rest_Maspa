<?$i=1;?>
<?foreach($nilai as $m) :?>
<tr class="dada dada<?= $m->id_ulangan; ?>">
	<td ><?php echo $i++; ?></td>
	<td align='left'>&nbsp;<?= $m->nis; ?></td>
	<td align='left'>&nbsp;<?= $m->nama_siswa; ?></td>
	<td align='left'>&nbsp;<?= $m->nama_pelajaran; ?></td>
	<td align='left'>&nbsp;<?= $m->smester; ?></td>
	<td align='left'>&nbsp;<?= $m->tahun; ?></td>
	<td><span class="nilai1<?= $m->id_ulangan; ?>">&nbsp;<?= $m->nilai_1; ?></span><span  class="nilaiEditan1<?= $m->id_ulangan; ?>"></span>
		<a class="linkEdit1<?= $m->id_ulangan; ?>" href="javascript:void(0);" onclick="return editOnfly(<?= $m->id_ulangan; ?>,1,<?= $m->nilai_1; ?>)"> Edit</a>
		<a href="javascript:void(0);" onclick="return ask(1,<?= $m->id_ulangan; ?>)"> Hapus</a>
	</td>
	<td><span class="nilai2<?= $m->id_ulangan; ?>">&nbsp;<?= $m->nilai_2; ?></span><span  class="nilaiEditan2<?= $m->id_ulangan; ?>"></span>
		<a class="linkEdit2<?= $m->id_ulangan; ?>" href="javascript:void(0);" onclick="return editOnfly(<?= $m->id_ulangan; ?>,2,<?= $m->nilai_2; ?>)"> Edit</a>
		<a href="javascript:void(0);" onclick="return ask(2,<?= $m->id_ulangan; ?>)"> Hapus</a>
	</td>
	<td><span class="nilai3<?= $m->id_ulangan; ?>">&nbsp;<?= $m->nilai_3; ?></span><span  class="nilaiEditan3<?= $m->id_ulangan; ?>"></span>
		<a class="linkEdit3<?= $m->id_ulangan; ?>" href="javascript:void(0);" onclick="return editOnfly(<?= $m->id_ulangan; ?>,3,<?= $m->nilai_3; ?>)"> Edit</a>
		<a href="javascript:void(0);" onclick="return ask(3,<?= $m->id_ulangan; ?>)"> Hapus</a>
	</td>
	<td><span class="nilai4<?= $m->id_ulangan; ?>">&nbsp;<?= $m->nilai_4; ?></span><span  class="nilaiEditan4<?= $m->id_ulangan; ?>"></span>
		<a class="linkEdit4<?= $m->id_ulangan; ?>" href="javascript:void(0);" onclick="return editOnfly(<?= $m->id_ulangan; ?>,4,<?= $m->nilai_4; ?>)"> Edit</a>
		<a href="javascript:void(0);" onclick="return ask(4,<?= $m->id_ulangan; ?>)"> Hapus</a>
	</td>
	<td><span class="nilai5<?= $m->id_ulangan; ?>">&nbsp;<?= $m->nilai_5; ?></span><span  class="nilaiEditan5<?= $m->id_ulangan; ?>"></span>
		<a class="linkEdit5<?= $m->id_ulangan; ?>" href="javascript:void(0);" onclick="return editOnfly(<?= $m->id_ulangan; ?>,5,<?= $m->nilai_5; ?>)"> Edit</a>
		<a href="javascript:void(0);" onclick="return ask(5,<?= $m->id_ulangan; ?>)"> Hapus</a>
	</td>	
	<td><a href="javascript:void(0);" onclick="return tanya(<?= $m->id_ulangan; ?>)"> Hapus</a></td>
</tr>
<?endforeach?>