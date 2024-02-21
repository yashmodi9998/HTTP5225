<?php 
define('PAGE_TITLE', 'Profile');
include('inc/nav.php'); 
include('inc/connect.php');

    $app_id = $_GET['app_id'];
    $applicatiant_query = 'SELECT * FROM applicants WHERE applicant_id='.$app_id;
    $applicatiant_result = mysqli_query($con, $applicatiant_query);

    if ($applicatiant_result) {
        $query = 'SELECT 
                    A.applicant_id,
                    AP.application_id,
                    AP.application_date,
                    AP.status AS application_status,
                    J.job_id,
                    J.title AS job_title,
                    J.description AS job_description,
                    J.company AS job_company,
                    J.location AS job_location,
                    J.salary AS job_salary
                FROM Applicants A
                LEFT JOIN Applications AP ON A.applicant_id = AP.applicant_id
                LEFT JOIN Jobs J ON AP.job_id = J.job_id
                WHERE A.applicant_id = '.$app_id;

        $applications = mysqli_query($con, $query);
        $applicant_details = mysqli_fetch_assoc($applicatiant_result);
    }
?>

<div class="container mt-4">
    <div class="row">
        <!-- User Details Section -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="<?= $applicant_details['image_URL']; ?>" class="card-img-top" alt="Profile Picture">
                <div class="card-body">
                    <h5 class="card-title"><?= $applicant_details['full_name']; ?></h5>
                    <p class="card-text"><?= $applicant_details['email']; ?></p>
                    <!-- Add other user details as needed -->
                </div>
            </div>
        </div>

        <!-- Job Application Details Section -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Job Application Details
                </div>
                <div class="card-body">
                    <?php while ($application = mysqli_fetch_assoc($applications)) { ?>
                        <h5 class="card-title"><?= $application['job_title']; ?></h5>
                        <p class="card-text"><?= $application['job_description']; ?></p>
                        <p class="card-text">
                            Status:
                            <?php
                            $status = $application['application_status'];
                            $statusColorClass = '';

                            switch ($status) {
                                case 'applied':
                                    $statusColorClass = 'text-primary';
                                    break;
                                case 'in-review':
                                    $statusColorClass = 'text-warning';
                                    break;
                                case 'rejected':
                                    $statusColorClass = 'text-danger';
                                    break;
                                    case 'accepted':
                                        $statusColorClass = 'text-success';
                                        break;
                                default:
                                    // Default color
                                    break;
                            }

                            echo '<span class="' . $statusColorClass . '">' . ucfirst($status) . '</span>';
                            ?>
                        </p>
                        
                        <hr>
                    <?php } ?>
                    <?php if (!empty($applicant_details['resume_URL'])) { ?>
                        <p class="card-text">
                            <a href="<?= $applicant_details['resume_URL']; ?>" target="_blank">View Resume</a>
                        </p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('inc/footer.php');
