<?php

include 'DataBaseConnect.php';

if (isset($_POST['add'])) {
    if (isset($_FILES['image'])) {
        $img_name = $_FILES['image']['name'];
        $file_destination = './image/' . $img_name;
        move_uploaded_file($_FILES['image']['tmp_name'], $file_destination);

        $DepartmentName = $_POST['DepartmentName'];
        $Discription= $_POST['Discription'];
        $Uid = $_POST['uid'];
        $insertData = "INSERT INTO `department`(`DepartmentName`, `DetailOfDepartment`, `Image`, `Uid`) VALUES ('$DepartmentName','$Discription','$file_destination','$Uid')";
        
        
        mysqli_query($DataBaseConnect, $insertData);
    }
}
else{
    $SelectQuery="select * from `department`";
    $SelectData=mysqli_query($DataBaseConnect,$SelectQuery);

    $rows=array();

    while ($r=mysqli_fetch_assoc($SelectData)) {
    	$rows[] = $r;
    }

    echo json_encode($rows);
}
?>