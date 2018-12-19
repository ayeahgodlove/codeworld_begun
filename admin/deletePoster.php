<?php
     $mysqli = new mysqli('localhost','root','','loveroyalassembly');
     if(isset($_POST['delete'])){
       $avatar_id = $_POST['id'];
        $sql = "DELETE FROM  media WHERE id = $avatar_id";
        $del= $mysqli->query($sql);
         echo '<script>alert("Post deleted Successfully!!")</script>';
}

?>
<div class="page" style="color:cornsilk">
      <h3 style="height: 35px; border-radius: 10px; border: 1px solid #000; background-color:lightskyblue; text-align:center; ">REMOVE POSTER !</h3>
      <hr>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="number" name="id" placeholder="FIELD ID" />
        <input class="btn-primary btn" type="submit" name="delete" value="REMOVE POSTER" />
    </form>
    <hr>
    <?php
         $mysqli = new mysqli('localhost','root','','loveroyalassembly');
            $sql = "SELECT * FROM  media";
            $result = $mysqli->query($sql);
            //$result = mysqli_query($sql)
            
            while($row = $result->fetch_assoc())
            {
                echo '<div class="responsive">';
                echo '<div class="gallery">';
                echo $row['id']."<br />";
                echo "<img src=".$row['avatar']." width='450' height='300'/>";
                echo '<br />';
                
                echo '</div>';
                echo '</div>';
            }
    ?>
    <div class="clearfix"></div>
</div>
