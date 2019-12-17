<div class="container" style="min-height: 50vw">
	<div style="padding-top: 150px; padding-bottom: 100px;">
		
		<h3 class="font-bold">Tentang Kami</h3>	
		
		
		<a href="#tambahmisi" class="btn light-blue darken-1 modal-trigger right" style="margin-bottom: 20px;">Tambah Misi</a>

					<div id="tambahmisi" class="modal">
					    <div class="modal-title" style="margin-left: 20px; margin-top: 20px;">
					    	<h4 class="font-bold" style="margin-bottom: 0;">Tambah</h4>
					    </div>

					    <div class="modal-content">
					    	<form action="<?= base_url(); ?>admin/tambahabout" method="POST" class="row col s12" enctype="multipart/form-data">
					    		<div class="col s12">
                                    <div class="input-field">
                                        <input id="keterangan" type="text" class="validate" name="keterangan" required>
                                        <label for="keterangan">Keterangan</label>
                                    </div>
                                </div>
					    </div>

					   	<div class="modal-footer">
					      	<button type="submit" class="btn btn-sm light-blue darken-1">Submit</button>
					      	<input type="hidden" name="jenis" value="misi">
					    	</form>
					    </div>
					</div>
			
		
		<table class="centered responsive-table highlight grey lighten-5 z-depth-12">
	        <thead class="light-blue darken-1 white-text">
	          <tr>
	              <th>No</th>
	              <th>Jenis</th>
	              <th>Judul</th>
	              <th>Keterangan</th>
	              <th>Option</th>	              
	          </tr>
	        </thead>

	        <tbody>
	    		<?php 
	        	$i = 1;
	        	foreach($about as $ab) : ?>
		          	<tr>
			            <td><?= $i; ?></td>
			            <td><?= $ab['Jenis']; ?></td>
			            <td><?= $ab['Judul']; ?></td>
			            <td><?= $ab['Keterangan']; ?></td>
			            <td>
			            	<a href="#edit<?= $i; ?>" class="btn btn-sm light-blue darken-1 modal-trigger">Edit</a>
			            	<?php if($ab['Jenis'] == "misi") {?>
			            		<a href="<?= base_url(); ?>admin/hapus/4/<?= $ab['Id'] ?>" class="btn btn-sm red" style="margin-top: 5px;" >Hapus</a>
			            	<?php }; ?>
			            </td>
			        </tr>
		          	
		          	<div id="edit<?= $i; ?>" class="modal">
					    <div class="modal-title" style="margin-left: 20px; margin-top: 20px;">
					    	<h4 class="font-bold" style="margin-bottom: 0;">Edit</h4>
					    </div>
					    <div class="modal-content">
					    	<form action="<?= base_url(); ?>admin/editabout" method="POST" class="row col s12" enctype="multipart/form-data">
					    		

					    		<?php if($ab['Jenis'] == "prinsip") {?>
				            		
					    			<div class="col s12">
	                                    <div class="input-field">
	                                        <input id="judul" type="text" class="validate" name="judul" value="<?= $ab['Judul']; ?>"required>
	                                        <label for="judul">Judul</label>
	                                    </div>
	                                </div>

				            	<?php }; ?>

					    		<div class="col s12">
                                    <div class="input-field">
                                        <input id="keterangan" type="text" class="validate" name="keterangan" value="<?= $ab['Keterangan']; ?>"required>
                                        <label for="keterangan">Keterangan</label>
                                    </div>
                                </div>
					    </div>

					   	<div class="modal-footer">
					      	<button type="submit" class="btn btn-sm light-blue darken-1">Ubah</button>
					      	<input type="hidden" name="idabout" value="<?= $ab['Id']; ?>">
					      	<input type="hidden" name="jenis" value="<?= $ab['Jenis']; ?>">
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
