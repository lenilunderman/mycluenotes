<?php
//create the session and start
session_start();
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>My clue Notes</title>

    <!--  Google Fonts-->


    <!--CSS Bootstrap / CSS custom -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/welcome.css">

    <!--Icons from Font awesome! -->
    <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>

    <!--Jquery Bootstrap Scripts-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!--End of scripts   -->

</head>

<body>
    <div class="container-fluid">
        <div class="row row-title">
            <div class="col-lg-12 titleheader"> MyClue Notes!</div>
        </div>
        <div class="row user-tittle">
            <div class="col-lg-6"> <strong>Welcome:</strong> <?php echo ucwords($_SESSION["userName"]); ?></div>
            
            <div class="col-lg-2"> <button type="submit" class="btn btn-secondary"><a href="records.php">Go back</a></button></div>

            <div class="col-lg-2"> <button type="submit" class="btn btn-secondary"><a href="welcome.php">Write a new note</a></button></div>

            <div class="col-lg-2"> <button type="submit" class="btn btn-secondary" name="logout_records"><a href="index.php" class="logout">Logout System</a></button></div>

        </div>

        <div class="row user-notes">
            <div class="col-lg-12 write-notes">
                <h1 class="text-center"> Your search.</h1><br>

                <!--Notes from the database goes here-->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Type of Note</th>
                            <th scope="col">Note</th>
                            <th scope="col">View Note</th>
                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>

                        <!-- PHP Part -->
                        <?php
                        //create a connection to the database
                        $con = mysqli_connect("localhost", "leni", "root", "myclue");
                        //select query
                        $userID = $_SESSION["userID"];
                        $sql = "SELECT * FROM notes WHERE User_ID='$userID'";
                        //execute the query
                        $result = mysqli_query($con, $sql);

                        while ($row = mysqli_fetch_array($result)) {
                            $User_ID = $row['User_ID'];
                            $title_note = $row['title_note'];
                            $type_note = $row['type_note'];
                            $note = $row['note'];

                            //echo "$User_ID <br>";
                            //echo "$title_note <br>";
                            //echo "$type_note <br>";
                            //echo "$note <br>";
                            echo "<tr></th>";
                            echo "<td scope='row'>$title_note</td>";
                            echo "<td scope='row'>$type_note</td>";
                            echo "<td scope='row'>$note</td>";
                            echo "<td scope='row'><a class='text-success' href='view.php?title_note=$title_note'>View Note</a></td>";
                            echo "<td scope='row'><a class='text-info' href='update.php?title_note=$title_note'>Update</a></td>";
                            echo "<td scope='row'><a class='text-danger' href='delete.php?note=$note'>Delete</a></td></tr>";
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>

</html>