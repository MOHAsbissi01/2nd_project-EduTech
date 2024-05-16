<?php
    include "../config.php";
    include "../controller/reclamationC.php";
    include "../model/reclamation.php";
    
    $error = null;
    $rec = null;
    if(isset($_POST["nom"]) 
    && isset($_POST["num"]) 
    && isset($_POST["email"]) 
    && isset($_POST["description"])){
        if(!empty($_POST["nom"])
        && !empty($_POST["num"])
        && !empty($_POST["email"])
        && !empty($_POST["description"])){
            $rec = new reclamation(null
            ,$_POST["nom"]
            ,$_POST["num"]
            ,$_POST["email"]
            ,$_POST["description"]
            );
            $recC = new reclamationC();
            $recC->addreclamation($rec);
            $success_message = "Reclamation submitted successfully!";
        }
        else{
            $error = "Missing info"; 
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EduTechHub - EduTechHub HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

<?php
    require ('menu.php');
    ?>
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Reclamation</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
         
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Contact Us</h6>
                <h1 class="mb-5">Contact For Any Query</h1>
            </div>
                <div class="container" data-wow-delay="0.5s">
                <?php if (!empty($error)): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>
            <?php if (!empty($success_message)): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $success_message; ?>
                </div>
            <?php endif; ?>
                    <form action=""  method="POST" onsubmit="return validateForm()">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="nom" id="nom" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email"   id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="number" class="form-control" name="num" id="num"  placeholder="Your number">
                                    <label for="Your number">Your number</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" name="description" id="description" style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

 

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <script>
        function validateForm() {
            var nom = document.getElementById("nom").value;
            var num = document.getElementById("num").value;
            var email = document.getElementById("email").value;
            var description = document.getElementById("description").value;
            var error = false;

            // Vérification du nom
            var nomRegex = /^[a-zA-Z\s]*$/; // Permet uniquement les lettres et les espaces
            if (!nomRegex.test(nom)) {
                document.getElementById("nom_error").innerText = "Nom incorrect";
                error = true;
            } else {
                document.getElementById("nom_error").innerText = "";
            }

            // Vérification du numéro de téléphone
            if (num == "" || isNaN(num)) {
                document.getElementById("num_error").innerText = "Numéro incorrect";
                error = true;
            } else {
                document.getElementById("num_error").innerText = "";
            }

            // Vérification de l'email
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                document.getElementById("email_error").innerText = "Email incorrect";
                error = true;
            } else {
                document.getElementById("email_error").innerText = "";
            }

            if (description == "") {
                document.getElementById("description_error").innerText = "Description incorrecte";
                error = true;
            } else {
                document.getElementById("description_error").innerText = "";
            }

            if (error) {
                return false; // Empêche l'envoi du formulaire si des erreurs sont présentes
            }
            return true; // Permet l'envoi du formulaire si aucune erreur n'est présente
        }
    </script>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>