   <!--start footer-->
   <footer class="footer">
       <div class="footer-text">
           Copyright © <?= date("Y");   echo " " .  empresa();?>. Todos los derechos reservados.
       </div>
   </footer>
   <!--end footer-->


   <!--Start Back To Top Button-->
   <a href="javaScript:;" class="back-to-top">
       <ion-icon name="arrow-up-outline"></ion-icon>
   </a>
   <!--End Back To Top Button-->


   <script>
    const base_url = "<?= base_url(); ?>";
    const media_url = "<?= media(); ?>";
   </script>
   <!--start overlay-->
   <div class="overlay nav-toggle-icon"></div>
   <!--end overlay-->

   </div>
   <!--end wrapper-->

   <!-- Cerrar Sesión -->
   <script src="<?= media();?>/js/logout.js"></script>
 
   <!-- SweetAlert2 -->
   <script src="<?= media();?>/js/sweetalert2.min.js"></script> 

   <!-- JS Files-->
   <script src="<?= media();?>/js/jquery.min.js"></script>
   <script src="<?= media();?>/js/simplebar.min.js"></script>
   <script src="<?= media();?>/js/metisMenu.min.js"></script>
   <script src="<?= media();?>/js/bootstrap.bundle.min.js"></script>
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  
   <!-- Main JS-->
   <script src="<?= media();?>/js/main.js"></script>

  

 