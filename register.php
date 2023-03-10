<?php
    include 'DataBaseConnect.php';
if ($FatchData)
     {
    	$userName=$FatchData['userName'];
    	$email=$FatchData['email'];
    	$password=$FatchData['password'];

    	$insertData="insert into login(user_name,email,password)values('$userName','$email',$password)";
    	$data= mysqli_query($DataBaseConnect,$insertData);
		echo json_decode($data);
    }
?>