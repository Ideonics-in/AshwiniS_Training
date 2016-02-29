
        <?php
        require("config.php");
        
     
        
     $query = mysql_query("SELECT * FROM 'users'");
     while($row = mysql_fetch_assoc($query)){
       print($row['name']);  
     }
     
     