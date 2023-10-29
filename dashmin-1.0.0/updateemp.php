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
    <title>Modifier Employé</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  </head>
  <body>
    <?php
      include 'Config.php';
      $matricule_emp=$_GET['updateid'];
      $sql="Select * from `employe` where MATRICULE_EMP='$matricule_emp'";
      $res=mysqli_query($conn,$sql);
      $row=mysqli_fetch_assoc($res);
      $matriculee=$row['MATRICULE_EMP'];
      $numerofc=$row['NUMERO_FCT'];
      $matriculeadm=$row['MATRICULE_ADM'];
      $coderfid=$row['CODE_ETIQUETTE'];
      $nom=$row['NOM_EMP'];
      $prenom=$row['PRENOM_EMP'];
      $datenaissance=$row['DATE_NAISSANCE'];
      $daterecrutement=$row['DATE_RECRUTEMENT'];
      $login=$row['LOGIN_EMP'];
      $mdp=$row['MDP_EMP'];
      $salaire=$row['SALAIRE'];
      if(isset($_POST['modifier']))
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
        $req = "UPDATE employe SET  numero_fct='$numfct', matricule_adm='$matricule_adm', code_etiquette='$code_rfid', nom_emp='$nom',
        prenom_emp='$prenom', date_recrutement='$date_recrutement', date_naissance='$date_naissance', login_emp='$email', mdp_emp='$mdp', salaire='$salaire' where matricule_emp='$matricule_emp'";
        
        if ($conn->query($req) === TRUE) {
            echo "La modification a été bien effectuer: ".$nom."-".$prenom."-".$date_naissance."-".$date_recrutement."-".$email."-".$mdp."-".$salaire;
        } else {
            echo "Error: ".$req."<br>".$conn->error;
        }
      }
        
       // Close connection
      mysqli_close($conn); 
    ?>      


        
<div class="container my-5">
  <form method="post">
    <div class="form-group">
      <label for="MatriculeEmp">Matricule Employé :</label>
      <input type="text" class="form-control" name="matricule_emp" value=<?php echo $matriculee;?>>
    
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
      <input type="text" class="form-control" name="nom"  value=<?php echo $nom;?>>
    
    </div>
    <div class="form-group">
      <label for="prenom">Prenom Employé :</label>
      <input type="text" class="form-control" name="prenom" value=<?php echo $prenom;?>>
    
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
      <input type="email" class="form-control" name="email" placeholder="Entrer l'Email" value=<?php echo $login;?>>
    
    </div>
    <div class="form-group">
      <label for="password">Mot de passe :</label>
      <input type="password" class="form-control" name="mdp" placeholder="Entrer le mot de passe"  value=<?php echo $mdp;?>>
    
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
      <input type="date" class="form-control" name="date_naissance" value=<?php echo $datenaissance;?>>
    
    </div>

    <div class="form-group">
      <label for="daterecrutement">Date de recrutement :</label>
      <input type="date" class="form-control" name="date_recrutement" value=<?php echo $daterecrutement;?>>
    
    </div>
    <div class="form-group">
      <label for="salaire">Salaire Employé :</label>
      <input type="number" class="form-control" name="salaire" value=<?php echo $salaire;?>>
    
    </div>
    <button type="submit" class="btn btn-primary" name="modifier">Modifier</button>
  </form>
</div>
</body>
</html>