$('#text_area').val('');
$('#file_name').val('');
$('#text_div').hide();
$('body').on('click', '#add_file', function(event) {
	
	$('#text_div').show();
	$('#main_div').hide();
	event.preventDefault();
	
});
function addfile(){
	
	 dialog.dialog( "open" );
		
}
function createfile(){
	 
	
		$.ajax({
		  method: 'post',
		  url: "controller.php?method=savefile&text="+$('#text_area').val()+"&file_name="+$('#file_name').val(),
		  success: function(html){
				alert(html);						      
				dialog.dialog( "close" );
			}
		});
	
}
dialog = $( "#dialog-form" ).dialog({
      autoOpen: false,
      height: 300,
      width: 350,
      modal: true,
      buttons: {
        "Save File": createfile,
        Cancel: function() {
          dialog.dialog( "close" );
        }
      },
      close: function() {
        form[ 0 ].reset();
        allFields.removeClass( "ui-state-error" );
      }
    });
 
    
 

