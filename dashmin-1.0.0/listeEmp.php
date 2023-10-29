<?php
    include 'Config.php';
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste Employés</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <button class=" btn btn-primary my-5"> <a href="AjouterEmploye2.php"class="text-light">Ajouter Employé</button>
    </div>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Matricule Employé</th>
      <th scope="col">Numero Fonction</th>
      <th scope="col">Administrateur</th>
      <th scope="col">Code RFID</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Date Naissance</th>
      <th scope="col">Date Recrutement</th>
      <th scope="col">Login</th>
      <th scope="col">Mot de passe</th>
      <th scope="col">Salaire</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

  <?php
  $sql="Select * from `employe`";
  $result=mysqli_query($conn,$sql);
  if($result)
  {
        while($row=mysqli_fetch_assoc($result))
        {
            $matriculeemp=$row['MATRICULE_EMP'];
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
            echo '<tr>
            <th scope="row">'.$matriculeemp.'</th>
            <td>'.$numerofc.'</td>
            <td>'.$matriculeadm.'</td>
            <td>'.$coderfid.'</td>
            <td>'.$nom.'</td>
            <td>'.$prenom.'</td>
            <td>'.$datenaissance.'</td>
            <td>'.$daterecrutement.'</td>
            <td>'.$login.'</td>
            <td>'.$mdp.'</td>
            <td>'.$salaire.'</td>
            <td>
            <button class="btn btn-primary"><a href="updateemp.php?updateid='.$matriculeemp.'" class="text-light">Modifier</button>
            <button class="btn btn-danger"><a href="deleteemp.php?deleteid='.$matriculeemp.'">Supprimer</button>
            </td>
          </tr>';

        }
      
  }
  
  
  ?>
 
   
  </tbody>
</table>
</body>
</html>