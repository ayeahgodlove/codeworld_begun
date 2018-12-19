<?php  
    session_start();
    $_SESSION['message'] = '';
    
    $mysqli = new mysqli('localhost','root','','loveroyalassembly');
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
            $tittle =mysql_real_escape_string($_POST['title']);
            $author =mysql_real_escape_string($_POST['author']);
            $article = mysql_real_escape_string($_POST['article']);
            $link = mysql_real_escape_string($_POST['link']);
            $avatar_path = $mysqli->real_escape_string('image/'.$_FILES['avatar']['name']);
            
            //make sure the file type is image
            
            if(preg_match("!image!", $_FILES['avatar']['type']))
            {
                //copy images to image folder
                if(copy($_FILES['avatar']['tmp_name'], $avatar_path))
                {
                    $_SESSION['title'] = $tittle;
                    $_SESSION['author'] = $author;
                    $_SESSION['article'] = $article;
                    $_SESSION['link'] = $link;
                    $_SESSION['avatar'] = $avatar_path;
                    
                    $sql = "INSERT INTO blog (title,author, article,link, avatar) VALUES('$tittle', '$author', '$article', '$link', '$avatar_path')";

                    //If the query is successful we redirect to welcome page
                    if($mysqli->query($sql) === true)
                    {
                        echo '<script>alert("Article Posted Successfully")</script>';
                        echo '<a href="../adminpage.php" >Back</a>';
                    }
                    else{
                        $_SESSION['message'] = 'Error 101: Post not updated!';
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