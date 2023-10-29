<?php
    include 'Config.php';
    if(isset($_GET['deleteid']))
    $matriculetech=$_GET['deleteid'];

    $sql="delete from `technicien` where MATRICULE_TECH='$matriculetech'";
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