
 <?php
             include 'Config.php';
            
             $query2="select * from afficheur_lcd";
             $resultat2=mysqli_query($conn,$query2);

             $query3="select * from rfid";
             $resultat3=mysqli_query($conn,$query3);

            


            
            
            ?>   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Employé</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <?php
     include 'Config.php';
    $matriculetech=$_GET['updateid'];
    $sql="Select * from `technicien` where MATRICULE_TECH='$matriculetech'";
    $res=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($res);
    $matriculee=$row['MATRICULE_TECH'];
    $code=$row['CODE_ETIQUETTE'];
    $reference=$row['REFERENCE'];
    $nom=$row['NOM_TECH'];
    $prenom=$row['PRENOM_TECH'];
   
   

    
?>
<div class="container my-5">
    <form method="post">
        <div class="form-group">
        <label for="Matriculetech">Matricule Technicien :</label>
        <input type="text" class="form-control" name="matricule_tech"  value=<?php echo $matriculee;?>>
    
        </div>
        <div class="form-group">
            <label for="coderfid">Code RFID :</label>
            <select  class="form-control" name="coderfid" value=<?php echo $code;?>>
                <?php while($row1= mysqli_fetch_array($resultat3)):;?>
                <option><?php echo $row1[0];?></option>
                <?php endwhile ;?>
           
            </select>
        </div>
        <div class="form-group">
            <label for="lcd">Reference LCD :</label>
            <select  class="form-control" name="lcd" value=<?php echo $code;?>>
                <?php while($row3= mysqli_fetch_array($resultat2)):;?>
                <option><?php echo $row3[0];?></option>
                <?php endwhile ;?>
           
            </select>
        </div>
        <div class="form-group">
            <label for="nom">Nom Technicien :</label>
            <input type="text" class="form-control" name="nom" value=<?php echo $nom;?>>
        
        </div>
        <div class="form-group">
            <label for="prenom">Prenom Technicien :</label>
            <input type="text" class="form-control" name="prenom" value=<?php echo $prenom;?>>
        
        </div>
       
        
    
    
         <button type="submit" class="btn btn-primary" name="modifier">Modifier</button>
    </form>
    </div>
    </body>
</html>
