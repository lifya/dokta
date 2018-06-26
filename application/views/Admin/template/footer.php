    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>&copy; Dokumentasi TA 2018. All Rights Reserved.</small>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url();?>assets/sbadmin/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url();?>assets/sbadmin/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url();?>assets/sbadmin/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <!-- Toggle between fixed and static navbar-->
    <script>
    $('#toggleNavPosition').click(function() {
      $('body').toggleClass('fixed-nav');
      $('nav').toggleClass('fixed-top static-top');
    });

    </script>
    <!-- Toggle between dark and light navbar-->
    <script>
    $('#toggleNavColor').click(function() {
      $('nav').toggleClass('navbar-dark navbar-light');
      $('nav').toggleClass('bg-dark bg-light');
      $('body').toggleClass('bg-dark bg-light');
    });

    </script>
  </div>
</body>

</html>
