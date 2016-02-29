 <?php
       $myArray = ["orange","lemon","pear","kiwi"];
       print(linearSearch($myArray, "orange"));
       function linearSearch($array , $toFind){
           foreach( $array as $key => $val){
               if($val == $toFind){
                   return $key;
               }
           }
           return -1;
       }
        
