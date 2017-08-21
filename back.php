<?php  

$name = $_POST["name"];
$phone_number = $_POST["number"];
$dob = $_POST["dob"];
$email = $_POST["email"];
$course_selected = $_POST["course"];
$fees = 1000;

$con = mysqli_connect("localhost", "root", "", "regpage");  
$query ="INSERT INTO `student_details`(`name`, `phone_number`, `dob`, `email`, `course_selected`, `total_fees`) VALUES ('$name','$phone_number','$dob','$email','$course_selected','$fees')";  
$result = mysqli_query($con, $query);  
?>