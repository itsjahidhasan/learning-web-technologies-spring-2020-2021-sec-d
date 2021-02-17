<?php

$my_arr= array(array("1","2","3","A"),
array("1","2","B","C"),
array("1","D","E","F"));

for($i=0;$i<=2;$i++)
{
    for($j=0;$j<=3;$j++)
    {
      echo $my_arr[$i][$j]."|";
    }
    echo "<br>";
}
echo "<br>--------------------------------<br>";

$my_arr1= array(
array("1 2 3","A    "),
array("1 2  ","B C  "),
array("1    ","D E F"));
for($i=0;$i<=2;$i++)
{
    for($j=0;$j<=1;$j++)
    {
      echo $my_arr1[$i][$j]."|";
    }
    echo "<br>";
}



?>