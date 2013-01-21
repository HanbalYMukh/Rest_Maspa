$(document).ready(function(){
		$('.data_spesifik').hide();
		$('.action').hide();
		$('#ajaxStatus').hide();
		$('.datakelas').hide();
		$('#ajaxStatus')
				.ajaxStart(function() {	
					$('.dada').remove();
					$('#rekor').hide();
					$(this).show();
				})
				.ajaxStop(function() {
					$(this).hide();
				});
		$('#Form').submit(function(e){
			e.preventDefault();
			var dataString = $('#Form').serialize();
			var form_action = $(this).attr("action");  
			var form_method = $(this).attr("method");
			$.ajax({
				type: form_method,
				url: form_action,
				dataType: "html",
				data: dataString,
				success: function(data){
						$('.seratus').hide();
						$('.datakelas').show();
						$('.datakelas').append('Daftar Nilai');			
						$('.action').show();
						$('.data_spesifik').show();
						$('.data_spesifik').html(data);
				}
			});
		
			return false;
		});
});