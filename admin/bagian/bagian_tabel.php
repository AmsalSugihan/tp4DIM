<!-- Mulai Tabel -->
<!-- <div class="container-fluid">
	<div class="row">
        <div class="col-md-7 col-md-offset-2">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th> </th>
                        <th> Nama Bagian </th>
                        <th> Edit </th>
                        <th> Delete </th>
                    </tr>
                    <tr>
                    <?php
                        foreach ($DaftarBagian as $key => $data) {
                    ?>
                        <td> <?php echo $key+1 ?> </td>
                        <td> <?php echo $data["nama_bagian"] ?> </td>
              
                        <td> 
                            <a href="bagian_form_edit.php?id=<?php echo $data['id_bagian'] ?>">
                            <button type="button" class="btn btn-primary">
                                <span class="glyphicon glyphicon-pencil">
                                    Edit
                                </span>
                            </button>
                            </a> 
                        </td>
                        <td> 
                            <a href="bagian_delete.php?id=<?php echo $data["id_bagian"]; ?>">
                            <button onclick="return confirm('Hapus data ini?')" type="button" class="btn btn-danger">
                                <span class="glyphicon glyphicon-trash">
                                    Delete
                                </span>
                            </button>
                            </a> 
                        </td>
                        
                        </tr>
                        <?php
                        }
                    ?>    
                </table>
            </div>
        </div>
	</div> -->
</div>

<div class="card-body">
        <table class="table table-bordered table-striped list_datatable">
            <thead>        
                <tr>
                    <th> </th>
                    <th> Nama Bagian </th>
                    <th> Edit </th>
                    <th> Delete </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                <?php
                    foreach ($DaftarBagian as $key => $data) {
                ?>
                        <td> <?php echo $key+1 ?> </td>
                        <td> <?php echo $data["nama_bagian"] ?> </td>
                        <td> 
                            <a href="bagian_form_edit.php?id=<?php echo $data['id_bagian'] ?>">
                            <button type="button" class="btn btn-primary">
                                <span class="glyphicon glyphicon-pencil">
                                    Edit
                                </span>
                            </button>
                            </a> 
                        </td>
                        <td> 
                            <a href="bagian_delete.php?id=<?php echo $data["id_bagian"]; ?>">
                            <button onclick="return confirm('Hapus data ini?')" type="button" class="btn btn-danger">
                                <span class="glyphicon glyphicon-trash">
                                    Delete
                                </span>
                            </button>
                            </a> 
                        </td>
                        
                   
                    
                </tr>
                    <?php
                    }
                ?>   
            </tbody> 
            <tfoot>
                <tr>
                    <th> </th>
                    <th> Nama Bagian </th>
                    <th> Edit </th>
                    <th> Delete </th>
                </tr>
            </tfoot>
        </table>
    </div>