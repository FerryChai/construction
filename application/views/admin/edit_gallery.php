<div class="container" style="min-height: 50vw">
	<div style="padding-top: 150px; padding-bottom: 100px;">
		<h3 class="font-bold">Gallery</h3>

		<a href="#tambah" class="btn light-blue darken-1 modal-trigger right" style="margin-bottom: 20px;">Tambah</a>

					<div id="tambah" class="modal">
					    <div class="modal-title" style="margin-left: 20px; margin-top: 20px;">
					    	<h4 class="font-bold" style="margin-bottom: 0;">Tambah</h4>
					    </div>
					    <div class="modal-content">
					    	<form action="<?= base_url(); ?>admin/tambahgallery" method="POST" class="row col s12" enctype="multipart/form-data">
					    		<div class="col s12">
                                	<div class="file-field input-field">
								      	<div class="btn light-blue darken-1">
								        	<span>File</span>
								        	<input type="file" name="fotogallery" required>
								      	</div>
								      	<div class="file-path-wrapper">
								        	<input class="file-path validate" type="text">
								      	</div>
								    </div>
                                </div>

                                <div class="col s12 row">
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
                                </div>

                                <div class="col s12">
                                    <div class="input-field">
                                        <input  id="keterangan" type="text" class="validate" name="keterangan" required>
                                        <label for="keterangan">Keterangan</label>
                                    </div>
                                </div>
					    </div>

					   	<div class="modal-footer">
					      	<button type="submit" class="btn btn-sm light-blue darken-1">Tambah</button>
					      	</form>
					    </div>
					</div>



		<table class="centered responsive-table highlight grey lighten-5 z-depth-12">
	        <thead class="light-blue darken-1 white-text">
	          <tr>
	              <th>No</th>
	              <th>Gambar</th>
	              <th>Nama Gambar</th>
	              <th>Keterangan</th>
	              <th>Urutan</th>
	              <th>Status</th>
	              <th>Option</th>
	          </tr>
	        </thead>

	        <tbody>
	    		<?php 
	        	$i = 1;
	        	foreach($gallery as $gal) : ?>
		          	<tr>
			            <td><?= $i; ?></td>
			            <td style="width: 200px; height: 200px;"><div class="card-photo" style="height: 100%; background-image: url(../../img/gallery/<?= $gal['Nama_Gallery']; ?>); position: relative; margin: 0; "></div></td>
			            <td><?= $gal['Nama_Gallery']; ?></td>
			            <td><?= $gal['Keterangan']; ?></td>
			            <td><?= $gal['Urutan']; ?></td>
			            <td><?= $gal['Tampil']; ?></td>
			            <td>
			            	<a href="#edit<?= $i; ?>" class="btn btn-sm light-blue darken-1 modal-trigger">Edit</a>
			            	<a href="<?= base_url(); ?>admin/hapus/2/<?= $gal['Id'] ?>" class="btn btn-sm red">Hapus</a>
			            </td>
			        </tr>
		          	
		          	<div id="edit<?= $i; ?>" class="modal">
					    <div class="modal-title" style="margin-left: 20px; margin-top: 20px;">
					    	<h4 class="font-bold" style="margin-bottom: 0;">Edit</h4>
					    </div>
					    <div class="modal-content">
					    	<form action="<?= base_url(); ?>admin/editgallery" method="POST" class="row" enctype="multipart/form-data">

                                <div class="col s6">
                                    <div class="input-field">
                                        <input  id="urut" type="number" class="validate" name="urutan" value="<?= $gal['Urutan']; ?>">
                                        <label for="urut">Urutan</label>
                                    </div>
                                </div>

                                <div class="col s6">
                                    <div class="input-field">
                                        <input  id="status" type="text" class="validate" name="status" value="<?= $gal['Tampil']; ?>" required>
                                        <label for="status">Status</label>
                                    </div>
                                </div>

                                <div class="col s12">
                                    <div class="input-field">
                                        <input  id="keterangan" type="text" class="validate" name="keterangan" value="<?= $gal['Keterangan']; ?>" required>
                                        <label for="keterangan">Keterangan</label>
                                    </div>
                                </div>
					    </div>

					   	<div class="modal-footer">
					      	<button type="submit" class="btn btn-sm light-blue darken-1">Ubah</button>
					      	<input type="hidden" name="idgallery" value="<?= $gal['Id']; ?>">
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
