<?php
// print_r($_POST);
if (isset($_POST['addGrade'])) {
    print_r($_REQUEST);

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $marks = $_POST['marks'];
    $imageURL = $_POST['imageURL'];

    include('connect.php');

    $query = ("INSERT INTO students (`fname`,`lname`,`marks`,`imageURL`) VALUES ('$fname','$lname','$marks','$imageURL')");
    $students = mysqli_query($con, $query);
    if ($students) {
        header('Location:../index.php');
    } else {
        echo mysqli_error($con);
    }
} else {
    echo "no data";
}
