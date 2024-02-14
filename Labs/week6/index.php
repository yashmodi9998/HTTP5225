<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <?php include('inc/nav.php'); ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-5 mt-3 mb-5">
                    Student Catalog
                </h1>

            </div>
        </div>
        <?php
        include('inc/connect.php');
        $query = 'SELECT * 
                    FROM students';
        $students = mysqli_query($con, $query);


        ?>

        <div class="row">
            <?php foreach ($students as $student) {
                if ($student['marks'] < 50) {
                    $bgClass = 'bg-danger';
                } else {
                    $bgClass = 'bg-success';
                }
            ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= $student['imageURL'] ?>" class="card-img-top" alt="...">
                        <div class="card-body <?= ' ' . $bgClass ?>">
                            <h5 class="card-title"><?= $student['fname'] . ' ' . $student['lname'] ?> </h5>
                            <p class="card-text">Marks <?= $student['marks'] ?></p>
                        </div>
                        <div class="card-footer">
                            <form action="inc/deletestudent.php" method="POST">
                                <input type="hidden" name="id" value="<?= $student['id']; ?>">
                                <button type="submit" name="deleteStudent" class="btn btn-sm btn-warning">Delete</button>
                            </form>
                            <form action="update.php" method="POST">
                                <input type="hidden" name="id" value="<?= $student['id']; ?>">
                                <button type="submit" name="updateStudent" class="btn btn-sm btn-warning">Update</button>
                            </form>
                        </div>
                    </div>

                </div>
            <?php  } ?>

        </div>

    </div>
</body>

</html>