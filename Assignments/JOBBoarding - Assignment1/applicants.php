
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
        
        $query = 'SELECT * FROM applicants';
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