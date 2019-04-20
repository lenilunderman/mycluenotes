<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <title>My clue Notes</title>

   <!--  Google Fonts-->


   <!--CSS Bootstrap / CSS custom -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" href="css/main.css">

   <!--Icons from Font awesome! -->
   <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>

</head>

<body>
   <!--Header session-->
   <div class="sidenav">
      <div class="login-main-text">
         <h2>MyClue<br> Notes!</h2>
         <br>
         <div class="textheader">
            Login in our service and start enjoying. It's free!
         </div>

      </div>
   </div>
   <div class="main">
      <div class="col-md-6 col-sm-12 tes">
         <div class="login-form">
            <div class="message">
               Please provide your login:
            </div>
            <form action="" method="POST">
               <div class="form-group">
                  <label>User Email</label>
                  <input type="text" name="userEmail" class="form-control" placeholder="Email" required>
               </div>
               <div class="form-group">
                  <label>Password</label>
                  <input type="userPassword" name="userPassword" class="form-control" placeholder="Password" required>
               </div>

               <button type="submit" name="submit" class="btn btn-black">Login</button>
               <!--php goes here -->
               <?php
               session_start();
               //if the button submited was clicked with the information in it.
               if (isset($_POST["submit"])) {
                  //trim the variables to get inserted executed inside the database
                  $userEmail      = trim($_POST["userEmail"]);
                  $userPassword   = trim($_POST["userPassword"]);

                  //connect to the database
                  $con = mysqli_connect("localhost", "leni", "root", "myclue");
                  //create the query
                  $sql = "SELECT * FROM login WHERE userEmail='$userEmail' AND userPassword='$userPassword'";
                  //execute the query
                  $result = mysqli_query($con, $sql);

                  // check if the sql have only one row with results
                  $count = mysqli_num_rows($result);

                  if ($count == 1) {

                     // while ($row = mysqli_fetch_array($sql)) {
                     //    $myID = $row["ID"];
                     //    $userEmail = $row["userEmail"];
                     // }

                     // Set session variables
                     $_SESSION["userEmail"] = $userEmail;
                     $_SESSION["userPassword"] = $userPassword;
                    

                     $finfo = $result->fetch_field();
                     $_SESSION["ID"] = $finfo->ID;


                     echo "success";
                     header("location:welcome.php");
                  } else {
                     echo "Username or Password is incorrect";
                  }
               }
               ?>









            </form>
         </div>
      </div>
   </div>

   <!--Jquery Bootstrap Scripts-->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   <!--End of scripts   -->

</body>

</html>