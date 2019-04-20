<?php
// Create Connection to MySQL Database
//mysqli_connect("hostname", "username", "password", "database");

//connect to the teacher server
include "../../../connection_string.php";
if (mysql_query("CREATE DATABASE myclue", $con)) {
    echo "database myclue created!";
} else {
    echo mysql_error();
}
mysql_select_db("myclue", $con);
$sql1 = "CREATE TABLE 'login' (
  'ID' int(11) NOT NULL,
  'userName' varchar(255) NOT NULL,
  'userPassword' varchar(255) DEFAULT NULL,
  'userEmail' varchar(255) DEFAULT NULL
)  CHARSET=utf8";
$sql2 = "CREATE TABLE 'notes' (
  'ID_notes' int(11) NOT NULL,
  'User_ID' int(11) NOT NULL,
  'title_note' varchar(255) DEFAULT NULL,
  'type_note' varchar(80) DEFAULT NULL,
  'note' text
) CHARSET=utf8;";

if (mysql_query($sql, $con)) {
        echo "table profTest3272019table created!";
    } else {
        echo mysql_error();
    }
mysql_close($con);

?>