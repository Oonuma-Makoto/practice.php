<?php
 function max_array($arr){

 $result = $arr[0];
 foreach($arr as $a){
    if($result < $a){
        $result = $a;
    }
 }

 return $result;
 }
 echo max_array([15,21,1,4,69]);
?>