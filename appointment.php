<?php

include 'DataBaseConnect.php';

if ($FatchData) {
    $FirstName = $FatchData['FirstName'];
    $LastName = $FatchData['LastName'];
    $Dob = $FatchData['Dob'];
    $Gender = $FatchData['Gender'];
    $Service = $FatchData['Service'];
    $DateAndTime = $FatchData['DateAndTime'];
    $PatientEmail= $FatchData['PatientEmail'];
    $PhoneNumber = $FatchData['PhoneNumber'];
    $Discription= $FatchData['Discription'];

 $insertData = "INSERT INTO `appointment`(`FirstName`, `LastName`, `Dob`, `Gender`, `Service`, `DateAndTime`, `PatientEmail`, `PhoneNumber`, `Discription`) VALUES ('$FirstName','$LastName','$Dob','$Gender','$Service','$DateAndTime','$PatientEmail','$PhoneNumber','$Discription')";


    mysqli_query($DataBaseConnect, $insertData);

}
?>