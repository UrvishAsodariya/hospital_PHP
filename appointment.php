<?php

include 'DataBaseConnect.php';

if (isset($_POST['add'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $service = $_POST['service'];
    $date = $_POST['date'];
    $email= $_POST['email'];
    $phone = $_POST['phone'];
    $description= $_POST['description'];
     $insertData = "INSERT INTO `appointment`(`first_name`, `last_name`, `dob`, `gender`, `service`, `date`, `email`, `phone`, `description`) VALUES ('$firstName','$lastName','$dob','$gender','$service','$date','$email','$phone','$description')";
    

    mysqli_query($DataBaseConnect, $insertData);

}
else{
    $SelectQuery="select * from `appointment`";
    $SelectData=mysqli_query($DataBaseConnect,$SelectQuery);

    $rows=array();

    while ($r=mysqli_fetch_assoc($SelectData)) {
    	$rows[] = $r;
    }

    echo json_encode($rows);
}
?>