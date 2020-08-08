<?php
 require 'includes/common.php';
?>
<?php
if (!isset($_SESSION['email'])) {
 header('location: products.php');
}
?>
<?php
$user_id=$_SESSION["user_id"];

$sql="SELECT * FROM items a inner join users_items b on a.id=b.item_id where user_id='$user_id' ";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);



?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Cart!</title>
    <style>
        .row {
            height: 100px;
            text-align: center;
            font-size: large;
        }
        
        footer {
            padding: 10px 0;
            background-color: #101010;
            color: #9d9d9d;
            bottom: 0;
            width: 100%;
            color: white;
            margin-top: 40px;
            position: fixed;
            left: 0;
   
        }
    </style>
</head>

<body>
<?php
 require 'includes/header.php';
?>
   <div class="container my-5">
        <div class="row ">
            <div class="col-md-3 col-sm-6 border border-danger ">
                <p style="margin-top: 30px;"><b>Item Number</b></p>
            </div>
            <div class="col-md-3 col-sm-6 border border-danger">
                <p style="margin-top: 30px;"><b>Item Name</b></p>
            </div>
            <div class="col-md-3 col-sm-6 border border-danger">
                <p style="margin-top: 30px;"><b>Price</b></p>
            </div>
            <div class="col-md-3 col-sm-6 border border-danger"></div>
        </div>
        
        <?php
        $sum=0;
        
        while($row = mysqli_fetch_array($result)) { 
            $sum=$sum+$row['price'];
            
            echo  " <div class='row'> <div class='col-md-3 col-sm-6 border border-danger'><p style='margin-top: 30px;'><b>{$row['item_id']}</b></p></div>
             <div class='col-md-3 col-sm-6 border border-danger'><p style='margin-top: 30px;'><b>{$row['name']}</b></p></div>
              <div class='col-md-3 col-sm-6 border border-danger'><p style='margin-top: 30px;'><b><span style='font-size:20px; color: red;'>&#8377;</span>{$row['price']}</b><p></div>
             <div class='col-md-3 col-sm-6 border border-danger'><p style='margin-top: 30px;'> <a style='margin-top: 5px;' href='cart-remove.php?id={$row['item_id']}'class='btn btn-danger'> Remove</a></p></div></div>";
        
    }
        ?></P>
        
        <div class="row">
            <div class="col-md-3 col-sm-6 border border-danger"></div>
            <div class="col-md-3 col-sm-6 border border-danger">
            <p style="margin-top: 30px;"><b>Total</b></p>
            </div>
            <div class="col-md-3 col-sm-6 border border-danger">
            <p style="margin-top: 30px;">  <b><span style='font-size:20px; color: red;'>&#8377;</span><?php echo $sum; ?></b><p>
            </div>
            <div class="col-md-3 col-sm-6 border border-danger"><button id="confirm" style="margin-top: 30px;" type="button" class="btn btn-success">Confirm Order</button></div>
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
    $("#confirm ").on("click ", function() {
        window.location.href = "success.php "
    });
</script>

</html>