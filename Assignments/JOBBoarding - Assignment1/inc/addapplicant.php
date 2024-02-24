<?php
// print_r($_POST);
if (isset($_POST['addApplicant'])) {
    print_r($_POST);
    $randomNumber = rand(1000, 1100);
// echo $randomNumber;


    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $resume = $_POST['resume'];
    $image_URL = 'https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/'.$randomNumber.'.jpg';

    include('connect.php');


    $query = 'INSERT 
                INTO `applicants` (`full_name`,`email`,`resume_link`,`image_URL`) 
                VALUES (
                    "' . mysqli_real_escape_string($con, $fullname) . '",
                    "' . mysqli_real_escape_string($con, $email) . '",
                    "' . mysqli_real_escape_string($con, $resume) . '",
                    "' . mysqli_real_escape_string($con, $image_URL) . '")';
    $applicant = mysqli_query($con, $query);
    if ($applicant) {
        header('Location:../applicants.php');
    } else {
        echo mysqli_error($con);
    }
} else {
    echo "no data";
}
