<?php
define('PAGE_TITLE', 'Apply');
include('inc/nav.php'); 

?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="display-5 mt-3 mb-5">
                Apply For Job
            </h2>
        </div>
    </div>
    <?php
    include('inc/connect.php');
    $query = 'SELECT * FROM applicants';
    $result_applicant = mysqli_query($con, $query);
    $query = 'SELECT * FROM jobs';
    $result_jobs = mysqli_query($con, $query);
    $applicants=[];
    $jobs=[];
    while ($applicant = mysqli_fetch_array($result_applicant)) {
   $applicants[$applicant['applicant_id']]= $applicant['full_name'];

    }
    while ($job = mysqli_fetch_array($result_jobs)) {
        $jobs[$job['job_id']]= $job['title'];  
    
    }
    ?>
    <div class="row">
    <form method="Post" action="inc/addapplication.php">
    <div class="mb-3">
        <label for="applicants" class="form-label">Applicant</label>
        <select class="form-select" name= "applicants" id = "applicants" aria-label="Default select example">
        <option selected>Select Applicant</option>
            <?php
            foreach ($applicants as $id => $name) {
                echo '<option value="'.$id.'">'.$name.'</option>';
            }
            ?>
        </select>
    </div>  
    <div class="mb-3">
        <label for="jobs" class="form-label">Jobs</label>
        <select class="form-select" name= "jobs" id = "jobs" >
        <option selected>Select Applicant</option>
            <?php
            foreach ($jobs as $id => $name) {
                echo '<option value="'.$id.'">'.$name.'</option>';
            }
            ?>
        </select>
    </div> 
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select class="form-select" name= "status" id = "status" >
        <option selected>Select Status</option>
           <option value="applied">Applied</option> 
           <option value="in-review">In Review</option> 
           <option value="accepted">Accepted</option> 
           <option value="rejected">Rejected</option> 
        </select>
    </div>   
    <div class="mb-3">
    <button type="submit" name="addapplication" class="btn btn-outline-primary">Submit</button>
    </div>
    </form>
    </div>
    
</div>
<?php include('inc/footer.php');