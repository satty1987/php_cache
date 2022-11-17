<?php
// PHP program to delete a file named gfg.txt 
// using unlike() function 
$file_pointer = "products.json"; 
// Use unlink() function to delete a file 
if (!unlink($file_pointer)) { 
    echo ("$file_pointer cannot be deleted due to an error"); 
} 
else { 
    echo ("$file_pointer has been deleted"); 
} 

$file_pointer2 = "top.json"; 
// Use unlink() function to delete a file 
if (!unlink($file_pointer2)) { 
    echo ("$file_pointer2 cannot be deleted due to an error"); 
} 
else { 
    echo ("$file_pointer2 has been deleted"); 
} 

?> 