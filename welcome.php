<?php
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
            <div class="col-lg-4"> <strong>Welcome:</strong> <?php echo $_SESSION["userEmail"]; ?> </div>
            <!--PHP goes here -->
            <?php
            //connect to the database
            $con = mysqli_connect("localhost", "leni", "root", "myclue");
            //select the database
            mysqli_select_db($con, "notes");
            //execute the query
            $result     = mysqli_query($con, "SELECT * FROM notes");
            $num_rows   = mysqli_num_rows($result);
            ?>

            <div class="col-lg-4">You have <?php echo "$num_rows"; ?> notes</div>
            <div class="col-lg-4"> <button type="submit" name="logout" class="btn btn-secondary"><a href="index.php">Logout System</a></button></div>
            <!--PHP goes here -->
        </div>
        <div class="row user-notes">
            <div class="col-lg-12 write-notes">
                <h3> Start writing your notes, it just takes a second.</h3><br>
                <form method="POST">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title_note" class="form-control" placeholder="Enter the title" required>
                    </div>
                    <div class="form-group">
                        <label>Type of note</label>
                        <input type="text" name="type_note" class="form-control" placeholder="Enter a description" required>
                    </div>
                    <div class="form-group">
                        <label>Note</label>
                        <textarea class="form-control" name="note" id="textarea" placeholder="Type your note" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-secondary">Submit</button>
                    <!--PHP for the Submit button-->
                    <?php
                    //create a connection to the database
                    $con = mysqli_connect("localhost", "leni", "root", "myclue");

                    //store the variables & escape variables for security
                    $title_note     = mysqli_real_escape_string($con, $_POST['title_note']);
                    $type_note      = mysqli_real_escape_string($con, $_POST['type_note']);
                    $note           = mysqli_real_escape_string($con, $_POST['note']);

                    //create the SQL query
                    $sql = "INSERT INTO notes (title_note,type_note,note) VALUES ('$title_note','$type_note','$note')";

                    //execute query
                    mysqli_query($con, $sql);

                    //close the connection
                    mysqli_close($con);
                    ?>

                    <button type="submit" class="btn btn-secondary"><a href="records.php">View Notes</a></button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>