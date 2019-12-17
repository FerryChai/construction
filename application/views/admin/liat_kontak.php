<div class="container" style="min-height: 50vw">
	<div style="padding-top: 150px; padding-bottom: 100px;">
		<h3 class="font-bold">Daftar Kontak</h3>
		<table class="centered responsive-table highlight grey lighten-5 z-depth-12">
	        <thead class="light-blue darken-1 white-text">
	          <tr>
	              <th>No</th>
	              <th>Nama</th>
	              <th>Email</th>
	              <th>Subjek</th>
	              <th>Keterangan</th>
	              <th>Option</th>
	          </tr>
	        </thead>

	        <tbody>
	    		<?php 
	        	$i = 1;
	        	foreach($kontak as $kon) : ?>
		          	<tr>
			            <td><?= $i; ?></td>
			            <td><?= $kon['Nama']; ?></td>
			            <td><?= $kon['Email']; ?></td>
			            <td><?= $kon['Subjek']; ?></td>
			            <td>
			            	<a href="#ket<?= $i; ?>" class="btn btn-sm light-blue darken-1 modal-trigger">ISI</a>
			            </td>
			            <td>
			            	<a href="<?= base_url(); ?>admin/hapus/5/<?= $kon['Id'] ?>" class="btn btn-sm red" style="margin-top: 5px;" >Hapus</a>
			            </td>
			        </tr>
		          	
		          	<div id="ket<?= $i; ?>" class="modal">
					    <div class="modal-title" style="margin-left: 20px; margin-top: 20px;">
					    	<h4 class="font-bold" style="margin-bottom: 0;"><?= $kon['Subjek']; ?></h4>
					    </div>
					    <div class="modal-content">
					    	<?= $kon['Keterangan']; ?>
					    </div>
					</div>
	          	<?php
	          	$i++;
	          	endforeach; ?>
	        </tbody>
	    </table>
    </div>
</div>
