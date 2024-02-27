<?php $con = mysqli_connect("localhost", "root", "", "jobboard");
if (!$con) {
    die("Connection Failed: " . mysqli_connect_error());
}
