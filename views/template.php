<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Cevicheria Todo Barato</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="views/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="views/assets/css/font-awesome.css">

    <link rel="stylesheet" href="views/assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="views/assets/css/owl-carousel.css">

    <link rel="stylesheet" href="views/assets/css/lightbox.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header***** -->
    <?php include "modulos/header.php"; ?>
    <!-- ***** Header***** -->

    <!-- ***** Main Banner Slide ***** -->
    <?php include "modulos/slide.php"; ?>
    <!-- ***** Main Banner Slide End ***** -->

    <!-- ***** About Area Starts ***** -->
    <?php include "modulos/about.php"; ?>
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
    <?php include "modulos/menu.php"; ?>
    <!-- ***** Menu Area Ends ***** -->

    <!-- ***** Chefs Area Starts ***** -->
    <?php include "modulos/chef.php"; ?>
    <!-- ***** Chefs Area Ends ***** -->

    <!-- ***** Reservation Us Area Starts ***** -->
    <?php include "modulos/agenda.php"; ?>
    <!-- ***** Reservation Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
    <?php include "modulos/special.php"; ?>
    <!-- ***** Chefs Area Ends ***** --> 
    
    <!-- ***** Footer Start ***** -->
    <?php include "modulos/footer.php"; ?>

    <!-- jQuery -->
    <script src="views/assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="views/assets/js/popper.js"></script>
    <script src="views/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="views/assets/js/owl-carousel.js"></script>
    <script src="views/assets/js/accordions.js"></script>
    <script src="views/assets/js/datepicker.js"></script>
    <script src="views/assets/js/scrollreveal.min.js"></script>
    <script src="views/assets/js/waypoints.min.js"></script>
    <script src="views/assets/js/jquery.counterup.min.js"></script>
    <script src="views/assets/js/imgfix.min.js"></script> 
    <script src="views/assets/js/slick.js"></script> 
    <script src="views/assets/js/lightbox.js"></script> 
    <script src="views/assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="views/assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>