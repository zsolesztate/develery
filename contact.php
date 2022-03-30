<?php

$sysmsg = "* a mezők kitöltése kötelező";

if (isset($_POST['submit'])) {
	If ($_POST['name'] && $_POST['email'] && $_POST['message']){
$Name = $_POST['name'];
$message = $_POST['message'];
$Email    = $_POST['email'];
$sysmsg =  '';

$con=mysqli_connect('localhost', 'root', '', 'admin');

if( $con === false ) {
die("ERROR: Could not connect. " . mysqli_connect_error());
}

$Name = mysqli_real_escape_string($con, $Name);
$Email = mysqli_real_escape_string($con, $Email);
$message = mysqli_real_escape_string($con, $message);
   
	if (!preg_match('/^[a-zA-Z \p{L}]+$/ui',$Name)) {
		$sysmsg = "A neved csak az ABC betűit tartalmazhatja";
	}
	if(!filter_var($Email,FILTER_VALIDATE_EMAIL)) {
		$sysmsg = "Kérlek valós email címed adj meg!";
	}

		if (!$sysmsg) {
		$sql="INSERT INTO contact (name, email, message) VALUES ('".$Name."','".$Email."', '".$message."')";
		mysqli_query($con, $sql);
		$sysmsg="Sikeres küldés. Hamarosan felvesszük veled a kapcsolatot.";
		}else {
		$sysmsg;

	}
}else {
	$sysmsg = "Töltsd ki az összes mezőt!";
}
} 
?>
