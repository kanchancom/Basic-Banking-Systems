<?php
include 'database.php';
$firstname= $_POST['firstname'];
$amount =$_POST['amount'];

$sql = "INSERT INTO `Transaction`( `username`, `amount`) 
			VALUES ('$firstname','$amount')";
			if (mysqli_query($conn, $sql)) {
				echo "successfull connection to the DATABASE";
			} 
			else {
				echo " Connection failuar";
			}
?>
