
<?php
error_reporting(E_ERROR);
function check_if_added_to_cart($item_id){
 
include 'includes/common.php';
 $user_id=$_SESSION["user_id"];
 $sql="SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' and
status='Added to cart'";
$result=mysqli_query($conn,$sql);

if( mysqli_num_rows($result)>= 1)
{
    return 1;
}
else{
    return 0;
}
}

 ?>