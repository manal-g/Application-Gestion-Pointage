<?php
    include 'Config.php';
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste Techniciens</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <button class=" btn btn-primary my-5"> <a href="AjouterTech2.php"class="text-light">Ajouter Technicien</button>
    </div>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Matricule Technicien</th>
      <th scope="col">Code RFID</th>
      <th scope="col">Reference LCD</th>
      <th scope="col">Nom </th>
      <th scope="col">Prenom</th>
      <th scope="col">Action </th>
     
    </tr>
  </thead>
  <tbody>

  <?php
  $sql="Select * from `technicien`";
  $result=mysqli_query($conn,$sql);
  if($result)
  {
        while($row=mysqli_fetch_assoc($result))
        {
            $matriculetech=$row['MATRICULE_TECH'];
            $coderfid=$row['CODE_ETIQUETTE'];
            $reflcd=$row['REFERENCE'];
            $nomtech=$row['NOM_TECH'];
            $prenomtech=$row['PRENOM_TECH'];
            echo '<tr>
            <th scope="row">'.$matriculetech.'</th>
            <td>'.$coderfid.'</td>
            <td>'.$reflcd.'</td>
            <td>'.$nomtech.'</td>
            <td>'.$prenomtech.'</td>
           
            <td>
            <button class="btn btn-primary"><a href="updatetech.php?updateid='.$matriculetech.'" class="text-light">Modifier</button>
            <button class="btn btn-danger"><a href="deletetech.php?deleteid='.$matriculetech.'">Supprimer</button>
            </td>
          </tr>';

        }
      
  }
  
  
  ?>
 
   
  </tbody>
</table>
</body>
</html>