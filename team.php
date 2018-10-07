<?php include
'includes/head.php';
?>

        <section class="section-team dark-bg" id="section-team">
           <div class="container">
                <h2><?php echo $lang['team'] ?></h2>
                     <div class="row container-fluid">
               <div class="col-xs-12 col-sm-12 col-lg-6 team-container">
				<div class="row team-photo">
				  <img src="img/fan.jpg" alt="fan profile picture">
                </div>
                <div class="team-name">
                   <h3>Chia Fan</h3>
                    <h4><?php echo $lang['fan_title'] ?></h4>
                    <p><?php echo $lang['fan_bio'] ?></p>
                   </div>
                </div>
                               <div class="col-xs-12 col-sm-12 col-lg-6 team-container">
				<div class="row team-photo">
				  <img src="img/william.png" alt="will profile picture">
                </div>
                <div class="team-name">
                   <h3>William</h3>
                    <h4><?php echo $lang['will_title'] ?></h4>
                    <p><?php echo $lang['will_bio'] ?></p>
                   </div>
                </div>
               </div>

              </div>
        </section>

        <div class="footer">
          <a href="team.php?lang=en"><?php echo $lang['lang_en'] ?></a> |
          <a href="team.php?lang=fr"><?php echo $lang['lang_fr'] ?></a>
        </div>



    </body>
</html>
