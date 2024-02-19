
    <?php include('inc/nav.php'); ?>
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
        $query = 'SELECT * 
                    FROM jobs';
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
                    <th scope="col">Posting Date</th>
                </tr>
            </thead>
            <tbody>            
                    <?php foreach ($jobs as $job) {
                    ?>
                <tr>
                    <td scope="row">1</th>
                    <td><a href="applications.php?job_id=<?=$job['job_id'];?>"><?= $job['title'];?></td>
                    <td><?= $job['description'];?></td>
                    <td><?= $job['company'];?></td>
                    <td><?= $job['location'];?></td>
                    <td><?= $job['salary'];?></td>
                    <td><?= $job['posted_at'];?></td>
                </tr>
            <?php  } ?>
            </tbody>
        </table>
    </div>
</div>
</body>

</html>