<?php
 $myArray = ["orange","lemon","pear","kiwi"];
$binaryArray = generateOrderedArray();
 print(binarySearch($binaryArray , 640));
      // print(linearSearch($myArray, "orange"));
       function linearSearch($array , $toFind){
           foreach( $array as $key => $val){
               if($val == $toFind){
                   return $key;
               }
           }
           return -1;
       }
     
    function binarySearch($array , $searchFor)
    {
        $low=0;
        $high =count($array)-1;
        $mid=0;
        
        while($low <= $high)
        {
            $mid = floor(($low+ $high)/2);
            $element = $array($mid);
            
            if($searchFor == $element){
                return $mid;
                
            } else if($searchFor < $element){
                $high=$mid - 1;
            } else{
                $low= $mid + 1;
                
            }
        }
        return -1;
    }
    function generateOrderedArray(){
        $array = [];
        for($i=0;$i<=99;$i++){
            $array[$i]=$i+10;
        }
        return $array;
    }
    