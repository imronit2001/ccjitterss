<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/registration.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <title>Registration Form</title>
    <link rel="shortcut icon" type="image/jpg" href="img/ccjitterssblack.png"/>
</head>
<body>
    <div class="wrapper">
        <div class="h5 font-weight-bold text-center mb-3">Registration @ CC JITTERSS</div>
        <form action="registration-connect.php" method="post" enctype="multipart/form-data">
            <div class="form-group d-flex align-items-center">
                <input type="text" name="Name" class="form-control" placeholder="Name" required>
            </div>
            <div class="form-group d-flex align-items-center">
                <input type="email" name="Email" class="form-control" placeholder="Email" >
            </div>
            <div class="form-group d-flex align-items-center">
                <input type="text" name="Phone" class="form-control" placeholder="Phone" required>
            </div>
            <div class="form-group d-flex align-items-center">
                <input type="text" name="Address" class="form-control" placeholder="Address" required>
            </div>
            <div class="form-group d-flex align-items-center">
                <input type="text" name="City" class="form-control" placeholder="City" required>
            </div>
            <div class="form-group d-flex align-items-center">
                <input type="text" name="State" class="form-control" placeholder="State" required>
            </div>
            <div class="form-group d-flex align-items-center">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <div class="form-group d-flex align-items-center">
                <input type="file" name="photo1" class="form-control" >
            </div>
            <input type="submit" value="Submit">
            <!-- <input class="btn btn-primary mb-3" type="submit" value="Submit"> -->
        </form>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>