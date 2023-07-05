<?php
    session_start();

    if(isset($_SESSION['username'])){
        
        include 'homepage.php';
        
    }

    else{
        echo "<script>alert('First Login to Access Homepage!!')</script>";
        echo "<script>location.href='login.php'</script>";
        
    }
?>