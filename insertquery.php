<?php
// Create the connection to the database
$con = mysqli_connect("localhost", "leni", "root", "myclue");
// Check the connection

// Attempt insert query execution
// $sql = "INSERT INTO login (userName, userPassword, userEmail) VALUES ('$userName','$userPassword','$userEmail')";

 $sql = "INSERT INTO login (userName, userPassword, userEmail) VALUES ('leni','lunderman','lenilunderman@gmail.com')";

// Execute the query
mysqli_query($con, $sql);

// Check if the data was inserted or not
if (mysqli_query($con, $sql)) {
    echo "Records recorded sucessfully.";
} else {
    echo "ERROR couldn't execute the query $sql " . mysqli_error($con);
}
?>