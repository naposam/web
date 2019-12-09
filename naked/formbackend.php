<?php
include ('Dbcon.php')

if(isset($_POST['btn'])){
	$aircraft= $_POST['aircraft'];
	$firstName= $_POST['firstname'];
	$lastname= $_POST['lastname'];
	$email= $_POST['email'];
	$phonenumber= $_POST['phonenumber'];
	$from_where= $_POST['from_where'];
	$to_where= $_POST['to_where'];
	$date_dept= $_POST['date_dept'];
	$date_return= $_POST['date_return'];
	
	$query= "INSERT INTO booking(name, fname, lname, email, phone_number, from_where, to_where, date_dept, date_return) VALUE('$aircraft','$firstname','$lastname','$email','$phonenumber','$from_where','$date_dept','$date_return')" or die(mysqli_error($conn));
	if(mysqli_query($query,$conn)){
		echo '<script>
       alert(" '.$firstName.' '. $lastname. ' this flight is available proceed to the payment Now");
       document.location="makepayment.php"
		</scritpt>';
	}



}


?>