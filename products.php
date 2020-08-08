<?php
 require 'includes/common.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>products</title>
    <style>
        footer {
            padding: 10px 0;
            background-color: #101010;
            color: #9d9d9d;
            bottom: 0;
            width: 100%;
            color: white;
            margin-top: 40px;
        }
        
        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
<?php
include 'includes/header.php';
?>

<?php
include 'includes/check-if-added.php';
?>
<?php
if($showALert)
{echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> You account has been created successfully .
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
?>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to our Lifestyle Store! </h1>
            <p class="lead">We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>

        </div>
        <div class="row" style=" padding-top: 20px; margin-top: 20px;">
            <div class="card col-md-3 col-sm-6">
                <img src="camera1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sony Cybershot</h5>
                    <p class="card-text"><b>Price:</b> <span style='font-size:20px; color: red;'>&#8377;</span> 36000</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added

 if (check_if_added_to_cart(1)) { 
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>

                </div>
            </div>
            <div class="card col-md-3 col-sm-6">
                <img src="camera2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Canon 850D</h5>
                    <p class="card-text"><b>Price:</b> <span style='font-size:20px; color: red;'>&#8377;</span> 40000</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added

 if (check_if_added_to_cart(2)) { 
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
                </div>
            </div>
            <div class="card col-md-3 col-sm-6">
                <img src="camera3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Nikon D750</h5>
                    <p class="card-text"><b>Price:</b> <span style='font-size:20px; color: red;'>&#8377;</span>50000</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added

 if (check_if_added_to_cart(3)) { 
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
                </div>
            </div>
            <div class="card col-md-3 col-sm-6">
                <img src="camera4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Lumix Leica</h5>
                    <p class="card-text"><b>Price:</b> <span style='font-size:20px; color: red;'>&#8377;</span>80000</p>
                                     <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added

 if (check_if_added_to_cart(4)) { 
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
                </div>
            </div>
        </div>
        <div class="row" style=" padding-top: 20px; margin-top: 20px;">
            <div class="card col-md-3 col-sm-6">
                <img src="watch1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Rolex Submariner</h5>
                    <p class="card-text"><b>Price:</b> <span style='font-size:20px; color: red;'>&#8377;</span>200000</p>
                                     <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added

 if (check_if_added_to_cart(5)) { 
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
                </div>
            </div>
            <div class="card col-md-3 col-sm-6">
                <img src="watch2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Oris Diving</h5>
                    <p class="card-text"><b>Price:</b> <span style='font-size:20px; color: red;'>&#8377;</span>560000</p>
                                     <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added

 if (check_if_added_to_cart(6)) { 
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
                </div>
            </div>
            <div class="card col-md-3 col-sm-6">
                <img src="watch3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Hublot Big-Bang</h5>
                    <p class="card-text"><b>Price:</b> <span style='font-size:20px; color: red;'>&#8377;</span>670000</p>
                                     <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added

 if (check_if_added_to_cart(7)) { 
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
                </div>
            </div>
            <div class="card col-md-3 col-sm-6">
                <img src="watch4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Calvin Klein Magnet</h5>
                    <p class="card-text"><b>Price:</b> <span style='font-size:20px; color: red;'>&#8377;</span>170000</p>
                                     <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added

 if (check_if_added_to_cart(8)) { 
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
                </div>
            </div>
        </div>
        <div class="row" style=" padding-top: 20px; margin-top: 20px;">
            <div class="card col-md-3 col-sm-6">
                <img src="shirt1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Louis Phillipe</h5>
                    <p class="card-text"><b>Price:</b> <span style='font-size:20px; color: red;'>&#8377;</span>1329</p>
                                     <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added

 if (check_if_added_to_cart(9)) { 
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
                </div>
            </div>
            <div class="card col-md-3 col-sm-6">
                <img src="shirt2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">RALPH LAUREN</h5>
                    <p class="card-text"><b>Price:</b> <span style='font-size:20px; color: red;'>&#8377;</span>1500</p>
                                     <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added

 if (check_if_added_to_cart(10)) { 
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
                </div>
            </div>
            <div class="card col-md-3 col-sm-6">
                <img src="shirt3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">BURBERRY</h5>
                    <p class="card-text"><b>Price:</b> <span style='font-size:20px; color: red;'>&#8377;</span>1700</p>
                                     <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added

 if (check_if_added_to_cart(11)) { 
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
                </div>
            </div>
            <div class="card col-md-3 col-sm-6">
                <img src="shirt4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">CHANEL</h5>
                    <p class="card-text"><b>Price:</b> <span style='font-size:20px; color: red;'>&#8377;</span>2000</p>
                                     <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added

 if (check_if_added_to_cart(12)) { 
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
                </div>
            </div>
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