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
            <div class="col-lg-4"> Welcome: $Username</div>
            <div class="col-lg-4"> <button type="submit" class="btn btn-secondary"><a href="welcome.php">Write a new note</a></button></div>
            <div class="col-lg-4"> <button type="submit" class="btn btn-secondary"><a href="index.php">Logout System</a></button></div>
        </div>
        <div class="row user-notes">
            <div class="col-lg-12 write-notes">
                <h1> View all the notes in your account in one place.</h1><br>
                <!--Notes from the database goes here-->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Type</th>
                            <th scope="col">Note</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Title of the Note</td>
                            <td>Text of the note</td>
                            <td>Jacob</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>Jacob</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Title of the Note</td>
                            <td>Text of the note</td>
                            <td>Jacob</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>Jacob</td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>