<?php 
    //This file is all about database connection
$conn = mysqli_connect('localhost','root','','loveroyalassembly');

//testing connection
if(!$conn)
{
    echo "Database connection failed";
}

?>