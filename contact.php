<?php
// database connection code
if(isset($_POST['txtName']))
{

$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records

$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtMessage = $_POST['txtMessage'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`Id`, `fldName`, `fldEmail`, `fldMessage`) VALUES ('0', '$txtName', '$txtEmail', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
} else {
	echo "Nope";
}

$sql = "SELECT *From tbl_contact";
$result = mysqli_query($con,$sql);


if(mysqli_num_rows($result) > 0){

	while ($row = mysqli_fetch_array($result)) {
		echo  $row[0],"Name:", $row[1],"Email: ", $row[2], "Message " ,$row[3];
		echo "<br>";
	}
}

mysqli_close($con);

}


?>

