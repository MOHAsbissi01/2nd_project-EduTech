<?php session_start(); 
require_once '../config.php';
/*include "../controller/ImageC.php";*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
    <title>Ajout Questions</title>    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="imgD/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="libD/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="libD/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="cssD/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="cssD/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative bg-white d-flex p-0">
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
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>EduTechHub</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="imgD/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="indexD.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="buttonD.html" class="dropdown-item">Buttons</a>
                            <a href="typographyD.php" class="dropdown-item">Typography</a>
                            <a href="elementD.html" class="dropdown-item">Other Elements</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-key me-2"></i>Questions Quizz</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="dshb-quiz.php" class="dropdown-item">Créer</a>
                            <a href="dshb-bookmarks.php" class="dropdown-item">Liste</a>
                        </div>
                    </div>
                    <a href="listeD.php" class="nav-item nav-link"><i class="fa fa-book me-2"></i>Documents</a>
                    <a href="testD.php" class="nav-item nav-link"><i class="fa fa-clipboard me-2"></i>Test/Quizz</a>
                    <a href="listeResD.php" class="nav-item nav-link"><i class="fa fa-dice me-2"></i>Résultats</a>
                    <a href="widgetD.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
                    <a href="formD.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
                    <a href="tableD.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
                    <a href="chartD.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signinD.html" class="dropdown-item">Sign In</a>
                            <a href="signupD.html" class="dropdown-item">Sign Up</a>
                            <a href="404D.html" class="dropdown-item">404 Error</a>
                            <a href="blankD.html" class="dropdown-item">Blank Page</a>
                            <a href="indexD.php" class="dropdown-item">USER INTERFACE </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->
        <!-- Content Start -->
        <div class="content">
            <!-- Navbar -->
            <!-- Votre code de navbar ici -->
            <!DOCTYPE html>
<!-- Section pour afficher la liste des cours dans un widget -->
        <div class="col-sm-12">
                    <div class="bg-light rounded h-100 p-4">
                        <!-- Titre du widget -->
                        <h6 class="mb-4">Ajout des quizz</h6>
                        <!-- Widget contenant le contenu de listecours.php -->
                        <div class="card">
                            <div class="card-body">
                                <?php include '../view/add_question.php'; ?>
                            </div>
                        </div>
                    </div>
        </div>
      <!-- Footer Start -->
        <div class="container-fluid pt-4 px-4">
                    <div class="bg-light rounded-top p-4">
                        <div class="row">
                            <div class="col-12 col-sm-6 text-center text-sm-start">
                                &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                            </div>
                            
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer End -->
            </div>
            <!-- Content End -->


            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="libD/chart/chart.min.js"></script>
        <script src="libD/easing/easing.min.js"></script>
        <script src="libD/waypoints/waypoints.min.js"></script>
        <script src="libD/owlcarousel/owl.carousel.min.js"></script>
        <script src="libD/tempusdominus/js/moment.min.js"></script>
        <script src="libD/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="libD/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

        <!-- Template Javascript -->
        <script src="jsD/main.js"></script>
    </body>

    </html>   