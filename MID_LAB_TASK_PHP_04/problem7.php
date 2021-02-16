<?php

 

$arr=["1st","2nd" ,"3th"];

 


 for($x=1;$x<=3;$x++)
{
   for ($y=1;$y<=$x;$y++)
    {
     echo "*";
        if($y< $x)
         {
           echo " ";
         }
     }
 echo "\n";
}

 

echo "\n";

 


// print the number
$number = range(3,1);  
for($i=0; $i<5; $i++)
{   
  for($j=2; $j>=$i; $j--)
  {  
    echo $number[$j];  
    }  
 echo "\n";
}  


$my_arr[3][3] = array(array("A"," "," "),
array("B","C"," "),
array("D","E","F")
);  
for($a=0; $a<2;$a++)
{   
  for($b=0; $b<=2; $b++)
  {

    echo $my_arr[$a][$b];
    
      
    }
   echo "\n";
   
}  

 

 
?>