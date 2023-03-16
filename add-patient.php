<?php

include 'DataBaseConnect.php';

if (isset($_POST['add'])) {
    if (isset($_FILES['img'])) {
        $img_name = $_FILES['img']['name'];
        $file_destination = './image/' . $img_name;
        move_uploaded_file($_FILES['img']['tmp_name'], $file_destination);

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email= $_POST['email'];
    $address= $_POST['address'];
    $description= $_POST['description'];
    $occupation = $_POST['occupation'];
    $status = $_POST['status'];
    
    $insertData = "INSERT INTO `patients_data`(`first_name`, `last_name`,`phone`, `date`, `age`,`gender`, `email`,`address`,`img`, `description`,`occupation`,`status`) VALUES ('$firstname','$lastname','$phone','$date','$age','$gender','$email','$address','$file_destination','$description','$occupation','$status')";

    
    mysqli_query($DataBaseConnect, $insertData);
    }
}
else{
    $SelectQuery="select * from `patients_data`";
    $SelectData=mysqli_query($DataBaseConnect,$SelectQuery);

    $rows=array();

    while ($r=mysqli_fetch_assoc($SelectData)) {
    	$rows[] = $r;
    }

    echo json_encode($rows);
}
?>