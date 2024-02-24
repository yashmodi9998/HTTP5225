<?php 
define('PAGE_TITLE', 'Applications');
include('inc/nav.php'); 
include('inc/connect.php');

$job_id = $_GET['job_id'];
$query = 'SELECT 
            A.applicant_id,
            A.full_name,
            A.email,
            A.image_URL,
            AP.application_id,
            AP.application_date,
            AP.status AS application_status,
            J.title
        FROM Applications AP
        JOIN jobs J ON AP.job_id = j.job_id
        JOIN Applicants A ON AP.applicant_id = A.applicant_id
        WHERE AP.job_id = ' . $job_id;

$applications = mysqli_query($con, $query);

if (mysqli_num_rows($applications)>0) {
 
    
    // Flag to check if the heading has been displayed 
    $headingDisplayed = false;
?>

    <div class="container mt-4">
        <div class="row">

            <?php foreach ($applications as $application) {
                if (!$headingDisplayed) {
                    echo '<h3 class="display-5 mb-4">Applicants for the ' . $application['title'] . '</h3>';
                    $headingDisplayed = true;
                } ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <a href="profile.php?app_id=<?= $application['applicant_id']; ?>">
                            <img src="<?= $application['image_URL']; ?>" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"><?= $application['full_name']; ?></h5>
                            <p class="card-text mb-2 small text-muted">Applied on <?= date($application['application_date']); ?></p>
                            <p class="card-text"><?= $application['email']; ?></p>
                            <a href="profile.php?app_id=<?= $application['applicant_id']; ?>" class="btn btn-outline-primary">Visit Profile</a>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>

<?php
}
else{
    ?>
    <div class="alert alert-info mt-3" role="alert">
        Right now, There is no application for this Job .
    </div>
    <?php

}
 include('inc/footer.php');
?>


