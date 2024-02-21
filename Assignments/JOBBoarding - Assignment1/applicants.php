<?php
define('PAGE_TITLE', 'Applicants');
include('inc/nav.php');

?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="display-5 mt-3 mb-5">
                Applicants
            </h1>
        </div>
    </div>

    <?php
    include('inc/connect.php');
    $query = 'SELECT * FROM applicants';
    $applications = mysqli_query($con, $query);
    ?>

    <div class="row">
        <?php foreach ($applications as $application) {?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <a href="profile.php?app_id=<?= $application['applicant_id'];?>">
                        <img src="<?= $application['image_URL'];?>" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title"><?= $application['full_name'];?></h5>    
                        <p class="card-text"><?= $application['email'];?></p>
                        <a href="#" class="btn btn-primary">View Profile</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

</div>
<?php include('inc/footer.php');
