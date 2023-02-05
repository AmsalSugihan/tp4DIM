<?php
	//session_start ();
	include "session_manager.php";
  include "../page_layout/head.php";
  ?>
  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1 class="m-0">Data EOQ</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#">EOQ</a></li>
                      <li class="breadcrumb-item active">Data EOQ</li>
                  </ol>
              </div><!-- /.col -->
          </div><!-- /.row -->
      </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  
  <section class="content">
      <div class="container-fluid">
      <!-- ########## DIBAWAH SINI BARU ISI KONTENNYA ################## -->
	<?php
		include "tabel_eoq.php";
	?>
  <!-- ########## KONTENNYA TULIS SAMPAI SEBELUM SINI ################## -->
  </div>
</section>
<?php
  include "../page_layout/footer.php";
?>