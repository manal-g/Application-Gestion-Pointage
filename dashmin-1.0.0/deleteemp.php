<?php
    include 'Config.php';
    if(isset($_GET['deleteid']))
    $matriculeemp=$_GET['deleteid'];

    $sql="delete from `employe` where MATRICULE_EMP='$matriculeemp'";
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