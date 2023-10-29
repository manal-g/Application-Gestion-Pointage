
 <?php
             include 'Config.php';
             $query="select * from administrateur";
             $resultat=mysqli_query($conn,$query);

             $query2="select * from fonction";
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
        $matricule_emp=$_POST['matricule_emp'];
        $numfct=$_POST['numfct'];
        $matricule_adm=$_POST['matricule_adm']; 
        $code_rfid=$_POST['code_rfid'];
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $date_recrutement=$_POST['date_recrutement'];
        $date_naissance=$_POST['date_naissance'];
        $email=$_POST['email'];
        $mdp=$_POST['mdp'];
        $salaire=$_POST['salaire'];
         
        $req = "INSERT INTO employe VALUES ('$matricule_emp', '$numfct', '$matricule_adm', '$code_rfid', '$nom',
        '$prenom', '$date_recrutement', '$date_naissance', '$email', '$mdp', '$salaire')";
        $result=mysqli_query($conn,$req);
        if($result){
            //echo "<h3> Les données ont été enregistrer avec succées dans la base données </h3>"; 
            header('location:listeEmp.php');
    
           
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
        <label for="MatriculeEmp">Matricule Employé :</label>
        <input type="text" class="form-control" name="matricule_emp" placeholder="Entrer le matricule">
    
        </div>
        <div class="form-group">
            <label for="MatriculeAdm">Matricule Administrateur :</label>
            <select  class="form-control" name="matricule_adm">
                <?php while($row1= mysqli_fetch_array($resultat)):;?>
                <option><?php echo $row1[0];?></option>
                <?php endwhile ;?>
           
            </select>
        </div>
        <div class="form-group">
            <label for="nom">Nom Employé :</label>
            <input type="text" class="form-control" name="nom" placeholder="Entrer le nom">
        
        </div>
        <div class="form-group">
            <label for="prenom">Prenom Employé :</label>
            <input type="text" class="form-control" name="prenom" placeholder="Entrer le prenom">
        
        </div>
        <div class="form-group">
            <label for="numerofct">Numero Fonction :</label>
            <select  class="form-control" name="numfct">
                <?php while($row2= mysqli_fetch_array($resultat2)):;?>
                <option><?php echo $row2[0];?></option>
                <?php endwhile ;?>
           
            </select>
        
        </div>
        <div class="form-group">
            <label for="login">Login :</label>
            <input type="email" class="form-control" name="email" placeholder="Entrer l'Email">
        
        </div>
        <div class="form-group">
            <label for="password">Mot de passe :</label>
            <input type="password" class="form-control" name="mdp" placeholder="Entrer le mot de passe">
        
        </div>
        <div class="form-group">
            <label for="coderfid">Code RFID :</label>
            <select  class="form-control" name="code_rfid">
                <?php while($row3= mysqli_fetch_array($resultat3)):;?>
                <option><?php echo $row3[0];?></option>
                <?php endwhile ;?>
           
            </select>
        
        </div>
        <div class="form-group">
            <label for="datenaissance">Date de naissance :</label>
            <input type="date" class="form-control" name="date_naissance" placeholder="Entrer la date de naissance">
        
        </div>
        <div class="form-group">
            <label for="daterecrutement">Date de recrutement :</label>
            <input type="date" class="form-control" name="date_recrutement" placeholder="Entrer la date de recrutement ">
        
        </div>
        <div class="form-group">
            <label for="salaire">Salaire Employé :</label>
            <input type="number" class="form-control" name="salaire" placeholder="Entrer le salaire ">
        
        </div>
         <button type="submit" class="btn btn-primary" name="ajouter">Ajouter</button>
    </form>
    </div>
    </body>
</html>
