<?php
require 'includes/common.php';

?>

<?php


if(!isset($_SESSION['email']))
    {
        header("Location: index.php");
    }
session_unset();
session_destroy();
mysqli_close($conn);

header("Location: index.php");

?>
