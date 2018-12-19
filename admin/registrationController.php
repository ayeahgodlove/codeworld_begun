<?php
//session_start();
//Defining variables
$username = "";
$email = "";
$password = "";
$errors = array(); 
//calls connection
 require_once 'connection.php';
 if(@isset($_POST['submit']))
 {
     $username = mysql_real_escape_string($_POST['username']);
     $email = mysql_real_escape_string($_POST['email']);
     $password1 = mysql_real_escape_string($_POST['password1']);
     $password2 = mysql_real_escape_string($_POST['password2']);
    
     
     //Ensuring tht form fields are properly entered
     if(empty($username))
     {
         array_push($errors, "USERNAME is a required field"); 
     }
      if(empty($email))
     {
         array_push($errors, "EMAIL is a required field"); 
     }
      if(empty($password1))
     {
         array_push($errors, "PASSWORD is a required field"); 
     }
     if($password1 != $password2)
     {
         array_push($errors, "PASSWORD fields donot match");
     }
     
     //if there are no errors saves user to database
     if(count($errors) == 0)
     {
          $password = MD5($password1);
         $sql = "INSERT INTO accounts(username, email, password) values('$username', '$email', '$password')";
         $result = mysqli_query($conn,$sql);
         
         echo '<script>alert("Account successfully registered")</script>';
            echo "<button><a href='../adminpage.php'>Back</a></button>";
     }
 }
 //login
 if(isset($_POST['login']))
 {
     $username = mysql_real_escape_string($_POST['username']);
     $password1 = mysql_real_escape_string($_POST['password']);
    
     //Ensuring tht form fields are properly entered
     if(empty($username))
     {
         array_push($errors, "USERNAME is a required field"); 
     }
      if(empty($password1))
     {
         array_push($errors, "PASSWORD is a required field"); 
     }
     if(count($errors) == 0)
     {
         $password = MD5($password1);
         
         $query = "SELECT * FROM accounts WHERE username ='$username' AND password ='$password' ";
         $result =  mysqli_query($conn, $query);
         if(mysqli_num_rows($result)>0)
         {
            while($row = mysqli_fetch_assoc($result))
             {
                 $username = $row['username'];
                    
                 $_SESSION['username'] = $username;
                 $_SESSION['success'] = "You are now logged in";
                 include_once './adminpage.php';
             }
         }
         else{
             array_push($errors, "USERNAME and PASSWORD donot match database records");
             header('location:./signin.php');
         }
     }
 }
 
//logout
 if(isset($_GET['logout']))
 {
     session_destroy();
     unset($_SESSION['username']);
     header('location:../signin.php');
     
 }

 ?>