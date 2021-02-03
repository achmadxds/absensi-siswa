<?php  
  include 'include.php';
  Register();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="css/style.css">

  <title>Register</title>
</head>
<body>



  <div class="content">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="form-block">
                <div class="mb-4">
                  <h3>Sign Up to <strong>Colorlib</strong></h3>
                  <p class="mb-4"></p>
                </div>
                <form action="" method="POST">
                  <div class="form-group first">
                    <label for="username">Email</label>
                    <input type="email" class="form-control" name="email">
                  </div>
                  <div class="form-group last">
                    <label for="username">Username</label>
                    <input type="username" class="form-control" name="username">
                  </div>
                  <div class="form-group last mb-4">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password">
                  </div>
                  <div class="form-group first">
                    <label for="passwordC">Confirm Password</label>
                    <input type="password" class="form-control" name="confirmPassword">
                  </div>

                  <div class="d-flex mb-5 align-items-center">
                    <label class="control control--checkbox mb-0"><span class="caption">Agree With Rules</span>
                      <input type="checkbox" checked="checked"/>
                      <div class="control__indicator"></div>
                    </label>
                  </div>

                  <input type="submit" value="Sign Up" class="btn btn-pill text-white btn-block btn-primary" name="register">
                </form>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>


  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>