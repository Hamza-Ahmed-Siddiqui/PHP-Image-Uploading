<?php
$conn = mysqli_connect("localhost","root","","imageupload");
if (!$conn) {
echo "connection refuse";
}
else {
    echo "connection established";
}

$id = $_GET['id'];
$row = mysqli_fetch_assoc(mysqli_query($conn,"select * from user WHERE id='$id'"));
?>

<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<title>Edit data</title>
</head>
<body>


<div class="container card card-body">
    <h1>Form Data</h1>
    <form action="update.php" method="post">
            <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">ID</label>
                <div class="col-sm-10">
                    <input type="text"  value="<?= $row['id'] ?>"  class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter your Name" name="id">
                </div>
                <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email"  value="<?= $row['email'] ?>"  class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter your Name" name="txtname">
                </div>
                <label for="colFormLabel" name="email" class="col-sm-2 col-form-label col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password" value="<?= $row['password'] ?>"  min="0" class="form-control form-control-sm" id="colFormLabel" placeholder=" Enter your Age" name="txtage">
                </div>
                <div class="form-group">
                <label for="exampleFormControlFile1">Image</label>
                <input type="file" name="image" value="<?= $row['image'] ?>" class="form-control-file" id="exampleFormControlFile1">
                </div>
            </div>
        <input type="submit" class="btn btn-primary" value="submit"> 
    </div>
    



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>