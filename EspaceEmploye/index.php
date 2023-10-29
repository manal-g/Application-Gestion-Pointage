<?php
include('../phplogin.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Espace Employe</title>
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
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
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
            


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <img src="absent.png" width=50px>
                            <div class="ms-3">
                                <p class="mb-2">Abscence</p>
                                <h6 class="mb-0"><?php $a=$_SESSION['email'];
                                                        $b=$_SESSION['password'];
                                                        $sql="select COUNT(employe.matricule_emp) from employe join s_absenter on employe.matricule_emp=s_absenter.matricule_emp where login_emp='$a' and mdp_emp='$b'";
                                                        $resultat=mysqli_query($conn,$sql);
                                                        if($resultat)
                                                        {
                                                            while($row=mysqli_fetch_array($resultat))
                                                            {
                                                                $nbrabscences=$row[0];
                                                            }
                                                            echo $nbrabscences;
                                                        }
                 
                    ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <img src="un-salaire.png" width=50px>
                            <div class="ms-3">
                                <p class="mb-2">Salaire</p>
                                <h6 class="mb-0"><?php 
                                $a=$_SESSION['email'];
                                $b=$_SESSION['password'];
                                $jour=date("d");
                                if($jour!=1)
                                {
                                    $reqsel="SELECT salaire from employe  where login_emp='$a' and mdp_emp='$b'"; 
                                    $resultat=mysqli_query($conn,$reqsel);

                                }
                                if($resultat)
                                 {
                                     while($row=mysqli_fetch_array($resultat))
                                     {
                                        $salaire=$row[0];
                                      
                                     }
                                     echo $salaire;
                                }
                                
                                if(($nbrabscences==0) &&($jour==1) ){

                                 $sql="SELECT (salaire+((salaire*1)/100)) from employe left join s_absenter on employe.matricule_emp=s_absenter.matricule_emp where login_emp='$a' and mdp_emp='$b'";
                                 $resultat=mysqli_query($conn,$sql);
                                 
                                 if($resultat)
                                 {
                                     while($row=mysqli_fetch_array($resultat))
                                     {
                                        $salaire=$row[0];
                                        
                                       
                                     }
                                     echo $salaire;
                                     $requpdate="UPDATE employe SET SALAIRE='$salaire' where login_emp='$a' and mdp_emp='$b'";
                                     mysqli_query($conn,$requpdate);
                                   
                                 } 
                                 
                                }
                                else {
                                    if(($nbrabscences>0) && ($jour==1)){

                                
                                 
                                        $sql="SELECT (salaire-((salaire*'$nbrabscences')/100)) from employe left join s_absenter on employe.matricule_emp=s_absenter.matricule_emp where login_emp='$a' and mdp_emp='$b'";
                                        $resultat=mysqli_query($conn,$sql);
                                        
                                       
                                        
                                        if($resultat)
                                        {
                                            while($row=mysqli_fetch_array($resultat))
                                            {
                                               $salaire=$row[0];
                                               
                                            }
                                            echo $salaire;
                                            $requpdate="UPDATE employe SET SALAIRE='$salaire' where login_emp='$a' and mdp_emp='$b'";
                                            mysqli_query($conn,$requpdate);
                                          
                                        } 
                                        
                                       }
                                    
                                }
                          
                                ?></h6>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <img src="permission.png" width=50px>
                            <div class="ms-3">
                                    <p class="mb-2">Login</p>
                                    <h6 class="mb-0">
                                        <?php   
                                                    $y=$_SESSION['email']; 
                                                    echo $y;?></h6>
                                </div>
                         
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <img src="calendar.png" width=50px>
                            <div class="ms-3">
                                    <p class="mb-2">Date</p>
                                    <h6 class="mb-0"><?php   
                                    echo date("Y/m/d");
                                  ?></h6>
                                </div>
                         
                        </div>
                    </div>
                    <div class="row justify-content-around d-flex align-items-center justify-content-around p-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <img src="clock.png" width=50px>
                            
                            <div class="ms-3">
                                    <p class="mb-2">Heure d'authentification</p>
                                     <h6 class="mb-0">
                                         <?php  
                                             echo date("H:i:s",strtotime ("+1 hour")) ;
                                         ?>
                                    </h6>
                            </div>
                         
                        </div>
                    </div>
                        
                
            </div>
            <!-- Sale & Revenue End -->

            <!-- Tableau EMPLOYE -->
            <div class="container-fluid pt-4 px-4">
                <h4>Informations d'abscence d'employé</h4>
            </div>
            <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Matr_Emp</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Num_Fct</th>
                    <th scope="col">Id_abs</th>
                    <th scope="col">Date Abs</th>
                    <th scope="col">Motif_abs</th>
                    </tr>
                </thead>
            <tbody>

            <?php
            $tmpemail=$_SESSION['email'];
            $tmpmdp=$_SESSION['password'];

            $sql="select employe.matricule_emp,nom_emp,prenom_emp,numero_fct,absence.id_abs,date_abs,motif_abs from employe join s_absenter join absence on employe.matricule_emp=s_absenter.matricule_emp and absence.id_abs=s_absenter.id_abs where employe.login_emp='$tmpemail' and mdp_emp='$tmpmdp'";
            $result=mysqli_query($conn,$sql);
            if($result)
            {
                    while($row=mysqli_fetch_assoc($result))
                    {
                        $matriculeemp=$row['matricule_emp'];
                        $nom=$row['nom_emp'];
                        $prenom=$row['prenom_emp'];
                        $numerofc=$row['numero_fct'];
                        $idabs=$row['id_abs'];
                        $dateabs=$row['date_abs'];
                        $motifabs=$row['motif_abs'];
                        echo '<tr>
                        <th scope="row">'.$matriculeemp.'</th>
                        <td>'.$nom.'</td>
                        <td>'.$prenom.'</td>
                        <td>'.$numerofc.'</td>
                        <td>'.$idabs.'</td>
                        <td>'.$dateabs.'</td>
                        <td>'.$motifabs.'</td>
                    </tr>';

                    }
                
            }
            
            
            ?>

          
            </tbody>
        </table>
        </div>
            <!-- Sales Chart Start -->
        
















            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <!--<div class="col-sm-12 col-md-6 col-xl-4"> Pour agrandir le calendrier sur la page-->
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Calender</h6>
                                <a href="">Show All</a>
                            </div>
                            <div id="calender"></div>
                        </div>
                    <!--</div>-->
                    
                </div>
            </div>
            <!-- Widgets End -->
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