<?php 
	
	header('Content-type: application/json');
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS");
	header('Access-Control-Allow-Headers: *');

	$con = mysqli_connect('localhost','root','','hospital_data');

	$data = json_decode(file_get_contents('php://input'), true);
	
	if (isset($data)) {
		
		
        $description: $data['description'],
        $facebook: $data['facebook'],
        $twitter: $data['twitter'],
        $googleplus: $data['googleplus'],
        $linkedin: $data['linkedin'],
        $behance: $data['behance'],
        $dribble: $data['dribble'],
        $searchbar: $data['searchbar']
	
	// if ($firstname != '' && $lastname != '' && $dob !='' && $dob !='' && $gender !='' && $speciality !='' && $phone !='' && $email !='' && $web_url !='' && $img !='' && $description !='') 
	// {
		$query = "INSERT INTO `socialapps`(`description`, `facebook`, `twitter`, `googleplus`, `linkedin`, `behance`, `dribble`, `searchbar`) VALUES ('$description','$facebook','$twitter','$googleplus','$linkedin','$behance','$dribble','$searchbar')"; 
		mysqli_query($con, $query);
	}
		
	// }

    ?>