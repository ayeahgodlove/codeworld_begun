<?php  
    $db = mysql_connect("localhost","root","");
    mysql_select_db("loveroyalassembly",$db);
    
    $get = mysql_query("SELECT * FROM biblestudy ORDER BY rand() LIMIT 1");
    while($show = mysql_fetch_array($get)){
    echo $show['verse']."<br />";
    echo $show['quote']."<br />";
    }
    
?>
