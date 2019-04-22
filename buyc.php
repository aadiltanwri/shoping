	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
		
if(isset($_POST['bc'])){

$bid=$_POST["buyc"];;
$sql = "UPDATE buy SET confirm='$bid' WHERE id= '$bid'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
	 header('location: ../cart.php');
} else {
    echo "Error updating record: " . $conn->error;
	 header('location: admin.php');
}
}
$conn->close();
?>