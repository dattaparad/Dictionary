$(document).ready(function(){
	$('#submit').click(function() {
		$('#waiting').show(500);
		$('#dictForm1').hide(0);
		$('#message').hide(0);
		
		$.ajax({
			type : 'POST',
			url : 'post.php',
			dataType : 'json',
			data: {
				word : $('#word').val()
				},
			success : function(data){
				$('#waiting').hide(500);
				$('#message').removeClass().addClass((data.error === true) ? 'error' : 'success')
					.text(data.msg).show(500);
					$('#dictForm1').show(500);
				if (data.error === true)
					$('#dictForm1').show(500);
			},
			error : function(XMLHttpRequest, textStatus, errorThrown) {
				$('#waiting').hide(500);
				$('#message').removeClass().addClass('error')
					.text('There was an error.').show(500);
				$('#dictForm1').show(500);
			}
		});
		
		return false;
	});
});