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
                        <a href="#" class="btn btn-outline-primary">View Profile</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div>
        <div class="mb-4">
<button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Add New User
</button>
</div>
</div>
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <form method="Post" action="inc/addapplicant.php">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New Applicant</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    <div class="mb-3">
        <label for="fullname" class="form-label">Full Name</label>
        <input type="text" name="fullname" class="form-control" id="fullname">
    </div>   
    <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email"  class="form-control" id="email" >
    </div>
  <div class="mb-3">
    <label for="resume" class="form-label">Resume</label>
    <input type="text" name="resume"  class="form-control" id="resume" >
  </div>

</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="addApplicant"class="btn btn-outline-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
</div>

<?php include('inc/footer.php');
