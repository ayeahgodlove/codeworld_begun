<?php
            $mysqli = new mysqli('localhost','root','','loveroyalassembly');
            $sql = "SELECT * FROM  media";
            $result = $mysqli->query($sql);
            //$result = mysqli_query($sql)
            
            while($row = $result->fetch_assoc())
            {
                echo '<div class="responsive">';
                echo '<div class="gallery">';
                
                echo "<img src=".$row['avatar']." width='450' height='300'/>";
                echo '<br />';
                
                echo '</div>';
                echo '</div>';
            }
        ?>
