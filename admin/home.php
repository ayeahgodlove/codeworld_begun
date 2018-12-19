<?php 
    $username = $_SESSION['username'];
?>
<div class="page" style="color:cornsilk">
     <!-- displays validation error -->
     <?php include('errors.php'); ?>
    <h3 style=" text-align: center;  height: 35px; border-radius: 5px; border: 1px solid #000; background-color:lightskyblue; ">Welcome <?= $username; ?> !</h3>
    <hr>
    <h4 style="text-align:center ">Create Account</h4>
    <form action="admin/registrationController.php" method="post" enctype="multipart/form-data">
        <input type="text" name="username" placeholder="USERNAME" />
        <input type="email" name="email" placeholder="EMAIL" />
        <input type="password" name="password1" placeholder="PASSWORD" />
        <input type="password" name="password2" placeholder="RE-PASSWORD" />
        <input type="submit" name="submit" value="CREATE ACCOUNT" />
    </form>
    <hr>
    

</div>