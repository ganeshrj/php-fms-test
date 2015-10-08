<?php
echo file('model.php');
$functionname=$_REQUEST['method'];
$functionname();
function conn(){
	$servername = "localhost";
	$username = "root";
	$password = "";


	$conn = new mysqli($servername, $username, $password,'fms');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	return $conn;
}
function savefile(){
		$file_name = $_REQUEST['file_name'];
	$file_contents = $_REQUEST['text_area'];
	$conn =conn();
	$sql = "INSERT INTO tbl_files (file_name, file_contents, created_by,created_time)
	VALUES ('$file_name', '$file_contents', 'admin','".date('Y-m-d H:i:s')."')";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
function showfiles(){
	$conn =conn();
	$sql = "SELECT * FROM tbl_files";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    
	    while($row = $result->fetch_assoc()) {
	        echo "<div id='myid_".$row["autoid"]."' class='editfile'>".$row["autoid"].") - File Name: " .$row["file_name"]." Created Time -".$row["created_time"]."</div><br>";
	    }
	} else {
	    echo "0 results";
	}
}
function showparticularfile(){
		$conn =conn();
		$sql = "SELECT autoid,file_contents FROM tbl_files where autoid=".$_REQUEST['fileid']."";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		    
		    while($row = $result->fetch_assoc()) {
		        echo $row['file_contents'];
		    }
		} else {
		    echo "0 results";
		}
}
function saveeditfile(){
	$conn =conn();
$sql = "UPDATE tbl_files SET file_contents='".$_REQUEST['text_area']."' WHERE autoid=".$_REQUEST['fileid']."";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
}

?>