<?php
     //Error messages
    $_SESSION['message'] = '';
    //connection
    require_once 'connection.php';

if(isset($_POST['submit']) )
{
    $verse = mysql_real_escape_string($_POST['verse']);
    $quotes = mysql_real_escape_string($_POST['quote']);
    
    $_SESSION['verse'] = $verse;
    $_SESSION['quote'] = $quotes;
     //Original version
    //mysql query
    $sql = "INSERT INTO biblestudy (verse, quote) VALUES('$verse', '$quotes')";
    
    // Querying
    $result = mysqli_query($conn,$sql);
     if($result)
        {
           
           echo '<script>alert("Article Posted Successfully")</script>';
           echo '<a href="../adminpage.php" >Back</a>';
            
        }
        else
        {
           $_SESSION['message'] = "Process Failed: ERROR 100";
        }
}

?>