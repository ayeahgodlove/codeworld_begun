<?php 
if(isset($_GET['e']))
{
    include_once 'connection.php';
    $customer_email = $_GET['e'];
    
    $sql_delete = mysqli_query($conn,"DELETE FROM newsletter WHERE customer_email = '$customer_email' LIMIT 1 ");
    if(!$sql_delete)
    {
        echo "Sorry there seeems to be a problem removing your listing. <br /> Please try again later";
    }
    else{
        echo "it is done. Please don't go";
    }
}
?>