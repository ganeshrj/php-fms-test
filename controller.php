<?php
echo file('model.php');
$functionname=$_REQUEST['method'];
$functionname();
function savefile(){
	$servername = "localhost";
	$username = "root";
	$password = "";


	$conn = new mysqli($servername, $username, $password,'fms');
	$file_name = $_REQUEST['file_name'];
	$file_contents = $_REQUEST['text_area'];
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "INSERT INTO tbl_files (file_name, file_contents, created_by,created_time)
	VALUES ('$file_name', '$file_contents', 'admin','".date('Y-m-d H:i:s')."')";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

?>