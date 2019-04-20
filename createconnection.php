<?php
// Create Connection to MySQL Database
//mysqli_connect("hostname", "username", "password", "database");

$con = mysqli_connect("localhost", "leni", "root", "myclue");

// Check the connection
if ($con === FALSE){
    die("ERROR to connect to mysql: " . mysqli_connect_error());
}
else{
    echo "Connected Succefully! " . mysqli_get_host_info($con); 
}

// Close the connection
mysqli_close($con);

?>

