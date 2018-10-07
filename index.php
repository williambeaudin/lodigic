<?php
  include "config.php";
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title><?php echo $lang['title'] ?></title>
  <meta name="description" content="Lodgic web design solutions">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cutive+Mono" rel="stylesheet">
  <link rel="stylesheet" media="screen" href="css/style.css">
</head>
<body id="page-home">


        <div class="design-container">
                <img src="img/graphic-web-design.svg" alt="graphic-web-design" class="graphic-web-design">
        </div>







        <?php include
        'includes/nav.php';
        ?>

    <div id="particles-js">
        <div class="dot-big-container">
        <a class="dot" href="contact.php">
            <div class="dot-container">
        <img src="img/dot.svg" alt="dot" id="dot-1">
                </div>
                <div class="contact-container">
            <h5 class="dot2">CONTACT</h5>
                    </div>
            </a>
            </div>
        <div class="logo-container">
            <div class="letter-container">
                <img src="img/Lodigic-slice-1.svg" alt="adobe illustrator icon" class="icon" id="slice-1">
                <img src="img/Lodigic-slice-2.svg" alt="adobe illustrator icon" class="icon" id="slice-2">
            </div>
            <div class="letter-container">
                <img src="img/Lodigic-slice-3.svg" alt="adobe illustrator icon" class="icon" id="slice-3">
                <img src="img/Lodigic-slice-4.svg" alt="adobe illustrator icon" class="icon" id="slice-4">
            </div>
            <div class="letter-container">
                <img src="img/Lodigic-slice-5.svg" alt="adobe illustrator icon" class="icon" id="slice-5">
                <img src="img/Lodigic-slice-6.svg" alt="adobe illustrator icon" class="icon" id="slice-6">
            </div>
            <div class="letter-container2">
                <img src="img/Lodigic-slice-7.svg" alt="adobe illustrator icon" class="icon" id="slice-7">
                <img src="img/Lodigic-slice-8.svg" alt="adobe illustrator icon" class="icon" id="slice-8">
            </div>
            <div class="letter-container">
                <img src="img/Lodigic-slice-9.svg" alt="adobe illustrator icon" class="icon" id="slice-9">
                <img src="img/Lodigic-slice-10.svg" alt="adobe illustrator icon" class="icon"id="slice-10">
            </div>
            <div class="letter-container">
                <img src="img/Lodigic-slice-11.svg" alt="adobe illustrator icon" class="icon" id="slice-11">
                <img src="img/Lodigic-slice-12.svg" alt="adobe illustrator icon" class="icon" id="slice-12">
            </div>
            <div class="letter-container">
                <img src="img/Lodigic-slice-13.svg" alt="adobe illustrator icon" class="icon" id="slice-13">
                <img src="img/Lodigic-slice-14.svg" alt="adobe illustrator icon" class="icon" id="slice-14">
            </div>
            <div class="letter-container">
                <img src="img/Lodigic-slice-15.svg" alt="adobe illustrator icon" class="icon" id="slice-15">
                <img src="img/Lodigic-slice-16.svg" alt="adobe illustrator icon" class="icon" id="slice-16">
            </div>
             <div class="letter-container">
                <img src="img/Lodigic-slice-17.svg" alt="adobe illustrator icon" class="icon" id="slice-17">
                <img src="img/Lodigic-slice-18.svg" alt="adobe illustrator icon" class="icon" id="slice-18">
            </div>
            <div class="container2">
                <h1>
                  <span class="typer" id="main" data-words="<?php echo $lang['quote'] ?>" data-colors="white" data-delay="150" data-deleteDelay="2000"></span>
                  <span class="cursor" data-owner="main"></span>
                </h1>
            </div>
        </div>
    </div>

    <?php include
    'includes/footer.php';
    ?>

<!-- scripts -->
<script src="particles.js"></script>
<script src="js/app.js"></script>
<script src="js/typer.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
    <script>
    		$(window).on("load", function() {
				$('.icon').addClass('normal');
                $('.container2').addClass('normal');
                $('.letter-container2').addClass('normal');
                $('.dot').addClass('normal');
                $('.dot2').addClass('normal');

                   setTimeout(function() {
       $('.icon').removeClass("normal");
   }, 35000);
                                   setTimeout(function() {
       $('.icon').addClass("normal");
   }, 45000);
			});
</script>

<script>
                $(document).ready(function () {
    $('button[type=button]').click(function () {
         $('.target').toggleClass('active');
    });
});

   setTimeout(function() {
       $rows.removeClass("normal");
   }, 5000);


    $(document).ready(function(){
    $("button").click(function(){
        $(".fade-in").fadeToggle(300);

    });
});

</script>

</body>
</html>
