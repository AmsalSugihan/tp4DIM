<!-- mulai form -->

<section class="content">
    <div class="container-fluid">
      
	<div class="col-md-7 col-md-offset-2">
    		<form class="form-horizontal" method="post" action="pegawai_simpan.php">
    			<legend> Form Input Pegawai </legend>
                <div class="form-group">
                	<label for="id pegawai" class="col-md-4"> No. Pegawai  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="id pegawai" placeholder="nomor pegawai input disini" name="id_pegawai">
                    </div>
                </div>
                
                <div class="form-group">
                	<label for="username" class="col-md-4"> Username  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="username" placeholder="username input disini" name="username">
                    </div>
                </div>
				<div class="form-group">
                	<label for="password" class="col-md-4"> Password  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="password" placeholder="password input disini" name="password">
                    </div>
                </div>
				<div class="form-group">
                	<label for="nama pegawai" class="col-md-4"> Nama Pegawai  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="nama pegawai" placeholder="nama pegawai input disini" name="nama_pegawai">
                    </div>
                </div>
				<div class="form-group">
                	<label for="alamat pegawai" class="col-md-4"> Alamat Pegawai  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="alamat pegawai" placeholder="alamat pegawai input disini" name="alamat_pegawai">
                    </div>
                </div>

				<div class="form-group">
                	<label for="hp pegawai" class="col-md-4"> Handphone Pegawai  </label>
                	<div class="col-md-7">
                    	<input type="text" class="form-control" id="handphone pegawai" placeholder="nomor handphone pegawai input disini" name="hp_pegawai">
                    </div>
                </div>
                <div class="form-group">
                	<label for="nama pegawai" class="col-md-4"> Nama Bagian  </label>
                	<div class="col-md-7">
                    	<select class="form-control" name="id_bagian" id="id_bagian">
                          	<option value="">----- Berada di Bagian -----</option>
                            	<?php
									foreach($DaftarBagian as $dri){
										echo '<option value="'.$dri['id_bagian'].'">'.$dri['nama_bagian'].'</option>';
									}
								?>
                            	
                          </select>

                    </div>
                </div>

                                                                              
                <div class="form-group">
                	<div class="col-md-7 col-md-offset-2">
                		
                    		<input type="submit" class="btn btn-primary" name="simpan" value="simpan">
                        	<input type="reset" class="btn btn-danger" name="batal" value="batal">
                    	
                    </div>
                </div>
    		</form>
        </div>
    </div>
</section>
    
    <!-- akhir form -->
