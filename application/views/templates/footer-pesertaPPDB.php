        <!-- footer content -->
        <footer>
          <div class="pull-right">
            <?php $a = $this->db->select('nama_sekolah')->from('tbl_profile')->get()->row();echo $a->nama_sekolah ?> - <a href="https://api.whatsapp.com/send?phone=+62895410941799&text=Kami%20Berminat%20Website%20Anda">DioBs</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <!-- Bootstrap -->
    <script src="<?= base_url() ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?= base_url() ?>vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?= base_url() ?>vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?= base_url() ?>vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?= base_url() ?>vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?= base_url() ?>vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?= base_url() ?>vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?= base_url() ?>vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?= base_url() ?>vendors/Flot/jquery.flot.js"></script>
    <script src="<?= base_url() ?>vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?= base_url() ?>vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?= base_url() ?>vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?= base_url() ?>vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?= base_url() ?>vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?= base_url() ?>vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?= base_url() ?>vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?= base_url() ?>vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?= base_url() ?>vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?= base_url() ?>vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?= base_url() ?>vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?= base_url() ?>vendors/moment/min/moment.min.js"></script>
    <script src="<?= base_url() ?>vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- jQuery custom content scroller -->
    <script src="<?= base_url() ?>vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!--  Sweet Alert  -->
    <style>
      .swal2-popup{
        font-size: 1.5rem;
      }
    </style>
    <script src="<?= base_url() ?>vendors/pnotify/dist/pnotify.js"></script>
    <script src="<?= base_url() ?>vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="<?= base_url() ?>vendors/pnotify/dist/pnotify.nonblock.js"></script>
    
    <script src="<?= base_url() ?>vendors/sweetalert/sweetalert2.all.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?= base_url() ?>build/js/custom.min.js"></script>
    <script src="<?= base_url() ?>build/js/alert.js"></script>
    <style>
      .ui-pnotify{
        width: 250px;
      }
    </style>
  </body>
</html>