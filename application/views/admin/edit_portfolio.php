<div class="container" style="min-height: 50vw">
	<div style="padding-top: 150px; padding-bottom: 100px;">
		
		<h3 class="font-bold">Portfolio</h3>	
		
		
		<a href="#tambah" class="btn light-blue darken-1 modal-trigger right" style="margin-bottom: 20px;">Tambah</a>

					<div id="tambah" class="modal">
					    <div class="modal-title" style="margin-left: 20px; margin-top: 20px;">
					    	<h4 class="font-bold" style="margin-bottom: 0;">Tambah</h4>
					    </div>

					    <div class="modal-content">
					    	<form action="<?= base_url(); ?>admin/tambahportfolio" method="POST" class="row col s12" enctype="multipart/form-data">
					    		<div class="col s12">
                                    <div class="input-field">
                                        <input id="rumah" type="text" class="validate" name="jenisRumah" required>
                                        <label for="rumah">Jenis Rumah</label>
                                    </div>
                                </div>
                                
                                <div class="col s12">
                                    <div class="input-field">
                                        <input  id="alamat" type="text" class="validate" name="alamat" required>
                                        <label for="alamat">Alamat</label>
                                    </div>
                                </div>

                                <div class="col s4">
                                	<div class="input-field">
	                                     <input  id="ukuran" type="text" class="validate" name="ukuran" required>
	                                     <label for="ukuran">Ukuran Rumah</label>
	                                </div>	
                               	</div>

                                <div class="col s4">
                                	<div class="input-field">
	                                    <input  id="kmr" type="number" class="validate" name="kamar" required>
	                                    <label for="kmr">Kamar</label>
	                                </div>	
                               	</div>

                               	<div class="col s4">
                              		<div class="input-field">
	                                    <input  id="kmrmandi" type="number" class="validate" name="kamarmandi" required>
	                                    <label for="kmrmandi">Kamar Mandi</label>
	                                </div>	
                              	</div>

                              	<div class="col s12">
                                    <div class="input-field">
                                        <input  id="ket" type="text" class="validate" name="keterangan" required>
                                        <label for="ket">Keterangan</label>
                                    </div>
                                </div>

                                <div class="col s6">
                                    <div class="input-field">
                                        <input  id="urut" type="number" class="validate" name="urutan">
                                        <label for="urut">Urutan</label>
                                    </div>
                                </div>

                                <div class="col s6">
                                    <div class="input-field">
                                        <input  id="status" type="text" class="validate" name="status" required>
                                        <label for="status">Status</label>
                                    </div>
                                </div>
                                
                                <div class="col s12">
                                	<div class="file-field input-field">
								      	<div class="btn light-blue darken-1">
								        	<span>File</span>
								        	<input type="file" name="fotoportfolio" required>
								      	</div>
								      	<div class="file-path-wrapper">
								        	<input class="file-path validate" type="text">
								      	</div>
								    </div>
                                </div>

					    </div>

					   	<div class="modal-footer">
					      	<button type="submit" class="btn btn-sm light-blue darken-1">Submit</button>
					    	</form>
					    </div>
					</div>
		
			
		
		<table class="centered responsive-table highlight grey lighten-5 z-depth-12">
	        <thead class="light-blue darken-1 white-text">
	          <tr>
	              <th>No</th>
	              <th>Gambar</th>
	              <th>Jenis Rumah</th>
	              <th>Alamat</th>
	              <th>Ukuran Rumah</th>
	              <th>Kamar</th>
	              <th>Kamar mandi</th>
	              <th>Keterangan</th>
	              <th>Urutan</th>
	              <th>Tampil</th>
	              <th>Option</th>
	          </tr>
	        </thead>

	        <tbody>
	    		<?php 
	        	$i = 1;
	        	foreach($portfolio as $port) : ?>
		          	<tr>
			            <td><?= $i; ?></td>
			            <td style="width: 200px; height: 200px;"><div class="card-photo" style="height: 100%; background-image: url(../../img/portofolio/<?= $port['Gambar']; ?>); position: relative; margin: 0; "></div></td>
			            <td><?= $port['Jenis_Rumah']; ?></td>
			            <td><?= $port['Alamat']; ?></td>
			            <td><?= $port['Ukuran']; ?></td>
			            <td><?= $port['Kamar']; ?></td>
			            <td><?= $port['Kamar_Mandi']; ?></td>
			            <td><?= $port['Keterangan']; ?></td>
			            <td><?= $port['Urutan']; ?></td>
			            <td><?= $port['Tampil']; ?></td>
			            <td>
			            	<a href="#edit<?= $i; ?>" class="btn btn-sm light-blue darken-1 modal-trigger">Edit</a>
			            	<a href="<?= base_url(); ?>admin/hapus/1/<?= $port['Id'] ?>" class="btn btn-sm red" style="margin-top: 5px;" >Hapus</a>
			            </td>
			        </tr>
		          	
		          	<div id="edit<?= $i; ?>" class="modal">
					    <div class="modal-title" style="margin-left: 20px; margin-top: 20px;">
					    	<h4 class="font-bold" style="margin-bottom: 0;">Edit</h4>
					    </div>
					    <div class="modal-content">
					    	<form action="<?= base_url(); ?>admin/editportfolio" method="POST" class="row col s12" enctype="multipart/form-data">
					    		<div class="col s12">
                                    <div class="input-field">
                                        <input id="rumah" type="text" class="validate" name="jenisRumah" value="<?= $port['Jenis_Rumah']; ?>"required>
                                        <label for="rumah">Jenis Rumah</label>
                                    </div>
                                </div>
                                  
                                
                                <div class="col s12">
                                    <div class="input-field">
                                        <input  id="alamat" type="text" class="validate" name="alamat" value="<?= $port['Alamat']; ?>" required>
                                        <label for="alamat">Alamat</label>
                                    </div>
                                </div>

                                <div class="col s12 row">
	                                <div class="col s4">
	                                	<div class="input-field">
		                                     <input  id="ukuran" type="text" class="validate" name="ukuran" value="<?= $port['Ukuran']; ?>" required>
		                                     <label for="ukuran">Ukuran Rumah</label>
		                                </div>	
	                               	</div>
	                                <div class="col s4">
	                                	<div class="input-field">
		                                    <input  id="kmr" type="number" class="validate" name="kamar" value="<?= $port['Kamar']; ?>" required>
		                                    <label for="kmr">Kamar</label>
		                                </div>	
	                               	</div>
	                               	<div class="col s4">
	                              		<div class="input-field">
		                                    <input  id="kmrmandi" type="number" class="validate" name="kamarmandi" value="<?= $port['Kamar_Mandi']; ?>" required>
		                                    <label for="kmrmandi">Kamar Mandi</label>
		                                </div>	
	                              	</div>
                              	</div>

                              	<div class="col s12">
                                    <div class="input-field">
                                        <input  id="ket" type="text" class="validate" name="keterangan" value="<?= $port['Keterangan']; ?>" required>
                                        <label for="ket">Keterangan</label>
                                    </div>
                                </div>

                                <div class="col s12 row">
	                                <div class="col s6">
	                                    <div class="input-field">
	                                        <input  id="urut" type="number" class="validate" name="urutan" value="<?= $port['Urutan']; ?>">
	                                        <label for="urut">Urutan</label>
	                                    </div>
	                                </div>

	                                <div class="col s6">
	                                    <div class="input-field">
	                                        <input  id="status" type="text" class="validate" name="status" value="<?= $port['Tampil']; ?>" required>
	                                        <label for="status">Status</label>
	                                    </div>
	                                </div>                   
                                </div>             
					    </div>

					   	<div class="modal-footer">
					      	<button type="submit" class="btn btn-sm light-blue darken-1">Ubah</button>
					      	<input type="hidden" name="idportfolio" value="<?= $port['Id']; ?>">
					      	</form>
					    </div>

					</div>
	          	<?php
	          	$i++;
	          	endforeach; ?>
	        </tbody>
	    </table>

	    <p style="padding-top: 30px;">
	    	*Urutan tidak boleh ada yang sama.</br>
	    	*Status "Y" untuk menampilkan, "N" untuk tidak di tampilkan di halaman home
	    </p>
    </div>
</div>
