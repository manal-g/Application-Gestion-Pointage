<?php

 

$conn = new mysqli('localhost','root','','projet');
 

if($conn)
{
    echo "";
}
else{
    die(mysqli_error($conn));
}
?>