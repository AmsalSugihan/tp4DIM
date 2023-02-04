<!-- jQuery -->
<script src="<?php echo '../assets/AdminLTE/plugins/jquery/jquery.min.js' ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo '../assets/AdminLTE/plugins/jquery-ui/jquery-ui.min.js'?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- <script>
  $.widget.bridge('uibutton', $.ui.button)
</script> -->
<!-- Bootstrap 4 -->
<script src="<?php echo '../assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>

<!-- Select2 -->
<script src="<?php echo '../assets/AdminLTE/plugins/select2/js/select2.full.min.js' ?>"></script>

<!-- ChartJS -->
<script src="<?php echo '../assets/AdminLTE/plugins/chart.js/Chart.min.js' ?>"></script>

<!-- daterangepicker -->
<script src="<?php echo '../assets/AdminLTE/plugins/moment/moment.min.js' ?>"></script>
<script src="<?php echo '../assets/AdminLTE/plugins/daterangepicker/daterangepicker.js' ?>"></script>

<!-- DataTables  & Plugins -->
<script src="<?php echo '../assets/AdminLTE/plugins/datatables/jquery.dataTables.min.js' ?>"></script>
<script src="<?php echo '../assets/AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js' ?>"></script>
<script src="<?php echo '../assets/AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js' ?>"></script>
<script src="<?php echo '../assets/AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js' ?>"></script>
<script src="<?php echo '../assets/AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js' ?>"></script>
<script src="<?php echo '../assets/AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js' ?>"></script>
<script src="<?php echo '../assets/AdminLTE/plugins/jszip/jszip.min.js' ?>"></script>
<script src="<?php echo '../assets/AdminLTE/plugins/pdfmake/pdfmake.min.js' ?>"></script>
<script src="<?php echo '../assets/AdminLTE/plugins/pdfmake/vfs_fonts.js' ?>"></script>
<script src="<?php echo '../assets/AdminLTE/plugins/datatables-buttons/js/buttons.html5.min.js' ?>"></script>
<script src="<?php echo '../assets/AdminLTE/plugins/datatables-buttons/js/buttons.print.min.js' ?>"></script>
<script src="<?php echo '../assets/AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js' ?>"></script>

<!-- overlayScrollbars -->
<script src="<?php echo '../assets/AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js' ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo '../assets/AdminLTE/dist/js/adminlte.js' ?>"></script>
<!-- AdminLTE for demo purposes -->

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="<?php // echo base_url('assets/AdminLTE/dist/js/pages/dashboard.js') ?>"></script> -->

<!-- <script>
  $(function () {
    $('.list_datatable').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      "scrollX": true,
    });
  })
  
  function FormatCurrency(ctrl) {
    //Check if arrow keys are pressed - we want to allow navigation around textbox using arrow keys
    if (event.keyCode == 37 || event.keyCode == 38 || event.keyCode == 39 || event.keyCode == 40) {
      return;
    }
    var val = ctrl.value;

    val = val.replace(/,/g, "")
    ctrl.value = "";
    val += '';
    x = val.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';

    var rgx = /(\d+)(\d{3})/;

    while (rgx.test(x1)) {
      x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }

    ctrl.value = x1 + x2;
  }

  function CheckNumeric() {
    return event.keyCode >= 48 && event.keyCode <= 57 || event.keyCode == 46;
  }
  
</script> -->
