
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
        
        $app_id= $_GET['app_id'];
        $query = 'SELECT * FROM applicants
                WHERE applicant_id = '.$app_id;
        $applications = mysqli_query($con, $query);


        ?>
    <div class="row">

        <?php foreach ($applications as $application) {
                      } ?>
                        
            
        </div>

    </div>
</body>

</html>