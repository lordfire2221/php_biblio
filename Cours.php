<?php
session_start();
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TRAVELER - Free Travel Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center" style="width: 500px; margin-left: 670px; height: 40px;
                                    font-size: 100%;  ">
                        <p><i class="fa fa-envelope mr-2"></i>pigier.cotonou@pigierbenin.com</p>
                        <p class="text-body px-3">|</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+229 64453009</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="file:///C:/free-travel-website-template/index.html" class="navbar-brand">
                    <h1 class="m-0 text-primary"><span class="text-dark" style="font-size: 40px;">BIBLIO</span>PIGIER</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="file:///C:/free-travel-website-template/index.html" class="nav-item nav-link active">ACCUEIL</a>
                        <a href="file:///C:/free-travel-website-template/about.html" class="nav-item nav-link">A PROPOS</a>
                        <a href="file:///C:/free-travel-website-template/service.html" class="nav-item nav-link">MON ESPACE</a>
                        <a href="file:///C:/free-travel-website-template/package.html" class="nav-item nav-link">CONTACTS</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid page-header">

        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">COURS</h3>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Booking Start -->

    <!-- Search Form -->
    <div class="mb-5">
        <div class="bg-white" style="padding: 15px; width: 430px; margin-left: 1250px; margin-top: 25px;">
            <div class="input-group">
                <input type="text" class="form-control p-4" placeholder="Rechercher">
                <div class="input-group-append">
                    <span class="input-group-text bg-primary border-primary text-white"><i class="fa fa-search"></i></span>
                </div>
            </div>
        </div>
    </div>


    <div class="flex-container">

        <div class="col-lg-3 mt-4 mt-lg-0" style="padding-top: 36px;">
            <!-- Category List -->
            <div class="mb-5" style="margin-left: 24px">
                <h4 class="text-uppercase mb-4" style="letter-spacing: 4px;">Niveau d'études</h4>
                <div class="bg-white" style="padding: 30px; ">
                    <ul class="list-inline m-2">
                        <li class="mb-3 d-flex justify-content-between align-items-center">
                            <a class="text-dark" href="#premiereanne"><i class="fa fa-angle-right text-primary mr-2"></i>Licence 1</a>

                        </li>
                        <li class="mb-3 d-flex justify-content-between align-items-center">
                            <a class="text-dark" href="#deuxiemeanne"><i class="fa fa-angle-right text-primary mr-2"></i>Licence 2</a>

                        </li>
                        <li class="mb-3 d-flex justify-content-between align-items-center">
                            <a class="text-dark" href="#troisiemeanne"><i class="fa fa-angle-right text-primary mr-2"></i>Licence 3</a>

                        </li>
                        <li class="mb-3 d-flex justify-content-between align-items-center">
                            <a class="text-dark" href="#quatriemeanne"><i class="fa fa-angle-right text-primary mr-2"></i>Master 1</a>

                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <a class="text-dark" href="#cinquiemeanne"><i class="fa fa-angle-right text-primary mr-2"></i>Master 2</a>

                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <?php
        for ($id = 1; $id < 3; $id++) {
            echo ('<div class="accordion">
            <div class="container" style="position: relative;">
            <div class="label" id="premiereanne"><h3>Semestre' . $id . '</h3></div>
            
            <div class="content" style="padding:25px;" >
                <div class="container-fluid py-6" >
                    <div class="container pt-7 pb-6">
                        <div >');
            $query = $bdd->prepare("SELECT * FROM cours WHERE semestre=?");
            $query->execute([$id]);
            $data = $query->fetchAll();
            if(sizeof($data)==0)
                echo('<div class="alert">Les cours du Semestre '.$id.'  ne sont pas encore disponibles</div>');
            foreach ($data as $row) {
                echo ('<div class="col-lg-12 col-md-10 col-sm-11 pb-11">
                                           <div class="team-item bg-white mb-6" >
                                                <div class="flex-container" style="margin: 20px; padding: 10px;">
                                                    <div class="team-img position-relative overflow-hidden">
                                                         <img class="img-fluid w-100" src="' . $row['couverture'] . '" alt="" style="height: 150px;">
                                                     </div>
                                                    <div style="width: 100%; margin-left: 20px; margin-top: 9px;">
                                                         <h4 class="text-truncate">' . $row['matiere'] . '</h4>
                                                         <p class="m-0"><u>Nom de l\'enseignant:</u> ' . $row['auteur'] . '<br><u>Domaine:</u> ' . $row['classe'] . '<br> </p>                   
                                                     </div>
                                                     <div class="row" style="margin-top: 24px;">
                                                         <a class="btn btn-outline-primary btn-square" href="' . $row['lien'] . '" download="' . $row['matiere'] . '"><i class="fa fa-download"></i></a>
                                                         <a class="btn btn-outline-primary btn-square" href=""><i class="fa fa-eye"></i></a>
                                                    </div>  
                                            </div>
                                            </div>
                                        </div>
                                        <hr >');
            }
            echo ("</div>
            </div>
        </div>
    </div>
</div>");
        }
        ?>

<?php
        for ($id = 3; $id < 5; $id++) {
            echo ('<div class="accordion">
            <div class="container" style="position: relative;">
            <div class="label" id="deuxiemeanne"><h3>Semestre' . $id . '</h3></div>
            
            <div class="content" style="padding:25px;" >
                <div class="container-fluid py-6" >
                    <div class="container pt-7 pb-6">
                        <div >');
            $query = $bdd->prepare("SELECT * FROM cours WHERE semestre=?");
            $query->execute([$id]);
            $data = $query->fetchAll();
            if(sizeof($data)==0)
                echo('<div class="alert">Les cours du Semestre '.$id.'  ne sont pas encore disponibles</div>');
            foreach ($data as $row) {
                echo ('<div class="col-lg-12 col-md-10 col-sm-11 pb-11">
                                           <div class="team-item bg-white mb-6" >
                                                <div class="flex-container" style="margin: 20px; padding: 10px;">
                                                    <div class="team-img position-relative overflow-hidden">
                                                         <img class="img-fluid w-100" src="' . $row['couverture'] . '" alt="" style="height: 150px;">
                                                     </div>
                                                    <div style="width: 100%; margin-left: 20px; margin-top: 9px;">
                                                         <h4 class="text-truncate">' . $row['matiere'] . '</h4>
                                                         <p class="m-0"><u>Nom de l\'enseignant:</u> ' . $row['auteur'] . '<br><u>Domaine:</u> ' . $row['classe'] . '<br> </p>                   
                                                     </div>
                                                     <div class="row" style="margin-top: 24px;">
                                                         <a class="btn btn-outline-primary btn-square" href="' . $row['lien'] . '" download="' . $row['matiere'] . '"><i class="fa fa-download"></i></a>
                                                         <a class="btn btn-outline-primary btn-square" href=""><i class="fa fa-eye"></i></a>
                                                    </div>  
                                            </div>
                                            </div>
                                        </div>
                                        <hr >');
            }
            echo ("</div>
            </div>
        </div>
    </div>
</div>");
        }
        ?>
        <?php
        for ($id = 5; $id < 7; $id++) {
            echo ('<div class="accordion">
            <div class="container" style="position: relative;">
            <div class="label" id="troisiemeanne"><h3>Semestre' . $id . '</h3></div>
            
            <div class="content" style="padding:25px;" >
                <div class="container-fluid py-6" >
                    <div class="container pt-7 pb-6">
                        <div >');
            $query = $bdd->prepare("SELECT * FROM cours WHERE semestre=?");
            $query->execute([$id]);
            $data = $query->fetchAll();
            if(sizeof($data)==0)
                echo('<div class="alert">Les cours du Semestre '.$id.'  ne sont pas encore disponibles</div>');
            foreach ($data as $row) {
                echo ('<div class="col-lg-12 col-md-10 col-sm-11 pb-11">
                                           <div class="team-item bg-white mb-6" >
                                                <div class="flex-container" style="margin: 20px; padding: 10px;">
                                                    <div class="team-img position-relative overflow-hidden">
                                                         <img class="img-fluid w-100" src="' . $row['couverture'] . '" alt="" style="height: 150px;">
                                                     </div>
                                                    <div style="width: 100%; margin-left: 20px; margin-top: 9px;">
                                                         <h4 class="text-truncate">' . $row['matiere'] . '</h4>
                                                         <p class="m-0"><u>Nom de l\'enseignant:</u> ' . $row['auteur'] . '<br><u>Domaine:</u> ' . $row['classe'] . '<br> </p>                   
                                                     </div>
                                                     <div class="row" style="margin-top: 24px;">
                                                         <a class="btn btn-outline-primary btn-square" href="' . $row['lien'] . '" download="' . $row['matiere'] . '"><i class="fa fa-download"></i></a>
                                                         <a class="btn btn-outline-primary btn-square" href=""><i class="fa fa-eye"></i></a>
                                                    </div>  
                                            </div>
                                            </div>
                                        </div>
                                        <hr >');
            }
            echo ("</div>
            </div>
        </div>
    </div>
</div>");
        }
        ?>
        <?php
        for ($id = 7; $id < 9; $id++) {
            echo ('<div class="accordion">
            <div class="container" style="position: relative;">
            <div class="label" id="quatriemeanne"><h3>Semestre' .$id. '</h3></div>
            
            <div class="content" style="padding:25px;" >
                <div class="container-fluid py-6" >
                    <div class="container pt-7 pb-6">
                        <div >');
            $query = $bdd->prepare("SELECT * FROM cours WHERE semestre=?");
            $query->execute([$id]);
            $data = $query->fetchAll();
            if(sizeof($data)==0)
                echo('<div class="alert">Les cours du Semestre '.$id.'  ne sont pas encore disponibles</div>');
            foreach ($data as $row) {
                echo ('<div class="col-lg-12 col-md-10 col-sm-11 pb-11">
                                           <div class="team-item bg-white mb-6" >
                                                <div class="flex-container" style="margin: 20px; padding: 10px;">
                                                    <div class="team-img position-relative overflow-hidden">
                                                         <img class="img-fluid w-100" src="' . $row['couverture'] . '" alt="" style="height: 150px;">
                                                     </div>
                                                    <div style="width: 100%; margin-left: 20px; margin-top: 9px;">
                                                         <h4 class="text-truncate">' . $row['matiere'] . '</h4>
                                                         <p class="m-0"><u>Nom de l\'enseignant:</u> ' . $row['auteur'] . '<br><u>Domaine:</u> ' . $row['classe'] . '<br> </p>                   
                                                     </div>
                                                     <div class="row" style="margin-top: 24px;">
                                                         <a class="btn btn-outline-primary btn-square" href="' . $row['lien'] . '" download="' . $row['matiere'] . '"><i class="fa fa-download"></i></a>
                                                         <a class="btn btn-outline-primary btn-square" href=""><i class="fa fa-eye"></i></a>
                                                    </div>  
                                            </div>
                                            </div>
                                        </div>
                                        <hr >');
            }
            echo ("</div>
            </div>
        </div>
    </div>
</div>");
        }
        ?>

<?php
        for ($id = 9; $id < 11; $id++) {
            echo ('<div class="accordion">
            <div class="container" style="position: relative;">
            <div class="label" id="quatriemeanne"><h3>Semestre' .$id. '</h3></div>
            
            <div class="content" style="padding:25px;" >
                <div class="container-fluid py-6" >
                    <div class="container pt-7 pb-6">
                        <div >');
            $query = $bdd->prepare("SELECT * FROM cours WHERE semestre=?");
            $query->execute([$id]);
            $data = $query->fetchAll();
            if(sizeof($data)==0)
                echo('<div class="alert">Les cours du Semestre '.$id.'  ne sont pas encore disponibles</div>');
            foreach ($data as $row) {
                echo ('<div class="col-lg-12 col-md-10 col-sm-11 pb-11">
                                           <div class="team-item bg-white mb-6" >
                                                <div class="flex-container" style="margin: 20px; padding: 10px;">
                                                    <div class="team-img position-relative overflow-hidden">
                                                         <img class="img-fluid w-100" src="' . $row['couverture'] . '" alt="" style="height: 150px;">
                                                     </div>
                                                    <div style="width: 100%; margin-left: 20px; margin-top: 9px;">
                                                         <h4 class="text-truncate">' . $row['matiere'] . '</h4>
                                                         <p class="m-0"><u>Nom de l\'enseignant:</u> ' . $row['auteur'] . '<br><u>Domaine:</u> ' . $row['classe'] . '<br> </p>                   
                                                     </div>
                                                     <div class="row" style="margin-top: 24px;">
                                                         <a class="btn btn-outline-primary btn-square" href="' . $row['lien'] . '" download="' . $row['matiere'] . '"><i class="fa fa-download"></i></a>
                                                         <a class="btn btn-outline-primary btn-square" href=""><i class="fa fa-eye"></i></a>
                                                    </div>  
                                            </div>
                                            </div>
                                        </div>
                                        <hr >');
            }
            echo ("</div>
            </div>
        </div>
    </div>
</div>");
        }
        ?>
    </div>
    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="C:\free-travel-website-template\img\When to Keep and When to Throw Away Important Documents.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-5 pt-4 pb-lg-4">
                    <div class="about-text bg-white p-2 p-lg-3 my-lg-3">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 4px;">PIGIERBIBLIO</h6>
                        <h1 class="mb-3">Une bibliotèque pas comme les autres</h1>
                        <p>Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum labore sit sit ut vero no sit.</p>
                        <div class="row mb-4">
                            <div class="col-5">
                                <img class="img-fluid" src="C:\free-travel-website-template\img\Grand prix des lectrices _ février 2019 - Elle.jpg" alt="">
                            </div>
                            <div class="col-5">
                                <img class="img-fluid" src="C:\free-travel-website-template\img\Home Office Decor Inspo.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->



    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-primary"><span class="text-white">PIGIER</span>BIBLIO</h1>
                </a>
                <p>Une bibliothèque pas comme les autres, numérisée, dynamique, accessible à tous</p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Suivez-Nous</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">NOS RAYONS</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>LIVRES</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>EBOOKS</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>SUPPORTS DE COURS</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>EPREUVES</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>RAPPORT DE STAGE</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>MEMOIRES</a>
                    <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Blog</a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Usefull Links</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>A PROPOS</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Destination</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Services</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Packages</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Guides</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Testimonial</a>
                    <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>AUTRES</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">CONTACTEZ-NOUS</h5>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Carré 1270, Rue 320 AGONTINKON-
                    AYIDOTE, Cotonou Bénin</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+229 21 30 29 06</p>
                <a href="mailto:">
                    <p><i class="fa fa-envelope mr-2"></i>pigier.cotonou@pigierbrnin.com</p>
                </a>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">SUGESTION</h6>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 25px;" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-3">ENVOYEZ</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>