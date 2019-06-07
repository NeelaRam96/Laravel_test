$(document).on('click','#delete_data',function(){
			var id = $(this).attr('data-id');
			$('#confim_delete').attr( 'data-id',id);
			});

		$(document).on('click','#confim_delete',function(){
			var id = $(this).attr('data-id');
			alert(id);	
			$.ajax({
				url: "/form/"+id,
				method: "DELETE",
				data: {
				'_token': '{{csrf_token()}}',
				'id':id
				},
				success: function(result){
					//alert("hi");
					create_table.draw();
				}
			});
		});
