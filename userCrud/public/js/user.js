$(document).ready(function() {
	$('.flash').hide();
	$('#createUser').on('click',function(){
		 $.ajax({
			url: '../user/createUser',
			data: 'sss',
            type: 'POST',
			 success: function(result){
				$('.userCreateView').html(result);
				$('#createUser').hide();
			}
		});
	
	});
	
	$('.userCreateView').on('submit','#userCreateForm',function(e){
		 e.preventDefault();
		var formdata = {
			userFirstName:$('#userFirstName').val(),
			userLastName:$('#userLastName').val(),
			userEmail:$('#userEmail').val(),
		};
		 $.ajax({
			url: '../userApi/saveUser',
			data: formdata,
            type: 'POST',
			success: function(result){
				var result = JSON.parse(result);
				$('.flash').show();
				$('.flash').html(result.msg);
				$('.flash').slideDown(function() {
					setTimeout(function() {
						$('.flash').slideUp();
					}, 5000);
				});
				if(result.status){
					window.location.reload();
				}
				
			}
		});
	});
	
	$('.edit').on('click',function(){
		var userID = $(this).parents('tr').attr('id');
		$.ajax({
			url: '../user/edit',
			data: {userID:userID},
            type: 'POST',
			success: function(result){
				$('.userCreateView').html(result);
				$('#createUser').hide();
			}
		});
	});
	
	$('.userCreateView').on('submit','#userEditForm',function(e){
		 e.preventDefault();
		var formdata = {
			userID:$('#userID').val(),
			userFirstName:$('#userFirstName').val(),
			userLastName:$('#userLastName').val(),
			userEmail:$('#userEmail').val(),
		};
		 $.ajax({
			url: '../userApi/editUser',
			data: formdata,
            type: 'POST',
			success: function(result){
				var result = JSON.parse(result);
				$('.flash').show();
				$('.flash').html(result.msg);
				$('.flash').slideDown(function() {
					setTimeout(function() {
						$('.flash').slideUp();
					}, 5000);
				});
				if(result.status){
					window.location.reload();
				}
				
			}
		});
	});
	
	$('.delete').on('click',function(){
		var userID = $(this).parents('tr').attr('id');
		$.ajax({
			url: '../userApi/deleteUser',
			data: {userID:userID},
            type: 'POST',
			success: function(result){
				var result = JSON.parse(result);
				$('.flash').show();
				$('.flash').html(result.msg);
				$('.flash').slideDown(function() {
					setTimeout(function() {
						$('.flash').slideUp();
					}, 5000);
				});
				if(result.status){
					window.location.reload();
				}
			}
		});
	});
	
	$(document).on('click','#back',function(){
		$('#createUser').show();
		$('.userCreateView').html('');
	})
})


