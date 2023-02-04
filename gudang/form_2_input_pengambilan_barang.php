<!-- mulai form -->
<?php
	include "pengambilan_konek.php";
?>
    <div class="container-fluid">
    	<div class="col-md-7 col-md-offset-2">
    		<form class="form-horizontal" method="post" action="pengambilan_simpan.php">
    			<legend> Form Input Pengambilan </legend>
                
                <div class="form-group">
                	<label for="nama instansi" class="col-md-4"> Pengambilan Barang  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="jumlah pengambilan" placeholder="Nama yang Mengambil Pesanan" name="nama_pengambil">
                    </div>
                </div>
                <div class="form-group">
                	<label for="nama_barang" class="col-md-4"> Nama Barang  </label>
                	<div class="col-md-7">
                    	<select class="form-control" name="id_barang" id="nama_barang">
                          	<option value="">----- Nama Barang Yang diambil -----</option>
                            	<?php
									foreach($DaftarBarang as $dri){
										echo '<option value="'.$dri['id_barang'].'">'.$dri['nama_barang'].'</option>';
									}
								?>
                            	
                          </select>

                    </div>
                </div>
                                
                <div class="form-group">
                	<label for="jumlah pesanan" class="col-md-4"> Jumlah Pengambilan  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="jumlah pengambilan" placeholder="Jumlah Pengambilan Barang dalam angka" name="jumlah_pengambilan">
                    </div>
                </div>
                <div class="form-group">
                	<div class="col-md-7 col-md-offset-2">
                		<a href="bagian.php">
                    		<input type="submit" class="btn btn-primary" name="simpan" value="simpan"> 
                        	<input type="reset" class="btn btn-danger" name="batal" value="batal">
                    	</a>
                    </div>
                </div>
    		</form>
        </div>
    </div>
    
    <!-- akhir form -->
