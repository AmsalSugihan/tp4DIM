
<section class="content">
    <div class="container-fluid">
      
	<div class="col-md-7 col-md-offset-2">
    		<form class="form-horizontal" method="post" action="barang_simpan.php">
    			<legend> Form Input Barang </legend>
                <div class="form-group">
                	<label for="nama_barang" class="col-md-4"> Nama Barang  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="nama_barang" placeholder="nama barang" name="nama_barang">
                    </div>
                </div>
                
                <div class="form-group">
                	<label for="harga_barang" class="col-md-4"> Harga Barang  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="harga_barang" placeholder="harga barang" name="harga_barang">
                    </div>
                </div>
                <div class="form-group">
                	<label for="biaya_penyimapan" class="col-md-4"> Biaya Penyimpanan  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="biaya_peyimpanan" placeholder="biaya penyimpanan" name="biaya_penyimpanan">
                    </div>
                </div>
                <div class="form-group">
                	<label for="periode_permintaan" class="col-md-4"> Periode Permintaan  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="periode_permintaan" placeholder="periode permintaan" name="periode_permintaan">
                    </div>
                </div>
                <div class="form-group">
                	<label for="satuan" class="col-md-4"> Satuan  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="keterangan" placeholder="Satuan Barang" name="satuan">
                    </div>
                </div>
                
                <div class="form-group">
                	<label for="satuan" class="col-md-4"> Konversi  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="konversi" placeholder="Konversi Satuan Barang" name="konversi">
                    </div>
                </div>
                                               
                <div class="form-group">
                	<div class="col-md-7 col-md-offset-2">
                		
                    		<input type="submit" class="btn btn-primary" name="simpan" value="simpan">
                        	<a class="btn btn-danger" href="index.php" role="button">Batal</a>
                    </div>
                </div>
    		</form>
        </div>
    </div>
</section>
    
    <!-- akhir form -->
