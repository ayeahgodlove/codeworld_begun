<?php 
require_once 'connection.php';
if(isset($_POST['delete'])){
       $post_id = $_POST['id'];
        $sql = "DELETE FROM  blog WHERE id = $post_id";
        $del = mysqli_query($conn, $sql);
    echo '<script>alert("Post deleted Successfully!!")</script>';
}


?>
<div class="page" style="color:cornsilk">
     <!-- displays validation error -->
     <?php include('errors.php'); ?>
    <h3 style="height: 35px; border-radius: 10px; border: 1px solid #000; background-color:lightskyblue; text-align:center;">REMOVE  POST !</h3>
    <hr>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="number" name="id" placeholder="FIELD ID" />
        <input class="btn-primary btn" type="submit" name="delete" value="REMOVE POST" />
    </form>
    <hr>
    

    <?php
  
    $_SESSION['avatar'] = "";
    require_once 'connection.php';
    $tittle = isset($_POST['title']);
    $author = isset($_POST['author']);
    $article = isset($_POST['article']);
    $link = isset($_POST['link']);
    
    $image = isset($_FILES['avatar']['name']);
    $image_type = isset($_FILES['avatar']['type']);
    $image_tmp = isset($_FILES['avatar']['tmp_name']);
    $avatar_path = 'image/'.$image; 
    $date = isset($_POST['date']);
    
    //Original version
    //mysql query
    $sql = "SELECT * FROM  blog ORDER BY date DESC  ";
    $result = mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)>0)
    {
        while($row = mysqli_fetch_assoc($result))
        {   
             $id = $row['ID'];
             $tittle = $row['title'];
             $author = $row['author'];
             $article = $row['article'];
             $link = $row['link'];
             $image = $row['avatar'];
             $date = $row['date'];
             
             //session_start();
             $_SESSION['ID'] = $id;
             $_SESSION['title'] = $tittle;
             $_SESSION['author'] = $author;
             $_SESSION['article'] = $article;
             $_SESSION['link'] = $link;
             $_SESSION['avatar'] = $avatar_path;
             $_SESSION['date'] = $date;
             
             echo '<p>';
             echo $id."<br />";
             echo $tittle." by ";
             echo $author;
             $date = $row['date'];
             echo $date;
             echo '</p>';
             echo '<p>';
             echo $article."<br />";
             echo '</p>';
             echo '<p>';
            echo "<a href=".$link."/>";
            echo $link."</a>";
             echo '</p>';
             echo '<p>';
             //echo "<img style='float:left; border-radius:5px; border:5px solid #000;' src=controllers/".$row['avatar']." width='220' height='200'/>";
             echo '</p>';
           
        }
            
    }
     mysqli_close($conn);
?>

</div>