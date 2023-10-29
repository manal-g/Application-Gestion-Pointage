<?php
    include 'Config.php';
    $query="select * from administrateur";
                $resultat=mysqli_query($conn,$query);

                $query2="select * from technicien";
                $resultat2=mysqli_query($conn,$query2);

                $query3="select * from employe";
                $resultat3=mysqli_query($conn,$query3);

                $query4="select * from afficheur_lcd";
                $resultat4=mysqli_query($conn,$query4);

                $query5="select * from rfid";
                $resultat5=mysqli_query($conn,$query5);


                $rowsadmin = mysqli_num_rows($resultat);
                $rowstechniciens=mysqli_num_rows($resultat2);
                $rowsemployes=mysqli_num_rows($resultat3);
                $rowslcd=mysqli_num_rows($resultat4);
                $rowrfid=mysqli_num_rows($resultat5);
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Espace Administrateur</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
           

            <!-- Sale & Revenue Start -->
            
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <img src="carte-mere.png" width=50px>
                            <div class="ms-3">
                                <p class="mb-2">LCD</p>
                                <h6 class="mb-0"><?php echo $rowslcd;?></h6>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <img src="rfid.png" width=50px>
                            <div class="ms-3">
                                <p class="mb-2">RFID</p>
                                <h6 class="mb-0"><?php echo $rowrfid;?></h6>
                            </div>
                        </div>
