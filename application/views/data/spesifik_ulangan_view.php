<?
$no = 1;
?>
<?foreach($detail as $aje) :?>
<tr class="dada">
	<td>&nbsp;<? echo $no++;?></td>
	<td>&nbsp;<?= $aje->nis; ?></td>
	<td>&nbsp;<?= $aje->nama_siswa; ?></td>
	<td>&nbsp;<?= $aje->nama_pelajaran; ?></td>
	<td>&nbsp;<?= $aje->smester; ?></td>
	<td>&nbsp;<?= $aje->tahun; ?></td>
	<td>&nbsp;<?= $aje->nilai_1; ?></td>
	<td>&nbsp;<?= $aje->nilai_2; ?></td>
	<td>&nbsp;<?= $aje->nilai_3; ?></td>
	<td>&nbsp;<?= $aje->nilai_4; ?></td>
	<td>&nbsp;<?= $aje->nilai_5; ?></td>
	<td><a href="<?=base_url()?>index.php/data_nilai_ulangan/detailData/<?= $aje->nis; ?>" > Detil</a></td>
</tr>
<?php endforeach; ?> 