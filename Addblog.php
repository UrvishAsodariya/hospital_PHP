<?php

include 'DataBaseConnect.php';

if (isset($_POST['add'])) {
    if (isset($_FILES['image'])) {
        $img_name = $_FILES['image']['name'];
        $file_destination = './image/' . $img_name;
        move_uploaded_file($_FILES['image']['tmp_name'], $file_destination);

        $Title = $_POST['title'];
        $Category = $_POST['category'];
        $Uid = $_POST['uid'];
        $Discription=$_POST['discription'];
        $Date=$_POST['Date'];
        $insertData = "INSERT INTO `add_blog`(`Title`, `Category`, `Image`,`Discription`, `Uid`,`Date`) VALUES ('$Title','$Category','$file_destination','$Discription','$Uid','$Date')";

        
        
        mysqli_query($DataBaseConnect, $insertData);
    }
}
else{
    $SelectQuery="select * from `add_blog`";
    $SelectData=mysqli_query($DataBaseConnect,$SelectQuery);

    $rows=array();

    while ($r=mysqli_fetch_assoc($SelectData)) {
    	$rows[] = $r;
    }

    echo json_encode($rows);
}
?>