<div class="container" style="min-height: 50vw">
	<div style="padding-top: 150px; padding-bottom: 100px;">
		<h3 class="font-bold">Testimoni</h3>

		<a href="#tambah" class="btn light-blue darken-1 modal-trigger right" style="margin-bottom: 20px;">Tambah</a>

					<div id="tambah" class="modal">
					    <div class="modal-title" style="margin-left: 20px; margin-top: 20px;">
					    	<h4 class="font-bold" style="margin-bottom: 0;">Tambah</h4>
					    </div>
					    <div class="modal-content">
					    	<form action="<?= base_url(); ?>admin/tambahtesti" method="POST" class="row" enctype="multipart/form-data">		

                                <div class="col s12">
                                    <div class="input-field">
                                        <input  id="nama" type="text" class="validate" name="nama" required>
                                        <label for="nama">Nama</label>
                                    </div>
                                </div>

                                <div class="col s12">
                                    <div class="input-field">
                                        <input  id="keterangan" type="text" class="validate" name="keterangan" required>
                                        <label for="keterangan">Keterangan</label>
                                    </div>
                                </div>

                                <div class="col s12">
                                	<div class="file-field input-field">
								      	<div class="btn light-blue darken-1">
								        	<span>File</span>
								        	<input type="file" name="fototesti" required>
								      	</div>
								      	<div class="file-path-wrapper">
								        	<input class="file-path validate" type="text">
								      	</div>
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
	              <th>Foto</th>
	              <th>Nama</th>
	              <th>Keterangan</th>
	              <th>Option</th>
	          </tr>
	        </thead>

	        <tbody>
	    		<?php 
	        	$i = 1;
	        	foreach($testi as $tes) : ?>
		          	<tr>
			            <td><?= $i; ?></td>
			            <td style="width: 200px; height: 200px;"><div class="card-photo" style="height: 100%; background-image: url(../../img/testi/<?= $tes['Gambar']; ?>); position: relative; margin: 0; "></div></td>
			            <td><?= $tes['Nama']; ?></td>
			            <td><?= $tes['Keterangan']; ?></td>
			            <td>
			            	<a href="#edit<?= $i; ?>" class="btn btn-sm light-blue darken-1 modal-trigger">Edit</a>
			            	<a href="<?= base_url(); ?>admin/hapus/3/<?= $tes['Id'] ?>" class="btn btn-sm red" style="margin-top: 5px;" >Hapus</a>
			            </td>
			        </tr>
		          	
		          	<div id="edit<?= $i; ?>" class="modal">
					    <div class="modal-title" style="margin-left: 20px; margin-top: 20px;">
					    	<h4 class="font-bold" style="margin-bottom: 0;">Edit</h4>
					    </div>
					    <div class="modal-content">
					    	<form action="<?= base_url(); ?>admin/edittesti" method="POST" class="row" enctype="multipart/form-data">		

                                <div class="col s12">
                                    <div class="input-field">
                                        <input  id="nama" type="text" class="validate" name="nama" value="<?= $tes['Nama']; ?>" required>
                                        <label for="nama">Nama</label>
                                    </div>
                                </div>

                                <div class="col s12">
                                    <div class="input-field">
                                        <input  id="keterangan" type="text" class="validate" name="keterangan" value="<?= $tes['Keterangan']; ?>" required>
                                        <label for="keterangan">Keterangan</label>
                                    </div>
                                </div>
					    </div>

					   	<div class="modal-footer">
					      	<button type="submit" class="btn btn-sm light-blue darken-1">Ubah</button>
					      	<input type="hidden" name="idtesti" value="<?= $tes['Id']; ?>">
					      	</form>
					    </div>
					</div>
	          	<?php
	          	$i++;
	          	endforeach; ?>
	        </tbody>
	    </table>
    </div>
</div>
