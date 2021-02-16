<?php
function rect_area($length = 40, $width = 25) 
{
    $area = $length * $width;
    echo "Length:".$length."\n"."width:".$width."\n";
    echo "The area Of Rectangle = " . $area ."\n";
}
rect_area(); 

 

function rect_perimeter($length = 40, $width = 25) 
{
    $perimeter = 2*($length * $width);
    echo "The perimeter Of Rectangle = " . $perimeter ;
}
rect_perimeter(); 

 

?>