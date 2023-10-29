
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
    if(isset($_POST['ajouter']))
    {
        $matricule_tech=$_POST['matricule_tech'];
        $coderfid=$_POST['coderfid'];
        $referencelcd=$_POST['lcd']; 
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        
         
        $req = "INSERT INTO technicien VALUES ('$matricule_tech', '$coderfid', '$referencelcd', '$nom', '$prenom' )";
        $result=mysqli_query($conn,$req);
        if($result){
            //echo "<h3> Les données ont été enregistrer avec succées dans la base données </h3>"; 
            header('location:listetechnicien.php');
    
           
        } 
        else
        {
            die(mysqli_error($conn));
           
        }

    
    } 
   
        
    // Close connection
    mysqli_close($conn);
?>
<div class="container my-5">
    <form method="post">
        <div class="form-group">
        <label for="Matriculetech">Matricule Technicien :</label>
        <input type="text" class="form-control" name="matricule_tech" placeholder="Entrer le matricule">
    
        </div>
        <div class="form-group">
            <label for="coderfid">Code RFID :</label>
            <select  class="form-control" name="coderfid">
                <?php while($row1= mysqli_fetch_array($resultat3)):;?>
                <option><?php echo $row1[0];?></option>
                <?php endwhile ;?>
           
            </select>
        </div>
        <div class="form-group">
            <label for="lcd">Reference LCD :</label>
            <select  class="form-control" name="lcd">
                <?php while($row3= mysqli_fetch_array($resultat2)):;?>
                <option><?php echo $row3[0];?></option>
                <?php endwhile ;?>
           
            </select>
        </div>
        <div class="form-group">
            <label for="nom">Nom Technicien :</label>
            <input type="text" class="form-control" name="nom" placeholder="Entrer le nom">
        
        </div>
        <div class="form-group">
            <label for="prenom">Prenom Technicien :</label>
            <input type="text" class="form-control" name="prenom" placeholder="Entrer le prenom">
        
        </div>
       
        
    
    
         <button type="submit" class="btn btn-primary" name="ajouter">Ajouter</button>
    </form>
    </div>
    </body>
</html>
