<?php

include 'DataBaseConnect.php';


	if (isset($FatchData)) {
		$email = $FatchData['email'];
		$password = $FatchData['password'];

		$select_query = "select * from `login` where email='$email' and password='$password'";
		$sel_data =mysqli_query($DataBaseConnect,$select_query);
		$sel_record = mysqli_num_rows($sel_data);
		
		if ($sel_record == 1) {
			$sel_row = mysqli_fetch_assoc($sel_data);
		}
		else
		{
			echo "Invalid password.....";
		}
		echo json_encode($sel_row);
	}
?>
