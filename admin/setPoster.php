<?php  
    $_SESSION['message'] = '';
    
    $mysqli = new mysqli('localhost', 'root','','loveroyalassembly');
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
       
            //$name = $mysqli->real_escape_string($_POST['name']);
            $avatar_path = $mysqli->real_escape_string('admin/image/'.$_FILES['avatar']['name']);
            
            //make sure the file type is image
            
            if(preg_match("!image!", $_FILES['avatar']['type']))
            {
                //copy images to image folder
                if(copy($_FILES['avatar']['tmp_name'], $avatar_path))
                {
                    //$_SESSION['name'] = $name;
                    $_SESSION['avatar'] = $avatar_path;
                    
                    $sql = "INSERT INTO  media(avatar) VALUES('$avatar_path')";
                    //If the query is successful we redirect to welcome page
                    if($mysqli->query($sql) === true)
                    {
                        $_SESSION['message'] = 'New Poster image added';
                       
                    }
                    else{
                        $_SESSION['message'] = 'Error 101: Failed to add new poster to the database';
                    }
                }
                else{
                    $_SESSION['message'] = 'File upload failed!';
                }
            }
            else{
                $_SESSION['message'] = 'Only JPG, PNG,JPEG and GIF images accepted!';
            }
        
    }
?>
<div class="page" style="color:cornsilk">
     <!-- displays validation error -->
     <?php include('errors.php'); ?>
    <h3 style=" height: 35px; border-radius: 10px; border: 1px solid #000; background-color:lightskyblue; text-align:center;">SET POSTER IMAGE !</h3>
    <hr>
    <form action="" method="post" enctype="multipart/form-data">
        <span style="color:red"><?= $_SESSION['message']; ?></span>
        <input type="file" name="avatar" />
        <input class="btn-primary btn" type="submit" name="set" value="CHANGE POSTER" />
    </form>
    <hr>
    
</div>