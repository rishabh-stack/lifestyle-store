<?php
 require 'includes/common.php';
?>
<?php
if (!isset($_SESSION['email'])) {
 header('location: index.php');
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

    <title>Success!</title>
    <style>
        .image {
            /* padding-top: 75px;
            padding-bottom: 580px; */
            text-align: center;
            color: #f8f8f8;
            background: url("Success.jpg") no-repeat center;
            background-size: cover;
            padding-top: 1px;
            padding-bottom: 1px;
      }
        
        footer {
            padding: 25px 0;
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
    <div class="image">
    <div class="container" style="position: relative;
    padding-top: 16%;
    padding-bottom: 2%;
    margin-top: 18%;
    margin-bottom: 2%;"><a style="color:orangered;" href="products.php"><h2>Click Here To Purchase Any Other Item</h2></a></div></div>
    <?php
     $user_id=$_SESSION["user_id"];
     $sql="UPDATE users_items  SET status='CONFIRMED' WHERE  user_id ='$user_id' ";
    $result=mysqli_query($conn,$sql);
    ?>
    
    
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
</script

</html>