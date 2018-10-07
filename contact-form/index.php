<?php
require_once './vendor/autoload.php';

$helperLoader = new SplClassLoader('Helpers', './vendor');
$mailLoader   = new SplClassLoader('SimpleMail', './vendor');

$helperLoader->register();
$mailLoader->register();

use Helpers\Config;
use SimpleMail\SimpleMail;

$config = new Config;
$config->load('./config/config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = stripslashes(trim($_POST['form-name']));
    $email   = stripslashes(trim($_POST['form-email']));
    $subject = stripslashes(trim($_POST['form-subject']));
    $message = stripslashes(trim($_POST['form-message']));
    $pattern = '/[\r\n]|Content-Type:|Bcc:|Cc:/i';

    if (preg_match($pattern, $name) || preg_match($pattern, $email) || preg_match($pattern, $subject)) {
        die("Header injection detected");
    }

    $emailIsValid = filter_var($email, FILTER_VALIDATE_EMAIL);

    if ($name && $email && $emailIsValid && $subject && $message) {
        $mail = new SimpleMail();

        $mail->setTo($config->get('emails.to'));
        $mail->setFrom($config->get('emails.from'));
        $mail->setSender($name);
        $mail->setSenderEmail($email);
        $mail->setSubject($config->get('subject.prefix') . ' ' . $subject);

        $body = "
        <!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
        <html>
            <head>
                <meta charset=\"utf-8\">
            </head>
            <body>
                <h1>{$subject}</h1>
                <p><strong>{$config->get('fields.name')}:</strong> {$name}</p>
                <p><strong>{$config->get('fields.email')}:</strong> {$email}</p>
                <p><strong>{$config->get('fields.message')}:</strong> {$message}</p>
            </body>
        </html>";

        $mail->setHtml($body);
        $mail->send();

        $emailSent = true;
    } else {
        $hasError = true;
    }
}
?><!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500" rel="stylesheet">
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/12.1.5/js/smooth-scroll.min.js" integrity="sha256-MMt0/21G3z0Zg4ET1kI3HC9npItDowkitRDVr0FhCxA=" crossorigin="anonymous"></script>
        <script src="vendors/js/jquery.waypoints.min.js"></script>
<!--        <script src="ressources/js/script.js"></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js" integrity="sha256-jGAkJO3hvqIDc4nIY1sfh/FPbV+UK+1N+xJJg6zzr7A=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" integrity="sha256-HAaDW5o2+LelybUhfuk0Zh2Vdk8Y2W2UeKmbaXhalfA=" crossorigin="anonymous" />
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="apple-touch-icon" sizes="180x180" href="/ressources/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/ressources/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/ressources/favicons/favicon-16x16.png">
        <link rel="manifest" href="/ressources/favicons/site.webmanifest">
        <link rel="mask-icon" href="/ressources/favicons/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="/ressources/favicons/favicon.ico">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="/ressources/favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
    <meta charset="utf-8">
<!--    <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" media="screen">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../ressources/css/style.css">
</head>
 <body id="page-form">




<!--/*  Nav  */-->

              <nav id="global-nav" class="nav navbar navbar-expand-lg navbar-custom py-3 navbar-dark target">
                <a class="navbar-brand" href="../index.php">Fan designing</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="../index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../index.php#section-about">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../index.php#section-projects">Projects</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../index.php#section-services">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../index.php#section-team">Team</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link">Contact</a>
                  </li>
                </ul>
              </div>
            </nav>

                <div class="jumbotron">
                    <div class="container">
                        <h1>Contact us!</h1>
                        <p>Send us a message and we'll get back to you as soon as possible.</p>
                    </div>
                </div>


    <?php if(!empty($emailSent)): ?>
        <div class="col-md-6">
            <div class="alert alert-success text-center"><?php echo $config->get('messages.success'); ?></div>
        </div>
    <?php else: ?>
        <?php if(!empty($hasError)): ?>
        <div class="col-md-6">
            <div class="alert alert-danger text-center"><?php echo $config->get('messages.error'); ?></div>
        </div>
        <?php endif; ?>

        <div class="col-md-6">
        <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" enctype="application/x-www-form-urlencoded" id="contact-form" class="form-horizontal" method="post">
            <div class="form-group">
                  <div class="col-lg-10">
                    <input type="text" class="form-control" id="form-name" name="form-name" placeholder="<?php echo $config->get('fields.name'); ?>" required>
                </div>
            </div>
            <div class="form-group">
                  <div class="col-lg-10">
                    <input type="email" class="form-control" id="form-email" name="form-email" placeholder="<?php echo $config->get('fields.email'); ?>" required>
                </div>
            </div>
            <div class="form-group">
                 <div class="col-lg-10">
                    <input type="text" class="form-control" id="form-subject" name="form-subject" placeholder="<?php echo $config->get('fields.subject'); ?>" required>
                </div>
            </div>
            <div class="form-group">
                  <div class="col-lg-10">
                    <textarea class="form-control" rows="3" id="form-message" name="form-message" placeholder="<?php echo $config->get('fields.message'); ?>" required></textarea>
                </div>
            </div>
           <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10 arrow">
                    <button type="submit" class="btn btn-primary"><div class="btn-text"><?php echo $config->get('fields.btn-send'); ?>&nbsp;<i class="fas fa-angle-right"></i></div></button>
                </div>
            </div>
        </form>
    </div>

        <footer>
                 <div class="row">
                     <div class="footer-text">
                                         <p>
                     Copyright &copy;  2018 | Fan Designing
                    </p>
                    <ul class="social-links">
                        <li><a href="https://www.facebook.com/fandesigning" target="_blank"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="https://twitter.com/FanDesigning" target="_blank"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/fandesigning" target="_blank"><i class="ion-social-instagram"></i></a></li>
                    </ul>
                    </div>
                 </div>
        </footer>

    <?php endif; ?>

    <script type="text/javascript" src="public/js/contact-form.js"></script>
    <script type="text/javascript">
        new ContactForm('#contact-form');
    </script>





        <script>


$(document).ready(function(){
  var scrollTop = 0;
  $(window).scroll(function(){
    scrollTop = $(window).scrollTop();
     $('.counter').html(scrollTop);

    if (scrollTop >= 100) {
      $('#global-nav').addClass('scrolled-nav');
    } else if (scrollTop < 100) {
      $('#global-nav').removeClass('scrolled-nav');
    }

  });

});


        $(function () {
            var scroll = new SmoothScroll('a[href*="#section-"]', {
                  offset: 70,
            });
        });

            $(document).ready(function () {
  $(".navbar-nav li a").click(function(event) {
    $(".navbar-collapse").collapse('hide');
  });
});
                                    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });


                    $(function () {
            var scroll = new SmoothScroll('a[href*="#section-"]', {
                  offset: 70,
            });
        });

            $(document).ready(function () {
  $(".navbar-nav li a").click(function(event) {
    $(".navbar-collapse").collapse('hide');
  });
});

            $(document).ready(function () {
    $('button[type=button]').click(function () {
         $('.target').toggleClass('active');
    });
});


        </script>

     <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114156167-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-114156167-1');
</script>


</body>
</html>
