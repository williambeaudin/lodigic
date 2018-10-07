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
<body>

  <?php include
  'nav.php';
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
