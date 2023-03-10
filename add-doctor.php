<?php

include 'DataBaseConnect.php';
 
if (isset($_POST['add'])) {
    if (isset($_FILES['img'])) {
        $img_name = $_FILES['img']['name'];
        $file_destination = './image/' . $img_name;
        move_uploaded_file($_FILES['img']['tmp_name'], $file_destination);

        $FirstName = $_POST['firstName'];
        $LastName = $_POST['lastName'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $specialty = $_POST['specialty'];
        $Phone = $_POST['phone'];
        $Email = $_POST['email'];
        $web_url = $_POST['web_url'];
        $description = $_POST['description'];
        // $Uid = $_POST['uid'];
        $insertData = "INSERT INTO `doctor_data`(`first_name`, `last_name`, `dob`, `gender`, `speciality`, `phone`, `email`, `web_url`, `img`, `description`) VALUES ('$FirstName','$LastName',' $dob','$gender','$specialty','$Phone','$Email','$web_url','$file_destination','$description')";
        mysqli_query($DataBaseConnect, $insertData);


    }

}
else{
    $SelectQuery="select * from `doctor_data`";
    $SelectData=mysqli_query($DataBaseConnect,$SelectQuery);

    $rows=array();

    while ($r=mysqli_fetch_assoc($SelectData)) {
    	$rows[] = $r;
    }

    echo json_encode($rows);
}
?>