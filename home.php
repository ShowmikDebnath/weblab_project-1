<?php
    session_start();

    if(isset($_SESSION['username'])){
        //echo "welcome ". $_SESSION['username'];
        //include 'product.php';
        include 'homepage.php';
        //echo "<br><a href='logout.php'><input type='button' class='btn btn-danger' value='logout' name='logout'></a>";
    }

    else{
        echo "<script>alert('First Login to Access Homepage!!')</script>";
        echo "<script>location.href='login.php'</script>";
        
    }
?>