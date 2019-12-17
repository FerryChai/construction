<div class="container" style="min-height: 50vw">
	<div style="padding-top: 150px; padding-bottom: 100px;">
		<h3 class="font-bold">Pelayanan</h3>
		<table class="centered responsive-table highlight grey lighten-5 z-depth-12">
	        <thead class="light-blue darken-1 white-text">
	          <tr>
	              <th>No</th>
	              <th>Judul</th>
	              <th>Keterangan</th>
	              <th>Option</th>
	          </tr>
	        </thead>

	        <tbody>
	    		<?php 
	        	$i = 1;
	        	foreach($pelayanan as $pel) : ?>
		          	<tr>
			            <td><?= $i; ?></td>
			            <td><?= $pel['Judul']; ?></td>
			            <td><?= $pel['Keterangan']; ?></td>
			            <td><a href="#edit<?= $i; ?>" class="btn btn-sm light-blue darken-1 modal-trigger">Edit</a></td>
			        </tr>
		          	
		          	<div id="edit<?= $i; ?>" class="modal">
					    <div class="modal-title" style="margin-left: 20px; margin-top: 20px;">
					    	<h4 class="font-bold" style="margin-bottom: 0;">Edit</h4>
					    </div>
					    <div class="modal-content">
					    	<form action="<?= base_url(); ?>admin/editpelayanan" method="POST" class="row">
					    		<div class="col s12">
                                    <div class="input-field">
                                        <input id="judul" type="text" class="validate" name="judul" value="<?= $pel['Judul']; ?>">
                                        <label for="judul">Judul</label>
                                    </div>
                                </div>
                                  
                                <div class="col s12">
                                    <div class="input-field">
                                        <input  id="keterangan" type="text" class="validate" name="keterangan" value="<?= $pel['Keterangan']; ?>">
                                        <label for="keterangan">Keterangan</label>
                                    </div>
                                </div>
					    </div>

					   	<div class="modal-footer">
					      	<button type="submit" class="btn btn-sm light-blue darken-1">Ubah</button>
					      	<input type="hidden" name="idpelayanan" value="<?= $pel['Id']; ?>">
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
