        <!-- footer content -->
        <footer>
          <div class="pull-right">
            <?php $a = $this->db->select('nama_sekolah')->from('tbl_profile')->get()->row();echo $a->nama_sekolah ?> - <a href="https://api.whatsapp.com/send?phone=+6281271130255&text=Kami%20Berminat%20Website%20Anda">Dharma-System</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <!-- Bootstrap -->
    <script src="<?= base_url() ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?= base_url() ?>vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
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