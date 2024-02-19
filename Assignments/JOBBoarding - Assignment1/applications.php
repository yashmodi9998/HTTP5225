
<?php include('inc/nav.php'); ?>
<div class="container">

    <div class="row">
        <div class="col">
            <h1 class="display-5 mt-3 mb-5">
                Applications
            </h1>
        </div>
    </div>
        <?php
        include('inc/connect.php');
        
        $job_id= $_GET['job_id'];
        $query = 'SELECT 
                    A.applicant_id,
                    A.full_name,
                    A.email,
                    A.image_URL,
                    AP.application_id,
                    AP.application_date,
                    AP.status AS application_status
                FROM Applications AP
                JOIN Applicants A ON AP.applicant_id = A.applicant_id
                WHERE AP.job_id = '.$job_id;
        $applications = mysqli_query($con, $query);


        ?>
    <div class="row">

        <?php foreach ($applications as $application) {?>

            <div class="col">
                <div class="card" style="width: 18rem;">
                <a href="profile.php?app_id=<?= $application['applicant_id'];?>">
                    <img src="<?= $application['image_URL'];?>" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title"><?= $application['full_name'];?></h5>    
                        <p class="card-text mb-2 small text-muted">Applied on <?= date($application['application_date']);?></p>
                        <p class="card-text"><?= $application['email'];?></p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                
            </div>
            </div>            
                    <?php  } ?>
                        
            
        </div>

    </div>
</body>

</html>