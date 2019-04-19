<?php
include 'createconnection.php';
?>
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
            Create an account and save all your notes in our service.
         </div>

      </div>
   </div>

   <div class="main">
      <div class="col-md-6 col-sm-12 tes">
         <div class="login-form">
            <div class="message">
               Create an account now:
            </div>
            <form method="POST">
               <div class="form-group">
                  <label>User Name</label>
                  <input type="text" name="userName" class="form-control" placeholder="User Name" required>
               </div>
               <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="userPassword" class="form-control" placeholder="Password" required>
               </div>
               <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="userEmail" class="form-control" placeholder="@email" required>
               </div>
               <button type="submit" name="submit" class="btn btn-secondary">Register</button>

               <button type="#" class="btn btn-black">
                  <a href="login.php">Login</a></button>

               <!--PHP PART -->
               <?php
               if (isset($_POST["submit"])) {
                  // Create the connection to the database
                  $con = mysqli_connect("localhost", "leni", "root", "myclue");

                  //store the variables & escape variables for security
                  $userName      = mysqli_real_escape_string($con, $_POST['userName']);
                  $userPassword  = mysqli_real_escape_string($con, $_POST['userPassword']);
                  $userEmail     = mysqli_real_escape_string($con, $_POST['userEmail']);

                  //Sql to be insert into the database
                  $sql = "INSERT INTO login (userName, userPassword, userEmail) VALUES ('$userName','$userPassword','$userEmail')";

                  //execute the query
                  mysqli_query($con, $sql);

                  echo "Congratulations $userName , please login in.";

                  // Close the connection
                  mysqli_close($con);
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