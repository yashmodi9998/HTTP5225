<?php
// print_r($_POST);
if (isset($_POST['id'])) {
 
    $id = $_POST['id'];

    include('connect.php');

    $query = ("DELETE FROM students WHERE id=$id");
    $students = mysqli_query($con, $query);
    if ($students) {
        header('Location:../index.php');
    } else {
        echo mysqli_error($con);
    }
} else {
    echo "no data";
}
