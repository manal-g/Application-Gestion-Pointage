<?php 
 if(isset($_POST['btnsubmitLCD']))
 {
    include('phpSessionGesLCD.php');
 }
 if(isset($_POST['btnsubmitRFID']))
 {
    include('phpSessionGesRFID.php');
 }    
   
?>
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
            <div class="container">
                <form method="post" action="">
                    <input type="search" name="motcleLCD" placeholder="Recherche par Taille">
                    <button class=" btn btn-primary my-5" name="btnsubmitLCD">  Rechercher </button>
                </form>
            </div>
            <div class="container-fluid pt-4 px-4">
                <button class=" btn btn-primary my-5"> <a href="AjouterLcd2.php"class="text-light">Ajouter LCD</a></button>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Reference</th>
                            <th scope="col">Taille</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                          include 'Config.php';

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
                                            <td>
                                          <a href="UpdateLcd2.php?updateid='.$ref.'" class="text-light">
                                          <img src="stylo.png" width=30px>
                                            
                                            </td>
                                            <td>
                                          <a href="UpdateLcd2.php?deleteid='.$ref.'" class="text-light">
                                          <img src="corbeille.png" width=30px>
                                            
                                            </td>
                                            
                                        </tr>';
                                    }
                            }
                        ?>
                    </tbody>
                </table>
                
            </div>

                            







            <!-- Tableau RFID -->

            <div class="container">
                <form method="post" action="">
                    <input type="search" name="motcleRFID" placeholder="Recherche par Désignation">
                    <button class=" btn btn-primary my-5" name="btnsubmitRFID">  Rechercher</button>
                </form>
            </div>
            <div class="container-fluid pt-4 px-4">
                <button class=" btn btn-primary my-5"> <a href="AjouterRfid2.php"class="text-light">Ajouter RFID</button>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Code RFID</th>
                            <th scope="col">Designation</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                          include 'Config.php';
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
                                            <td>
                                            <a href="updaterfid.php?updateid='.$code.'" class="text-light">
                                            <img src="stylo.png" width=30px>
                                            
                                            </td>
                                            <td>
                                            <a href="deleteemp.php?deleteid='.$code.'" class="text-light">
                                            <img src="corbeille.png" width=30px>
                                           
                                            </td>
                                        </tr>';
                                    }
                            }
                        ?>
                    </tbody>
                    </table>
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