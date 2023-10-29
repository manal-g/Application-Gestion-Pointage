<?php
                include 'Config.php';
                $query="select * from administrateur";
                $resultat=mysqli_query($conn,$query);

                $query2="select NUMERO_FCT,NOM_FCT from fonction";
                $resultat2=mysqli_query($conn,$query2);

                $query3="select * from rfid";
                $resultat3=mysqli_query($conn,$query3);
            
?> 
</head>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

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
        if(isset($_POST['ajouter']))
        {
            $matricule_emp=$_POST['matricule_emp'];
            $nomfct=$_POST['nomfct'];
            $query="select NUMERO_FCT,NOM_FCT from fonction where nom_fct='$nomfct'";
            $resultat4=mysqli_query($conn,$query2);
            while($row=mysqli_fetch_assoc($resultat4))
            {
               $num=$row['NUMERO_FCT'];
            }
            $matricule_adm=$_POST['matricule_adm']; 
            $code_rfid=$_POST['code_rfid'];
            $nom=$_POST['nom'];
            $prenom=$_POST['prenom'];
            $date_recrutement=$_POST['date_recrutement'];
            $date_naissance=$_POST['date_naissance'];
            $email=$_POST['email'];
            $mdp=$_POST['mdp'];
            $salaire=$_POST['salaire'];
            $req = "INSERT INTO employe VALUES ('$matricule_emp', '$num', '$matricule_adm', '$code_rfid', '$nom',
            '$prenom', '$date_recrutement', '$date_naissance', '$email', '$mdp', '$salaire')";
            $result=mysqli_query($conn,$req);
            if($result){//si la requete est validée on retourne vers la selection des employés
                //echo "<h3> Les données ont été enregistrer avec succées dans la base données </h3>"; 
                header('location:index.php');
            } 
            else
            {
                die(mysqli_error($conn));
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




            <!-- Début Formulaire Ajouter Employé -->
            <div class="container my-5">
                <form method="post" >
                    <div class="form-group">
                    <label for="MatriculeEmp">Matricule Employé :</label>
                    <input type="text" class="form-control" name="matricule_emp" placeholder="Entrer le matricule">
                
                    </div>
                    <div class="form-group"><!--Clé Etrangere-->
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
                    <div class="form-group"><!--Clé Etrangere-->
                        <label for="numerofct">Numero Fonction :</label>
                        <select  class="form-control" name="nomfct">
                            <?php while($row2= mysqli_fetch_array($resultat2)):;?>
                            <option><?php echo $row2[1];?></option>
                            <?php endwhile ;?>
                       
                        </select>
                    
                    </div>
                    <div class="form-group">
                        <label for="login">Login :</label>
                        <input type="email" class="form-control" name="email" placeholder="Entrer l'Email">
                    
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe :</label>
                        <input type="text" class="form-control" name="mdp" placeholder="Entrer le mot de passe">
                    
                    </div>
                    <div class="form-group"><!--Clé Etrangere-->
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
                <!-- Fin Formulaire Ajouter Employé -->


           
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