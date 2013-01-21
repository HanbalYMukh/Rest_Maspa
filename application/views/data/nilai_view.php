
<?php foreach($kelas as $m) : ?>

<div id="kelas-box">
	<div class="inside-box">
 <p>Data Nilai Kelas</p>
 <h3><?= $m->no_ruang?></h3>
	<ul class="dropdown">
		<li><a href="#"> # Pilih Menu  </a>
		<ul>
		
		<li><a href="<?=base_url()?>index.php/data_nilai_ulangan/index/<?= $m->id_kelas?>" >Data Nilai Ulangan </a> </li>

		<li><a href="<?=base_url()?>index.php/data_nilai_tugas/index/<?= $m->id_kelas?>" >Data Nilai Tugas </a> </li>

		<li><a href="<?=base_url()?>index.php/data_nilai_praktik/index/<?= $m->id_kelas?>" >Data Nilai Praktik </a> </li>
		
		<li><a href="<?=base_url()?>index.php/data_nilai_uas/index/<?= $m->id_kelas?>" >Data Nilai UAS </a> </li>

		<li><a href="<?=base_url()?>index.php/data_nilai_uts/index/<?= $m->id_kelas?>" >Data Nilai UTS </a> </li>

		<li><a href="<?=base_url()?>index.php/data_nilai_ekstrakulikuler/index/<?= $m->id_kelas?>" >Data Nilai Ekstrakulikuler </a> </li>

		<li><a href="<?=base_url()?>index.php/data_nilai_kegiatan/index/<?= $m->id_kelas?>" >Data Nilai Kegiatan </a> </li>
	</ul>
	</li>
	</ul>
	</div>
</div>
<?endforeach?>