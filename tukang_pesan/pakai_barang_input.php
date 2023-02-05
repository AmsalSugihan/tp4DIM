<?php
include "../class/config.php";
include "../class/pemesanan.php";

	$id = $_GET['id'];
	

	
	$d1 = new database();
	$d1->koneksidatabase();
	
	$GunaBarang = new pemesanan();
	$GunaBarang->GunaBarang();
	$listBarang = $GunaBarang->GunaBarang();
	$PakaiBarang = $GunaBarang->PakaiBarangById($id);
	
?>	
<!-- mulai form -->
<div class="card">
    <div class="card-header">
        <h2 class="card-title">Form Pakai Barang</h2>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form class="form-horizontal" method="post" action="pakai_barang_update.php">
        <?php

            if(empty($PakaiBarang)){

            }else{
                foreach ($PakaiBarang as $key => $value) { ?>
                <input type="hidden" name="id_pesanan" value="<?php echo $value['id_pesanan'] ?>">
                <div class="form-group">
                    <label for="nama_bagian" class="col-md-2"> Nama Barang  </label>
                    <div class="col-md-7">
                        <input type="text" disabled class="form-control" id="id_barang" name="id_barang" value="<?php echo $value['id_barang']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Harga Barang" class="col-md-2"> Pakai  </label>
                    <div class="col-md-7">
                        <input type="text" class="form-control" id="pakai" name="pakai" value="<?php echo $value['pakai']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-7 col-md-offset-2">
                        <input type="submit" class="btn btn-md btn-primary" name="update" value="Update" >
                            <a class="btn btn-danger" href="index.php" role="button">Batal</a>
                        
                    </div>
                </div>
            <?php
                }
            }
        ?>
        </form>
    </div>
</div>
    
    <!-- akhir form -->