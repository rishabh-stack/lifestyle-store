<?php
 require 'includes/common.php';
?>
<?php
if (isset($_SESSION['email'])) {
 header('location: products.php');
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>SignUp</title>
    <style>
        footer {
            padding: 10px 0;
            background-color: #101010;
            color: #9d9d9d;
            bottom: 0;
            width: 100%;
            color: white;
            position: absolute;
        }
    </style>
</head>

<body>

<?php
error_reporting(E_ERROR);
include 'includes/header.php';
?>
<?php
if($showError)
{echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Error!</strong> '.$showError.'
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  }
?>

    <div class="card" style="width: 40rem;margin-left: 460px; margin-top: 60px;">

        <div class="card-body">
            <h1 class="card-title">Create Account</h1>
            <hr>
            <p class="card-text">
                <form action="signup_script.php" method="post">
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault01">First name</label>
                            <input type="text" class="form-control" id="name"  name="name" placeholder="Enter First Name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault02">Last name</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Last Name" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="validationDefault03">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Address" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault01">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault01">Confirm Password</label>
                            <input type="password" class="form-control" id="cpassword" name="cpassword"placeholder="Confirm Password" required>
                        </div>
                    </div><br>
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Create Account</button>
                </form>
            </p>
            <hr>
            <div class="footer" style="text-align: center; height: 40px;">
                <a href="login.php" style="text-decoration: none; "> Have an account? Go to Login</a></div>
        </div>
    </div>
    <?php
include 'includes/footer.php';
?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
<script>
    $("#logout").on("click ", function() {
        window.location.href = "index.php "
    });
</script>

</html>