
<script type="text/javascript" >

function cari()
{
	var id=document.getElementById('key').value;
	location.href='<?=base_url()?>index.php/data_siswa/searchData/'+id;
}
</script>

<div id="header_data" align="center">
		
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="no-style">
		<tr>
		  
		  <td align="right" width="40%" ><font size="2">Pencarian data </font>
		    <input type="text" size="30" name="key" id="key"  class="text_box" /></td>
		<td width="3%"><input type="button" class="cari"  title="cari" onClick="cari();"/></td>
		</tr>
		<tr>
		  <td align="center" colspan="2"> Ini Di ubah lagi dengan Rekondisi Data yang barusaja di inputkan </td>
		</tr>
		</table>
        
	</div>


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
		<?php foreach($hasil as $m) : ?>
        
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

</table>
