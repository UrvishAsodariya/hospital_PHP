

<?php

include 'DataBaseConnect.php';

if (isset($_POST['add'])) {
    $Name = $_POST['Name'];
    $phone = $_POST['mobile'];
    $date = $_POST['date'];
    $doctor = $_POST['doctor'];
    $department = $_POST['department'];
     $insertData = "INSERT INTO `front-appointment`(`name`, `phone`, `date`, `doctor`, `department`) VALUES ('$Name','$phone','$date','$doctor','$department')";
    

    mysqli_query($DataBaseConnect, $insertData);

}
else{
    $SelectQuery="SELECT * FROM `front-appointment`";
    $SelectData=mysqli_query($DataBaseConnect,$SelectQuery);

    $rows=array();

    while ($r=mysqli_fetch_assoc($SelectData)) {
    	$rows[] = $r;
    }

    echo json_encode($rows);
}
?>