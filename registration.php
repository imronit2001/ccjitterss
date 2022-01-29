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
  </head>
  <body>
    <div class="wrapper">

        <div class="h5 font-weight-bold text-center mb-3">Registration @ CC JITTERSS</div>
        <form action="registration-connect.php" method="post">
        <div class="form-group d-flex align-items-center">
            <div class="icon"><span class="far fa-user"></span></div> <input autocomplete="off" type="text" name="Name" class="form-control" placeholder="Name" required>
        </div>
        <div class="form-group d-flex align-items-center">
            <div class="icon"><span class="far fa-envelope"></span></div> <input autocomplete="off" name="Email" type="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="form-group d-flex align-items-center">
            <div class="icon"><span class="fas fa-phone"></span></div> <input autocomplete="off" type="text" name="Phone" class="form-control" placeholder="Phone" required>
        </div>
       
        <div class="form-group d-flex align-items-center">
            <div class="icon"><span class="fas fa-map-marker-alt"></span></div> <input  name="Address" type="text" class="form-control" placeholder="Address" required>
        </div>
        <div class="form-group d-flex align-items-center">
            <div class="icon"><span class="fas fa-map-marker-alt"></span></div> <input  name="City" type="text" class="form-control" placeholder="City" required>
        </div>
        <div class="form-group d-flex align-items-center">
            <div class="icon"><span class="fas fa-map-marker-alt"></span></div> <input  name="State" type="text" class="form-control" placeholder="State" required>
        </div>
        <div class="form-group d-flex align-items-center">
            <div class="icon"><span class="fas fa-key"></span></div> <input  type="password" name="password" class="form-control" placeholder="Password" required>
            <div class="icon btn"><span class="fas fa-eye-slash"></span></div>
        </div>
        <div class="mb-2"> <label class="option">Remember me <input type="checkbox" checked> <span class="checkmark"></span> </label> </div>
        <button class="btn btn-primary mb-3" type="submit">Signup</button>
       
        
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