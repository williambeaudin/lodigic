<?php include
'includes/head.php';
?>


<section class="section-contact dark-bg" id="section-contact">
     <div class="container">
         <h2><?php echo $lang['contact'] ?></h2>
     </div>
 <?php if(!empty($emailSent)): ?>
     <div class="col-md-6 ">
         <div class="alert alert-success text-center"><?php echo $lang['success'] ?></div>
     </div>
 <?php else: ?>
     <?php if(!empty($hasError)): ?>
     <div class="col-md-6">
         <div class="alert alert-danger text-center"><?php echo $lang['error'] ?></div>
     </div>
     <?php endif; ?>

     <div class="col-md-6 contact-form2">
     <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" enctype="application/x-www-form-urlencoded" id="contact-form" class="form-horizontal" method="post">
         <div class="form-group">
               <div class="col-lg-10 contact-form2">
                 <input type="text" class="form-control" id="form-name" name="form-name" placeholder="<?php echo $lang['name'] ?>" required>
             </div>
         </div>
         <div class="form-group">
               <div class="col-lg-10 contact-form2">
                 <input type="email" class="form-control" id="form-email" name="form-email" placeholder="<?php echo $lang['email'] ?>" required>
             </div>
         </div>
         <div class="form-group">
              <div class="col-lg-10 contact-form2">
                 <input type="text" class="form-control" id="form-subject" name="form-subject" placeholder="<?php echo $lang['subject'] ?>" required>
             </div>
         </div>
         <div class="form-group">
               <div class="col-lg-10 contact-form2">
                 <textarea class="form-control" rows="3" id="form-message" name="form-message" placeholder="message" required></textarea>
             </div>
         </div>
        <div class="form-group">
             <div class="col-lg-offset-2 col-lg-10 arrow contact-form2">
                 <button type="submit" class="btn btn-primary"><div class="btn-text"><?php echo $lang['btn_send'] ?>&nbsp;<i class="fas fa-angle-right"></i></div></button>
             </div>
         </div>
     </form>
 </div>

 <?php endif; ?>
</section>
 <!--/*  Footer  */     -->

 <?php include
 'includes/footer.php';
 ?>
