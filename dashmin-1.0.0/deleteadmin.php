<?php
    include 'Config.php';
    if(isset($_GET['deleteid']))
    $matriculead=$_GET['deleteid'];

    $sql="delete from `administrateur` where MATRICULE_ADM='$matriculead'";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        //echo "Les données sont supprimer avec succées ";
        header('location:index.php');
    }
    else{
        die(mysqli_error($conn));
    }

?>