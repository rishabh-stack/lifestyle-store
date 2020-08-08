<?php
include 'includes/common.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Contact us</title>
    <style>
        footer {
            padding: 10px 0;
            background-color: #101010;
            color: #9d9d9d;
            bottom: 0;
            width: 100%;
            color: white;
        }
    </style>
</head>

<body>
<?php
include 'includes/header.php';
?>

    <div class="jumbotron jumbotron-fluid">

        <h2>Contact Details</h2>
        <hr>
        <p><b>Lifestyle Stores</b><br> South Block, Raisina Hill<br> New Delhi-110011<br> Phone No:+91-90000 00000
            <br> Email:Lifestylestores@gmail.com
        </p>

    </div>
    <hr>

    <div class="card" style="width: 60rem;">

        <div class="card-body">
            <h2 class="card-title">Send Us a Message</h2>
            <p class="card-text">

                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Full Name</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Phone Number</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                    </div>
                </form>
            </p>
            <a href="products.php" class="btn btn-primary">Send Message</a>
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