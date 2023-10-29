<?php
            include 'Config.php';
            include ('phpSessionGesRFID.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Details Informations</title>
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
        <div class="content">
        <div class="container-fluid pt-4 px-4">
     <h4>Tableau de recherche RFID </h4>
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
                            $rechRFID=$_SESSION['motrechsessionRFID'];
                            $sql="Select * from `rfid` where designation like '$rechRFID%'";
                            $result=mysqli_query($conn,$sql);
                            $rows = mysqli_num_rows($result);
                            if($rows>0)
                            {
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
                                            </tr>';
                                        }
                                }
                            }
                            else
                            {
                                
                                $sql="Select * from `rfid` ";
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
                                            </tr>';
                                        }
                                }
                                $alert="Aucune Carte RFID ne correspend à la recherche !";
                                echo '</tbody></table>';
                                echo '
                                       
                                            
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>'.$alert.'
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div></br>';
                            }
                        ?>
                    </tbody>
                    </table>
        </div>
        </div>
        <!-- Sidebar End -->
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