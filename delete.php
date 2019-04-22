<?php
// get the variable from the URL
$note = $_GET["note"];
//echo var_dump($note);

//create a connection to the database
$con = mysqli_connect("localhost", "leni", "root", "myclue");

//create the query to be executed
$sql = "DELETE FROM notes WHERE note='$note'";

//execute the query inside the database
mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html>
    <head>
    <script>
        window.location.href = "records.php";
    </script>
    </head>
    <body></body>
</html>

