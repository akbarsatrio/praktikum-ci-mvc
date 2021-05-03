	</div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url('vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?= base_url('vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.24/datatables.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $(document).ready( function () {
      $('.tableKu').DataTable();
      $("#menu-toggle").click(function(e) {
          e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    });
  </script>

</body>

</html>