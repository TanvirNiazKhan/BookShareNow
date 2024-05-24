<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "user_bookshare";

$conn = mysqli_connect($server, $username, $password, $database);
if ($conn) {
    echo "Ganza baby ass boro tight pant pore showoff ar jonno";
} else {
    die("Error" . mysqli_connect_error());
}
