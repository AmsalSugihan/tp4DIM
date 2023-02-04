<?php
	include "../admin/session_admin.php";
	include "stok_konek.php";
  include "../page_layout/head.php";
?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><?php echo @$title ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active"><?php echo @$title ?></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>


	<?php
		// include "navbar.php";
		//include "pesanan_tambah.php";				
		include "stok_tabel.php";
		
	?>
<?php
  include "../page_layout/footer.php";
?>