<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <?php include('inc/nav.php');
    include('inc/connect.php');
    if (isset($_POST['id'])) {

        $id = $_POST['id'];


        $query = ("SELECT * FROM students WHERE id=$id");
        $data = mysqli_query($con, $query);

        while ($rows = mysqli_fetch_array($data)) {
            //print_r($rows);

    ?>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="display-5 mt-3 mb-5">
                            Update Student Grade
                        </h1>

                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <form method="Post" action="inc/updatestudent.php">
                            <input type="hidden" name="id" value="<?= $rows['id']; ?>">

                            <div class="mb-3">
                                <label for="fname" class="form-label">First Name</label>
                                <input type="text" name="fname" value="<?= $rows['fname']; ?>" class="form-control" id="fname" aria-describedby="First Name">
                            </div>
                            <div class="mb-3">
                                <label for="lname" class="form-label">Last Name</label>
                                <input type="text" name="lname" value="<?= $rows['lname'] ?>" class="form-control" id="lname" aria-describedby="Last Name">
                            </div>
                            <div class="mb-3">
                                <label for="marks" class="form-label">Marks</label>
                                <input type="number" name="marks" class="form-control" value="<?= $rows['marks'] ?>" id="marks" aria-describedby="Marks">
                            </div>

                            <div class="mb-3">
                                <label for="imageURL" class="form-label">URL </label>
                                <input type="text" name="imageURL" value="<?= $rows['imageURL']; ?>" class="form-control" id="imageURL" aria-describedby="URL">
                            </div>
                            <button type="submit" name="updateGrade" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>

            </div>
</body>
<?php
        }
    } else {
        echo "no data";
    }
?>

</html>