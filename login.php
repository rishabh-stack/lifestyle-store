<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Login</title>
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
 require 'includes/header.php';
?>

    <div class="card" style="width: 40rem;margin-left: 460px; margin-top: 60px;">

        <div class="card-body">
            <h1 class="card-title">Login</h1>
            <hr>
            <p class="card-text">
                <form action=" login_submit.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember Password</label>
                    </div>
                    <button type="login" class="btn btn-primary">Login</button>
                </form>
            </p>
            <hr>
            <div class="footer" style="text-align: center; height: 40px;">
                <a href="sign.php" style="text-decoration: none; ">Don't have an account? Sign up!</a></div>
        </div>
    </div>
    <?php
 require 'includes/footer.php';
?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
<script>
   
    $("#logout").on("click ", function() {
        window.location.href = "logout.php "
    });
    $("#contact").on("click ", function() {
        window.location.href = "contact.php "
    });
    $("#cart").on("click ", function() {
        window.location.href = "cart.php "
    });
    $("#login ").on("click ", function() {
        window.location.href = "login.php "
    });
    $("#sign ").on("click ", function() {
        window.location.href = "sign.php "
    });
</script>

</html>