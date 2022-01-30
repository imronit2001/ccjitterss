<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/registration.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link href="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js">
    <title>Registration Form</title>
  </head>
  <body>
  <form action="registration-connect2.php" method="POST">
      <div style="width:50%; margin:auto; position:center; margin-top:10%;">
                            <div class="mt-3 px-3"> <input class="form-control" placeholder="Name" name="Name" required> </div>
                            <div class="mt-3 px-3"> <input class="form-control" type="email" placeholder="Email" name="Email" required> </div>
                            <div class="mt-3 px-3"> <input class="form-control" type="text" placeholder="Phone" name="Phone" required> </div>
                            <div class="mt-3 px-3"> <input class="form-control" type="text" placeholder="Address" name="Address" required> </div>
                            <div class="mt-3 px-3"> <input class="form-control" type="text" placeholder="City" name="City" required> </div>
                            <div class="mt-3 px-3"> <input class="form-control" type="text" placeholder="State" name="State" required> </div>
                            <div class="mt-3 px-3"> <input class="form-control" type="password" placeholder="Password" name="password" required> </div>
                            <div class="mt-3 d-grid px-3"> <button type="submit"
                                    class="btn btn-primary btn-block btn-signup text-uppercase"> <span>Register</span>
                                </button> </div>
                </div>
                            </form>

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