<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0-rc
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url()?>/public/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url()?>/public/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- ChartJS -->
<script src="<?php echo base_url()?>/public/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url()?>/public/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url()?>/public/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url()?>/public/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url()?>/public/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url()?>/public/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url()?>/public/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url()?>/public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url()?>/public/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url()?>/public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>/public/dist/js/adminlte.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<!-- validate -->
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url()?>/public/dist/js/pages/dashboard.js"></script>
<script src="<?php echo base_url()?>/public/dist/js/traduccion.js"></script>
<script src="<?php echo base_url()?>/public/dist/js/validator.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
     <?php  if($this->session->flashdata('success')): ?>
      Swal.fire(
  '<?php echo $this->session->flashdata('success')?>',
  'Click para cerrar',
  'success'
)
  <?php $this->session->sess_destroy(); ?>
     
     <?php endif; ?>
</script>

<script >
$('#producto').DataTable( {


    ajax: {
        url: '<?php echo base_url()?>all',
        dataSrc: ''
    },
    columns: [{
      title:'nombres',
      data:'nombres'

    },
    {
      "title":'apellidos',
      "data":'apellidos'

    },

    {
      "title":'email',
      "data":'email'

    },
    {
      "title":'identificacion',
      "data":'identificacion'

    },

    {
      
                        sortable: false,
                        "render": function ( data, type, row, meta ) {
                            return `<a href='<?php echo base_url()?>delete/${row.identificacion}' value='${row.identificacion}'class="btn btn-danger" id="delete"><i class="fas fa-trash-alt"></i></a> 
                             <a href='<?php echo base_url()?>editar/${row.identificacion}' data-bs-toggle="modal" data-bs-target="#exampleModal" value='${row.identificacion}'class="btn btn-dark"><i class="fas fa-user-edit"></i></a>
                            `;
                        }

    }

    


    

  ]
  
} );





</script>
  
</body>

</html>