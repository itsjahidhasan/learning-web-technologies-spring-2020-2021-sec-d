<?php
  $x='good';
  $y = array('same','good','nice','fail');
  for ($i=0; $i <count($y) ; $i++) { 
    if ($x==$y[$i]) {
           echo "Match Found";
                break;

            if ($x!==$y[$i]) {
                $i++;
            }
            else{echo "Match not Found";}
         }
       
    }
?>