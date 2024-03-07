<?php
if (isset($_POST['addApplicant'])) {
    $target_dir = "uploads/";
    $randomNumber = rand(1000, 1100);
// data from the post method
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    //To get file data
    $resume = $_FILES['resume'];
    $image_URL = 'https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/' . $randomNumber . '.jpg';

    include('connect.php');

    // File properties
    $resumeName = $resume['name'];
    
    $resumeTmpName = $resume['tmp_name'];
    $resumeSize = $resume['size'];
    $resumeError = $resume['error'];
    //var that holds directory location.
    $uploadDirectory = __DIR__ . "/uploads/";
    $resumePath = $uploadDirectory . $resumeName;
    //check if there is an error in file
    if ($resumeError === 0) {
        //try to move file from actual location which is in tmp folder to the desired folder
        if (move_uploaded_file($resumeTmpName, $resumePath)) {
            //var that provide link for the uploaded file
            $resume_link = "inc/uploads/" . $resumeName;

            $query = 'INSERT INTO `applicants` (`full_name`,`email`,`resume_link`,`image_URL`) 
                      VALUES (
                          "' . mysqli_real_escape_string($con, $fullname) . '",
                          "' . mysqli_real_escape_string($con, $email) . '",
                          "' . mysqli_real_escape_string($con, $resume_link) . '",
                          "' . mysqli_real_escape_string($con, $image_URL) . '")';

            $applicant = mysqli_query($con, $query);

            if ($applicant) {
                header('Location:../applicants.php');
            } else {
                echo mysqli_error($con);
            }
        } else {
            echo "Error uploading file.";
        }
    } else {
        echo "File upload error: " . $resumeError;
    }
} else {
    echo "No data received.";
}
?>
