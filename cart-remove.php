<?php
require 'includes/common.php';

?>
<?php
$user_id=$_SESSION['user_id'];
$item_id = $_GET['id'];

$sql="DELETE FROM users_items
WHERE item_id='$item_id' AND user_id='$user_id'";
$result=mysqli_query($conn,$sql);
if($result){
    header('location: cart.php');
}
?>