 <?php
            $mysqli = new mysqli('localhost','root','','loveroyalassembly');
            $sql = "SELECT * FROM  blog";
            $result = $mysqli->query($sql);
            //$result = mysqli_query($sql)
            
            while($row = $result->fetch_assoc())
            {
              

                    echo '<div style="margin-top:0px; padding:0px;  border-radius:5px; border:2px solid #000; font-family:Times New Roman; font-size:18px">';
                     echo "<img style='float:left; border-radius:5px; border:5px solid #000;' src=admin/".$row['avatar']." width='220' height='200'/>";
                    echo "<h3 style='text-align:center; color:forestgreen'>".$row['title']."</h3>";
                    echo '<br />';
                    echo $row['article'];
                    echo '<br />';
                    echo "<a href='https://".$row['link']."' >".$row['link']."</a>";
                      echo '<br> By  ';
                    echo $row['author']." ";
                    echo $row['date'];
                    echo '</div>';           
                    echo '<div class="clearfix"></div>';
                 
                                
                

                
                
            }
        ?>