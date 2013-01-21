<script src="<?php echo base_url();?>asset/js/jquery-1.8.0.min.js"></script>



<table width="90%" border="0" cellpadding="1" cellspacing="1" id="tbl_data" align="center">
    <thead>
        <tr  class="tr_head" align="center">
            <th width="5%">No</th>
            <th> Kelas Sekarang </th>
			<th> Nama Siswa </th>
			<th width="150px">Aksi</th>
        </tr>
    </thead>
    <tbody id="data">
	
    <!-- ============isi ============ -->
		<?php $i= 1; ?>
		<?php foreach($konten as $m) { ?>
		
		<script>
	$(document).ready(function(){
		
		$('#Form<?= $m->id; ?>').submit(function(e){
			e.preventDefault();
			var dataString = $('#Form<?= $m->id; ?>').serialize();
			var form_action = $(this).attr("action");  
			var form_method = $(this).attr("method");
			$('#status<?= $m->id; ?>').show('loading');
			$.ajax({
				type: form_method,
				url: form_action,
				dataType: "json",
				data: dataString,
				cache: false,
				success: function(data){
					 $('#update<?= $m->id; ?>').fadeOut('slow');                 
                     $('#kelas<?= $m->id; ?>').fadeOut('slow');
					 $('#ruang<?= $m->id; ?>').fadeOut('slow');
					 
					$('#status<?= $m->id; ?>').fadeIn('slow');
					$('#ruangnew<?= $m->id; ?>').fadeIn('slow');
					
					$('#ruangnew<?= $m->id; ?>').html(""+data.no_ruang);
					$('#status<?= $m->id; ?>').html("Siswa Berhasil Di Naikkan ke Kelas "+data.no_ruang);
				}
			});
		
			return false;
		});
});
</script>
		
		<tr class='tr_data' align='center'>
			<td ><?php echo $i++; ?></td>
			<td align='center'><span id='ruang<?= $m->id; ?>'>&nbsp;<?= $m->no_ruang; ?></span><span id='ruangnew<?= $m->id; ?>'></span></td>
			<td id='siswa<?= $m->id; ?>' align='center'>&nbsp;<?= $m->nama_siswa; ?></td>
			<td align='center'>
			<form id="Form<?= $m->id; ?>" method="POST" action="<?php echo base_url();?>index.php/data_komunitas/naik" charset='utf-8'>
				<select id='kelas<?= $m->id; ?>' name='kelas'> 
				<option value="">Naikkan ke kelas</option>
				<?php
				foreach($kelas as $a){
					echo "<option value='$a->id_kelas'>$a->no_ruang</option>";
				}
				?>	
				</select>
				<input type='hidden' id='id' name='id' value="<?= $m->id; ?>"> </input>
				<input type='hidden' id='kelasnew' name='kelasnew' value="<?= $m->no_ruang; ?>"> </input>
				<input type='submit' id='update<?= $m->id; ?>' name='submit' value='Naik'></input>
				</form>
			<span id="status<?= $m->id; ?>"></span>
			
			
			</td>			
	  </tr>
		<?php } ?> 
    </tbody>
</table>