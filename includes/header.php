<nav class="navbar navbar-dark bg-dark">
 <a class="navbar-brand" href="index.php">Lifestyle Store</a>
 

 <?php
 if (isset($_SESSION['email'])) {
 ?>
 <button id="cart" type="button" style="position: absolute;right: 150px; " class="btn btn-dark"><span style='font-size:20px;'>&#128722;</span>Cart</button>
 <button id="contact" type="button" style="position: absolute; right: 260px; " class="btn btn-dark">Contact</button>
 <button id="logout" type="button" style="position: absolute; right: 60px; " class="btn btn-dark">Logout</button>
 <?php
 } else {
    ?>
 
   <button id="login" type="button" style="position: absolute;right: 150px; " class="btn btn-dark"><span style='font-size:20px;'>&#128209;</span>Login</button>
   <button id="sign" type="button" style="position: absolute; right: 260px; " class="btn btn-dark"><span style='font-size:20px;'>&#128129;</span>SignUp</button>
   
    <?php
    }
    ?>
    
   </nav>
   