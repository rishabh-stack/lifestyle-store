<?php
 require 'includes/common.php';
?>
<?php
$email=$_POST["email"];
$password=$_POST['password'];

md5($password);


   $sql= "Select * from users where email='$email' AND password='$password'";
    
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    while($row = mysqli_fetch_array($result)) {
        $user_id=$row["id"];

    }
    if($num==1)
    { 
    
      
        $_SESSION["email"]= $email;
        $_SESSION["user_id"]=$user_id;
 
      
        header('location: products.php');


    }
    else{
        
        echo "<h1>404!</h1><br><h1>Invalid credentials</h1>";
        
    }

    

?>