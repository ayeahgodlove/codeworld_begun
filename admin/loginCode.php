<?php
    require_once ('connection.php');
    $username = $email = $password = $pass ="";
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $pass = md5($password);
    
    $sql = "SELECT * FROM accounts WHERE username ='$username' AND email ='$email' AND password= '$pass'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) >0)
    {
        while( $rows = mysqli_fetch_assoc($result))
        {
            $id = $rows['ID'];
            $username = $rows['username'];
            $email = $rows['email'];
            
            session_start();
            $_SESSION['id'] = $id;
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
        }
        header('location:../adminpage.php');
    }
    else
    {
        
        echo '<script>alert("Invalid USERNAME and PASSWORD!!!")</script>';
        
    }
?>
<link rel="stylesheet" type="text/css" href="../resources/css/bootstrap-grid.min.css" />
<link rel="stylesheet" type="text/css" href="../resources/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="../resources/css/w3.css" />
<a class="btn-danger btn" href="../signin.php" >Back</a>