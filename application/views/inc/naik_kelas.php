<script>
	$(document).ready(function(){
		$("#update").click(function(){
			var kelas = $("#kelas").val();
			if(kelas=="Naikkan ke kelas"){
				alert("Pilih Kelas Target Terlebih Dahulu")
				exit();
			}
			
			$("#status").html("Process...");
			$("#loading").show();
			$.ajax({
				type: "POST",
				url:"http://localhost/rest_maspa/index.php/data_komunitas/naik",
				dataType: "json",
				data:"id"+id+"kelas="+kelas,
				cache: "false",
				success: function(msg){
					if(msg=="sukses"){
						$("#status").html("update berhasil");
					}else{
						$("#status").html("error");
					}
					$("#loading").hide();
				}
		});
		
	});
});
</script>


<table width="90%" border="0" cellpadding="1" cellspacing="1" id="tbl_data" align="center">
    <thead>
        <tr  class="tr_head" align="center">
            <th width="5%">No</th>
            <th> Kelas Sekarang </th>
			<th> Nama Siswa </th>
			<th width="150px">Aksi</th>
        </tr>
    </thead>
    <tbody>
	
    <!-- ============isi ============ -->
		<?php $i= 1; ?>
		<?php foreach($konten as $m) { ?>
		<tr class='tr_data' align='center'>
			<td ><?php echo $i++; ?></td>
			<td align='center'>&nbsp;<?= $m->no_ruang; ?></td>
			<td align='center'>&nbsp;<?= $m->nama_siswa; ?></td>
			<td align='center'>
				<select id='kelas' name='kelas'> 
				<option value="">-- Pilih --</option>
				<?php
				foreach($kelas as $a){
					echo "<option value='$a->id_kelas'>$a->no_ruang</option>";
				}
				?>	
				</select>
				<input type='hidden' id='id' name='id'> </input>
				<input type='submit' id='update' name='submit'></input>
			<span id="status"></span>
			
			
			</td>			
	  </tr>
		<?php } ?> 
	
    </tbody>
</table>