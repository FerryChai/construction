<div style="height: 100vh; background-image: url(img/home.jpeg);">
	<div class="banner-overlay">
		<div class="container">
			<div class="row" style="padding-top: 15%;">
				<div class="col l4 m4"></div>
		        <div class=" col l4 m4 s12 card hoverable z-depth-12 white" style="padding: 0;" data-aos="fade-up-top" data-aos-delay="400">
		          	<div>
		            	<div class="card-content light-blue darken-1">
		            		<h4 class="font-bold center white-text">Login</h4>	
				        </div>    
				        <div class="divider"></div>
				        <div class="card-content">
				        	<form class="row" action="<? base_url() ?>admin/login" method="POST">
				        		<div class="col s12">
                                    <div class="input-field">
                                        <input id="nama" type="text" class="validate" name="nama">
                                        <label for="nama">Username</label>
                                    </div>
                                </div>
                                  
                                <div class="col s12">
                                    <div class="input-field">
                                        <input  id="pass" type="password" class="validate" name="password">
                                        <label for="pass">Password</label>
                                    </div>
                                </div>
				 		
				 		</div>
				        
						        <div class="card-action center" style="margin-bottom: 10px;">
						            <button type="submit" class="btn btn-sm light-blue darken-1">Login</button>
						        </div>
					    	</form>
		          	</div>
		        </div>
		        <div class="l4 m4"></div>
		      </div>
		</div>
	</div>
</div>