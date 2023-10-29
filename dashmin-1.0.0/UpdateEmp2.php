<?php
  include 'Config.php';
  $query="select * from administrateur";
  $resultat=mysqli_query($conn,$query);

  $query2="select * from fonction";
  $resultat2=mysqli_query($conn,$query2);

  $query3="select * from rfid";
  $resultat3=mysqli_query($conn,$query3);
?>   
</head>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    

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
            header('location:index.php');//Quand la modification est effectuée, on revient vers Gestion d'employé pour revoir la modification dans le tableau 
        } else {
            echo "Error: ".$req."<br>".$conn->error;
        }
      }
        
       // Close connection
      mysqli_close($conn); 
    ?>      
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>SMART ISI </h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"></h6>
                        <span>Administrateur</span>
                    </div>
                </div>
                
                
                <div class="navbar-nav w-100">


                <div >
                        
                <a href="index.php" class="nav-link"><i class="fa fa-laptop me-2"></i>Tableau de Bord</a>
                       
                    
                    </div>
                    
                    <div class="nav-item dropdown">
                        <a href="index.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Espace Employé</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="gestionemploye.php" class="dropdown-item">Gestion Employé</a>
                            
                           
                        </div>
                    </div>
       
                    <div class="nav-item dropdown">
                        <a href="index.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Espace Technique</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="gestiontech.php" class="dropdown-item">Gestion Technicien</a>
                            <a href="gestionmateriel.php" class="dropdown-item">Gestion Matériel</a>
                          
                        </div>
                    </div>
                    <div>
                    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
                    <a href="logout.php" class="nav-link"><i class="fa-solid fa-arrow-right-from-bracket"></i>Déconnexion</a>
                    <!--<a href="logout.php" class="nav-item nav-link active"><img src="logout.png" width=30px>    Déconnexion</a>-->

                </div>
                  
                   
                   
            </nav>
        </div>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
    
               
                
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                      
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                           
                    
                           
                                </div>
                            </a>
                   
                
                </div>
            </nav>
            <!-- Navbar End -->




            <!-- Début Formulaire Modifier Employé -->
            <div class="container my-5">
                <form method="post" >
                    <div class="form-group">
                    <label for="MatriculeEmp">Matricule Employé :</label>
                    <input type="text" class="form-control" name="matricule_emp" value=<?php echo $matriculee;?>>
                
                    </div>
                    <div class="form-group"><!--Clé Etrangere-->
                        <label for="MatriculeAdm">Matricule Administrateur :</label>
                        <select  class="form-control" name="matricule_adm" value=<?php echo $matriculeadm;?>>
                            <?php while($row1= mysqli_fetch_array($resultat)):;?>
                            <option><?php echo $row1[0];?></option>
                            <?php endwhile ;?>
                       
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nom">Nom Employé :</label>
                        <input type="text" class="form-control" name="nom" value=<?php echo $nom;?>>
                    
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prenom Employé :</label>
                        <input type="text" class="form-control" name="prenom" value=<?php echo $prenom;?>>
                    
                    </div>
                    <div class="form-group"><!--Clé Etrangere-->
                        <label for="numerofct">Numero Fonction :</label>
                        <select  class="form-control" name="numfct" value=<?php echo $numerofc;?>>
                            <?php while($row2= mysqli_fetch_array($resultat2)):;?>
                            <option><?php echo $row2[0];?></option>
                            <?php endwhile ;?>
                       
                        </select>
                    
                    </div>
                    <div class="form-group">
                        <label for="login">Login :</label>
                        <input type="email" class="form-control" name="email" value=<?php echo $login;?>>
                    
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe :</label>
                        <input type="password" class="form-control" name="mdp" value=<?php echo $mdp;?>>
                    
                    </div>
                    <div class="form-group"><!--Clé Etrangere-->
                        <label for="coderfid">Code RFID :</label>
                        <select  class="form-control" name="code_rfid" value=<?php echo $coderfid;?>>
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
                <!-- Fin Formulaire Modifier Employé -->


         
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>