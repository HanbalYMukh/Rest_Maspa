$(document).ready(function(){
		$('.data_spesifik').hide();
		$('.action').hide();
		$('#ajaxStatus').hide();
		$('#Dialog').hide();
		$('#ajaxStatus')
				.ajaxStart(function() {	
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
						$('.dada').remove();
						$('#rekor').hide();
						$('.action').show();
						$('.data_spesifik').show();
						$('.data_spesifik').html(data);
					
				}
			});
		
			return false;
		});
});

function edit(id,nilai){
$(document).ready(function(){
	$('#nilai').attr('value',nilai);
	$('#id').attr('value',id);
	$('#formEdit').submit(function(e){
				e.preventDefault();
	var string = $('#formEdit').serialize();  
	var method = $(this).attr("method");
	var action = $(this).attr("action");
	
	$.ajax({
				type: method,
				url: action,
				dataType: "json",
				data: string,
				success: function(data){
					$("#Dialog").dialog('close');
					$.each(data,function(key,memberData){
						var itm = data[key];
					$(".nilai"+id).remove();
					$(".nilaiEditan"+id).html(+itm.nilai);
					$(".nilaiEditan"+id).css('color','#00ffff');
					$(".linkEdit"+id).remove();
					})
				}
			})
					return false;
		});
	var opt = {
			modal: true,
			show: true,
			hide: true
			};
	$("#Dialog").dialog(opt);
	});
}

function editOnfly(id,jenis,nilai){
$(document).ready(function(){
	$('#nilai').attr('value',nilai);
	$('#id').attr('value',id);
	$('#jenis').attr('value',jenis);
	$('#formEdit').submit(function(e){
				e.preventDefault();
	var string = $('#formEdit').serialize();  
	var method = $(this).attr("method");
	var action = $(this).attr("action");
	
	$.ajax({
				type: method,
				url: action,
				dataType: "json",
				data: string,
				success: function(data){
					$("#Dialog").dialog('close');
					$(".nilai"+jenis+id).remove();
					$(".nilaiEditan"+jenis+id).html(data);
					$(".nilaiEditan"+jenis+id).css('color','#00ffff');
					$(".linkEdit"+jenis+id).remove();
				}
			})
					return false;
		});
	var opt = {
			modal: true,
			show: true,
			hide: true
			};
	$("#Dialog").dialog(opt);
	});
}

function load_no_loading(page,id){
    $.ajax({
        url: page,
        success: function(response){
			$(".dada"+id).remove();
        },
        dataType:"html"  		
    });
    return false;
}

function load_onfly_loading(page,id,jenis){
    $.ajax({
        url: page,
        success: function(response){
			$(".nilai"+jenis+id).remove();
			$(".nilaiEditan"+jenis+id).remove;
			$(".linkEdit"+jenis+id).remove();
        },
        dataType:"html"  		
    });
    return false;
}