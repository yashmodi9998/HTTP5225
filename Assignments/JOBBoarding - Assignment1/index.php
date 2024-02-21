<?php
define('PAGE_TITLE', 'Home');
include('inc/nav.php'); 

?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="display-5 mt-3 mb-5">
                Available Jobs
            </h1>
        </div>
    </div>
    <?php
    include('inc/connect.php');
    $query = 'SELECT * FROM jobs';
    $jobs = mysqli_query($con, $query);
    ?>
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Company</th>
                    <th scope="col">Location</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Posted Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $counter = 1; // Initialize the counter
                foreach ($jobs as $job) {
                ?>
                    <tr>
                        <td scope="row"><?php echo $counter; ?></td>
                        <td><a href="applications.php?job_id=<?= $job['job_id']; ?>"><?php echo $job['title']; ?></a></td>
                        <td><?php echo $job['description']; ?></td>
                        <td><?php echo $job['company']; ?></td>
                        <td><?php echo $job['location']; ?></td>
                        <td><?php echo $job['salary']; ?></td>
                        <td><?php echo date('Y-m-d', strtotime($job['posted_at'])); ?></td>
                    </tr>
                    <?php
                    $counter++; 
                } ?>
            </tbody>
        </table>
    </div>
</div>
<?php include('inc/footer.php');