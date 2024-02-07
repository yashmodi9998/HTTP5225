<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-5 mt-3 mb-5">
                    Student Catalog
                </h1>

            </div>
        </div>
        <?php
        $con = mysqli_connect("localhost", "root", "", "http5225");
        $query = 'SELECT * 
                    FROM students';
        $students = mysqli_query($con, $query);
        // echo "<pre>";
        // print_r($students);
        // echo "</pre>";

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


                            <p class="card-text">Grade <?= $student['grade'] ?></p>
                            <p class="card-text">Marks <?= $student['marks'] ?></p>
                        </div>
                    </div>

                </div>
            <?php  } ?>

        </div>

    </div>
</body>

</html>