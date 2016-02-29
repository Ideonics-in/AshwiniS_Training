<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$fruits = ["fruit1" => "Apple" , "fruit2" =>"Orange" , "fruit3" => "pear"];
 foreach($fruits as $key => $fruit){
     print($key ."-" . $fruit . "<br />");
}