<?php 
    $results = "";
//Require database connection
require_once 'connection.php';
if(isset($_POST['subscribe']))
{
    $customer_name = mysql_real_escape_string($_POST['customer_name']);
    $customer_email = mysql_real_escape_string($_POST['customer_email']);
    if(empty($customer_email))
     {
        $results = "Email is a required field"; 
     }
        //Mysqli_query
        $sql_query = "INSERT INTO newsletter(customer_name,customer_email) values('$customer_name','$customer_email')";
        $query = mysqli_query($conn,$sql_query);
        
        $results = "Thanks for subscribing to our newsletters";
}

?>
