<?php
 require 'includes/common.php';
?>
<?php

$item_id = $_GET['id'];
$user_id=$_SESSION['user_id'];

$sql="INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";

$result=mysqli_query($conn,$sql);
if($result){
header('location: products.php');
}
else{
        
    echo "Error: " . mysqli_error($conn);

}
?>