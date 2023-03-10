    <?php

$DataBaseConnect = mysqli_connect("localhost", "root", "", "hospital_data");

    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Headers: *');
    header("Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type");
    
    $FatchData = json_decode(file_get_contents('php://input'), true);
?>