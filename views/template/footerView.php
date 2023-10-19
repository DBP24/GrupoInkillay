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


   <script src="<?= media();?>/js/logout.js"></script>

   <!-- SweetAlert2 -->
   <script src="<?= media();?>/js/sweetalert2.min.js"></script>

   <!-- JS Files-->
   <script src="<?= media();?>/js/jquery.min.js"></script>
   <script src="<?= media();?>/js/simplebar.min.js"></script>
   <script src="<?= media();?>/js/metisMenu.min.js"></script>
   <script src="<?= media();?>/js/bootstrap.bundle.min.js"></script>
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

   <!--plugins-->
   <script src="<?= media();?>/js/perfect-scrollbar.js"></script>

   <!--DataTables-->
   <script src="<?= media();?>/js/jquery.dataTables.min.js"></script>
   <script src="<?= media();?>/js/dataTables.bootstrap5.min.js"></script>
   <script src="<?= media();?>/js/table-datatable.js"></script>

   <script src="<?= media();?>/js/apexcharts.min.js"></script>
   <script src="<?= media();?>/js/jquery.easypiechart.js"></script>
   <script src="<?= media();?>/ja/chart.min.js"></script>
   <script src="<?= media();?>/js/index.js"></script>
   <!-- Main JS-->
   <script src="<?= media();?>/js/main.js"></script>

  

   </body>

   </html>