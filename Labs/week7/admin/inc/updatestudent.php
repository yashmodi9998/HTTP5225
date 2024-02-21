<?php
// print_r($_POST);
if (isset($_POST['updateGrade'])) {
    // print_r($_REQUEST);

    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $marks = $_POST['marks'];
    $imageURL = $_POST['imageURL'];

    include('connect.php');

    $query = ("UPDATE `students` SET `fname`='$fname',`lname`='$lname',`marks`='$marks',`imageURL`='$imageURL' WHERE `id`='$id'");
    echo $query . "</br>";
    $students = mysqli_query($con, $query);
    if ($students) {
        header('Location:../index.php');
    } else {
        echo mysqli_error($con);
    }
} else {
    echo "no data";
}
