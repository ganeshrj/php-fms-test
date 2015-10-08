$('#text_area').val('');
$('#file_name').val('');
$('#text_div').hide();
$('#file_div').html('');
$('body').on('click', '#add_file', function(event) {
	
	$('#text_div').show();
	$('#main_div').hide();
	event.preventDefault();
	
});
function addfile(){
	if($('#text_area').val()==''){

	 	alert('Blank File Cant Be Created!');
	}
	else{
		dialog.dialog( "open" );
	}
		
}
function createfile(){
	 
	if($('#file_name').val()==''){
		alert('File Name Cant Be Blank!');
	}else{
		$.ajax({
		  method: 'post',
		  url: "controller.php?method=savefile&text_area="+$('#text_area').val()+"&file_name="+$('#file_name').val(),
		  success: function(html){
				alert(html);						      
				dialog.dialog( "close" );
			}
		});
		location.reload();
	}
	
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
      }
    });


 
    
 $('body').on('click', '#show_files', function(event) {
	
	$('#text_div').hide();
	$('#main_div').show();
	$.ajax({
		  method: 'post',
		  url: "controller.php?method=showfiles",
		  success: function(html){
				$('#file_div').html(html)
				$('#file_div').show()
				$('#file_div').css('css','')
			}
		});
		event.preventDefault();
});
	

    
 $('body').on('click', '.editfile', function(event) {
	
	$('#text_div').hide();
	$('#main_div').show();
	id=this.id;
	id=id.split("myid_");
	$("#save").attr("onclick", "saveeditfile('"+id[1]+"')");
		$.ajax({
		  method: 'post',
		  url: "controller.php?method=showparticularfile&fileid="+(id[1]),
		  success: function(html){
				$('#text_div').show();
				$('#text_area').val(html);
				$('#main_div').hide();
				event.preventDefault();
			}
		});
		event.preventDefault();
});
function saveeditfile(fileid){
	
	$.ajax({
	  method: 'post',
	  url: "controller.php?method=saveeditfile&text_area="+$('#text_area').val()+"&fileid="+fileid,
	  success: function(html){
			alert(html);						      
			dialog.dialog( "close" );
		}
	});
	location.reload();
	
}
