<?php
// Check if there is a user and password in the form
if(isset($_POST["userEmail"]) && isset($_POST["userPassword"])){

    //trim the variables to get inserted executed inside the database
    $userEmail      = trim($_POST[ "userEmail"]);
    $userPassword   = trim($_POST[ "userPassword"]);

    //connect to the database
    $con = mysqli_connect("localhost", "leni", "root", "myclue");

    //select my email and password from the database
    $sql = "SELECT * FROM login WHERE userEmail='$userEmail' AND userPassword='$userPassword'";
    
    //execute the query and store in a variable
    $result = mysqli_query($con,$sql);

    //Using a count to fetch the row inside the database that equal same user and password
    $count = mysqli_num_rows($result); // check if the sql have only one row with results

    //continue if for the count tomorrow if ==1
    if ($count == 1) {
        // NOTE: session_register() function IS DEPRECATED, AVOID IT
    
        $_SESSION['ID'] = $ID;
        $_SESSION[ 'userEmail'] = $userEmail;
        header("location:welcome.php");
    } else {
        echo "Wrong Username or Password";

        // redirect to login page
        header("location:login.php");
    }
} else {
    // if username and password are not in $_POST do something else
    echo 'No username or password supplied!';
    // redirect to login page
    header("location:login.php");
}

?>