<?php
 require 'includes/common.php';
?>
<?php
$email=$_POST["email"];
$name=$_POST['name'];
$lastname=$_POST['lastname'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$showAlert=FALSE;

if($password==$cpassword){
   $sql= "INSERT INTO `users` (`name`,`lastname`,`email`,`password`,`date`) VALUES('$name','$lastname','$email','$password',current_timestamp())";
    
    $result=mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result)) {
        $user_id=$row["id"];
    }

    if($result)
    { 
        session_start();
        $_SESSION["email"]= $email;
        $_SESSION["user_id"]= $user_id;
        $showAlert=True;
        header('location: products.php');

    }
    else{
        
            echo "Error: " . mysqli_error($conn);
        
    }
}
else{
    $showError= "password does not match with confirm password";
    header('location: sign.php');
}
?>