</div>
                
                        
                
            

                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <img src="employee.png" width=50px>
                            <div class="ms-3">
                                <p class="mb-2">Techniciens</p>
                                <h6 class="mb-0"><?php echo $rowstechniciens;?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <img src="employee.png" width=50px>
                            <div class="ms-3">
                                <p class="mb-2">Employes</p>
                                <h6 class="mb-0"><?php echo $rowsemployes;?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-around d-flex align-items-center justify-content-around p-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <img src="permission.png" width=50px>
                            <div class="ms-3">
                                <p class="mb-2">Administrateurs</p>
                                <h6 class="mb-0"><?php echo $rowsadmin;?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>

            

            <!-- Sales Chart Start -->
            


            <!-- Tableau EMPLOYE -->
            <div class="container-fluid pt-4 px-4">
                <h4>Tableau Employé</h4>
            </div>
            <div class="table-responsive">
        
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
                       
                        
                        
                    </tr>';

                    }
                
            }
            
            
            ?>

          
            </tbody>
        </table>
        </div>
            <!-- Recent Sales End -->
            
            <!-- Tableau Administrateur -->
            <div class="container-fluid pt-4 px-4">
                                                          <h4>Tableau Administrateur</h4>
            </div>
            <div class="table-responsive">

            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Matricule</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Login</th>
                    <th scope="col">Mot de passe</th>
                   
                    </tr>
                </thead>
            <tbody>

            <?php
            $sql="Select * from `administrateur`";
            $result=mysqli_query($conn,$sql);
            if($result)
            {
                    while($row=mysqli_fetch_assoc($result))
                    {
                        $matriculead=$row['MATRICULE_ADM'];
                        $nomad=$row['NOM_ADM'];
                        $prenomad=$row['PRENOM_ADM'];
                        $loginad=$row['LOGIN_ADM'];
                        $mdpad=$row['MDP_ADM'];
                        echo '<tr>
                        <th scope="row">'.$matriculead.'</th>
                        <td>'.$nomad.'</td>
                        <td>'.$prenomad.'</td>
                        <td>'.$loginad.'</td>
                        <td>'.$mdpad.'</td>
                      
                        
                        
                        
                    </tr>';

                    }
                
            }
            
            
            ?>

          
            </tbody>
        </table>
        </div>




            <!-- Tableau TECHNICIEN -->
            <div class="container-fluid pt-4 px-4">
                                                         <h4>Tableau Technicien</h4>
            </div>
            <div class="table-responsive">
           
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Matricule Technicien</th>
                            <th scope="col">Code RFID</th>
                            <th scope="col">Reference LCD</th>
                            <th scope="col">Nom </th>
                            <th scope="col">Prenom</th>
                           
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
                                        echo '
                                        <tr>
                                            <th scope="row">'.$matriculetech.'</th>
                                            <td>'.$coderfid.'</td>
                                            <td>'.$reflcd.'</td>
                                            <td>'.$nomtech.'</td>
                                            <td>'.$prenomtech.'</td>
                                        
                                        </tr>';
                                    }
                            }
                        ?>
                    </tbody>
                </table>
                
            </div>









            <!-- Tableau LCD -->

            <div class="container-fluid pt-4 px-4">
                                                          <h4>Tableau LCD</h4>
            </div>
            <div class="table-responsive">
          
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Reference</th>
                            <th scope="col">Taille</th>
                
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                            $sql="Select * from `afficheur_lcd`";
                            $result=mysqli_query($conn,$sql);
                            if($result)
                            {
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $ref=$row['REFERENCE'];
                                        $taille=$row['TAILLE'];
                                        echo '
                                        <tr>
                                            <th scope="row">'.$ref.'</th>
                                            <td>'.$taille.'</td>
                                            
                                        </tr>';
                                    }
                            }
                        ?>
                    </tbody>
                </table>
                
            </div>









            <!-- Tableau RFID -->


            <div class="container-fluid pt-4 px-4">
                                                         <h4>Tableau RFID</h4>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Code RFID</th>
                            <th scope="col">Designation</th>
                         
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                            $sql="Select * from `rfid`";
                            $result=mysqli_query($conn,$sql);
                            if($result)
                            {
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $code=$row['CODE_ETIQUETTE'];
                                        $desi=$row['DESIGNATION'];
                                        echo '
                                        <tr>
                                            <th scope="row">'.$code.'</th>
                                            <td>'.$desi.'</td>
                                           
                                        </tr>';
                                    }
                            }
                        ?>
                    </tbody>
                </table>
                
            </div>











            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                <?php
                        $mois=array();
                        for($m=1;$m<13;$m++)
                        {
                            switch($m){
                                case 1:$nommois='Janvier';
                                break;
                                case 2:$nommois='Février';
                                break;
                                case 3:$nommois='Mars';
                                break;
                                case 4:$nommois='Avril';
                                break;
                                case 5:$nommois='Mai';
                                break;
                                case 6:$nommois='Juin';
                                break;
                                case 7:$nommois='Juillet';
                                break;
                                case 8:$nommois='Août';
                                break;
                                case 9:$nommois='Septembre';
                                break;
                                case 10:$nommois='Octobre';
                                break;
                                case 11:$nommois='Novembre';
                                break;
                                case 12:$nommois='Décembre';
                                break;
                                
                            }
                            $querymoisabs="select count(*) as 'moisabs' from employe join s_absenter join absence on absence.id_abs=s_absenter.id_abs and employe.matricule_emp=s_absenter.matricule_emp where month(date_abs)='$m'";
                            $resultmoisabs=mysqli_query($conn,$querymoisabs);
                            $rowmoisabs=mysqli_fetch_assoc($resultmoisabs);
                            $mois[$nommois]=$rowmoisabs['moisabs'];
                            
                        }
                    ?>
                    <script>
                
                

                    const labelsline = [
                       
                     
                    ];

                    const dataline = {
                        labels: labelsline,
                        datasets: [{
                        label: 'Abscence par mois',
                        data: <?php echo json_encode($mois)?>,
                        backgroundColor: 'rgb(255, 99, 132)',
                        borderColor: 'rgb(255, 99, 132)',
                        
                        }]
                    };

                    const configline = {
                        type: 'line',
                        data: dataline,
                        options: {}
                    };
                </script>
                <div class="col-sm-12 col-xl-6">
                    <div class="bg-light rounded h-100 p-4">
                        <canvas id="myChartline"></canvas>
                    </div>
                </div>
                <script>
                    const myChartline = new Chart(
                        document.getElementById('myChartline'),
                        configline
                    );
                </script>







            <script>
                

                const labelsbar = [
                <?php
                    $nbrabstab=array();
                    $i=0;
                    
                    $querychart2="select nom_dep from departement ";
                    $resultchart2=mysqli_query($conn,$querychart2);
                    if($resultchart2)
                    {
                        while($row=mysqli_fetch_assoc($resultchart2))
                        {
                            $nom_dep=$row['nom_dep'];
                            $queryInfochart2="SELECT COUNT(*) as 'nbrabs' from departement join appartenir join fonction join employe join s_absenter join absence on absence.id_abs=s_absenter.id_abs and s_absenter.matricule_emp=employe.matricule_emp and employe.numero_fct=fonction.numero_fct and appartenir.numero_fct=fonction.numero_fct and departement.numero_dep=appartenir.numero_dep where departement.nom_dep='$nom_dep'";
                            $resultInfochart2=mysqli_query($conn,$queryInfochart2);
                            $rowInfo=mysqli_fetch_assoc($resultInfochart2);
                            $nbrabstab[$i]=$rowInfo['nbrabs'];
                            $i=$i+1;
                ?>
                    '<?php echo $nom_dep; ?>',
                <?php
                        }
                    }
                ?>
                ];



                const databar = {
                    labels: labelsbar,
                    datasets: [{
                        label: 'Abscences dans chaque département',
                        
                        backgroundColor: [
                        'rgba(255, 159, 64, 0.2)'
                        
                        ],
                        borderColor: [
                        'rgba(255, 159, 64, 0.2)'
                        
                        ],
                        data: <?php echo json_encode($nbrabstab)?>
                    }]
                };

                const configbar = {
                    type: 'bar',
                    data: databar,
                    options: {
                        scales: {
                        y: {
                            beginAtZero: true
                        }
                        }
                    },
                };
            </script>
            
            
            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <canvas id="myChartbar"></canvas>
                </div>
            </div>



            <script>
                const myChartbar = new Chart(
                document.getElementById('myChartbar'),
                configbar
                );
            </script>













            <!-- Chart 'Abscence Justification' with Chartjs -->

            <?php
                $querychart="select count(s_absenter.Id_abs) as 'nbrJustifie' from absence join s_absenter on absence.Id_abs=s_absenter.Id_abs where absence.motif_abs='oui' ";
                $resultchart=mysqli_query($conn,$querychart);
                if($resultchart)
                {
                    while($row=mysqli_fetch_assoc($resultchart))
                    {
                        $Justifie=$row['nbrJustifie'];
                    }
                }
                $querychart="select count(s_absenter.Id_abs) as 'nbrNonJustifie' from absence join s_absenter on absence.Id_abs=s_absenter.Id_abs where absence.motif_abs='non' ";
                $resultchart=mysqli_query($conn,$querychart);
                if($resultchart)
                {
                    while($row=mysqli_fetch_assoc($resultchart))
                    {
                        $NonJustifie=$row['nbrNonJustifie'];
                    }
                }
            ?>

            
            
            <script>
                const labels = [
                    'Justifié <?php echo number_format($Justifie*100/($Justifie+$NonJustifie),2).'%' ?>',
                    'Non Justifié <?php echo number_format($NonJustifie*100/($Justifie+$NonJustifie),2).'%' ?>',
                ];



                const data = {
                    labels: labels,
                    datasets: [{
                    label: 'Diagramme Camembert des Abscences des Employés',
                    backgroundColor:  [
                    'rgb(54, 162, 235)',
                    'rgb(219, 0, 0)'
                    ],
                    borderColor: [
                        'rgb(54, 162, 235)',
                        'rgb(219, 0, 0)'
                    ],
                    data: [<?php echo json_encode($Justifie)?>,<?php echo json_encode($NonJustifie)?>],
                    }]
                };



                const config = {
                    type: 'doughnut',
                    data: data,
                    options: {}
                };
            </script>


<div class="row justify-content-around d-flex align-items-center justify-content-around p-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
</div>



            <script>
                const myChart = new Chart(
                document.getElementById('myChart'),
                config
            );
            </script>
        


             <!-- Chart 'Abscence par departement' with Chartjs -->
             
             




            <!-- Chart 'Abscence par departement' with Chartjs -->

            




            </div>
        </div>






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