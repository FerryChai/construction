          <div class="parallax-container" style="height:100vh;">
              <div class="parallax"><img src="../img/produk.jpeg"></div>
              <div class="banner-overlay">
                  <div class="container center" style="padding-top:150px;">
                      <h3 data-aos="zoom-out-up" class="font-bold before-header-p">
                          Product
                      </h3>
                      <h3 data-aos="zoom-out-up" data-aos-delay="200" class="font-bold banner-header-p" style="margin-top: 40px;">
                          Selain jasa, ada juga barang yang kami jual untuk anda.
                      </h3>
                  </div>
              </div>
          </div>

    <div class="grid-kuburan" style="padding-top:3%;padding-bottom: 4%;" data-aos="fade-up">
        <div class="container">

          <div style="margin-bottom: 6%;" data-aos="zoom-out-up" data-aos-delay="200">
            <blockquote class="font-bold" style="border-left: 5px solid #039be5"><h2>Rebana</h2> </blockquote>
          </div>

          <div class="row" data-aos="zoom-out-up" data-aos-delay="400">
            <?php foreach($rebana as $reb) :?>
                <div class="col l4 m6 s6 z-depth-12">
                    <div class="card hoverable grey lighten-5">
                      <div class="card-image fitur-mh">
                        <div style="min-height: 200px; max-height: 350px; overflow: hidden;">
                          <img src="../img/produk/<?= $reb['Gambar_1']; ?>" style="min-height: 200px; max-height: 350px;" class ="responsive-img">  
                        </div>
                      </div>

                      <div class="card-content">
                        <span class="card-title black-text center" style="font-size: 20px; height: 32px; overflow: hidden;"><?= $reb['Nama_Barang']?></span>
                      </div>

                      <div class="card-action center">
                        <a href="<?= base_url(); ?>user/lihatproduk/1/<?= $reb['Id']; ?>" class="light-blue-text text-darken-1 modal-trigger" style="margin: 0; margin-right: 10px;">Detail</a>                        
                      </div>
                    </div>
                </div>
            <?php endforeach; ?>
          </div>

            <div style="margin-bottom: 6%; margin-top: 10%;" data-aos="zoom-out-up" data-aos-delay="200">
              <blockquote class="font-bold" style="border-left: 5px solid #039be5"><h2>Sepatu</h2> </blockquote>
            </div>

            <div class="row" data-aos="zoom-out-up" data-aos-delay="400">

              <?php foreach($sepatu as $sep) :?>
                <div class="col l4 m6 s6 z-depth-12">
                    <div class="card hoverable grey lighten-5">
                      <div class="card-image fitur-mh">
                        <div style="min-height: 200px; max-height: 350px; overflow: hidden;">
                          <img src="../img/produk/<?= $sep['Gambar']; ?>" class ="responsive-img">
                        </div>
                        <?php if($sep['Recommended'] == "Y") { ?>
                          <a class="btn-floating halfway-fab waves-effect waves-light light-blue darken-1"><i class="material-icons">grade</i></a>
                        <?php } ?>
                      </div>

                      <div class="card-content">
                        <span class="card-title black-text center" style="font-size: 20px; height: 32px; overflow: hidden;"><?= $sep['Nama']; ?></span>
                      </div>

                      <div class="card-action center">
                        <a href="<?= base_url(); ?>user/lihatproduk/2/<?= $sep['Id']; ?>" class="light-blue-text text-darken-1 modal-trigger" style="margin: 0; margin-right: 10px;">Detail</a>                        
                      </div>
                    </div>
                </div>
              <?php endforeach; ?>

            </div>


          <div style="margin-bottom: 6%; margin-top: 10%;" data-aos="zoom-out-up" data-aos-delay="200">
            <blockquote class="font-bold" style="border-left: 5px solid #039be5"><h2>Jam Tangan</h2> </blockquote>
          </div>

          <div class="row" data-aos="zoom-out-up" data-aos-delay="400">
            
              <?php foreach ($jam as $jm) : ?>
                  <div class="col l4 m6 s6 z-depth-12">
                      <div class="card hoverable grey lighten-5">
                        <div class="card-image fitur-mh" >
                          <div style="min-height: 200px; max-height: 350px; overflow: hidden;">
                            <img src="../img/produk/<?= $jm['Gambar']; ?>" class ="responsive-img">
                          </div>
                          <?php if($jm['Recommended'] == "Y") { ?>
                                <a class="btn-floating halfway-fab waves-effect waves-light light-blue darken-1"><i class="material-icons">grade</i></a>
                          <?php } ?>                                     
                        </div>

                        <div class="card-content">
                          <span class="card-title black-text center" style="font-size: 20px; height: 32px; overflow: hidden;"><?= $jm['Nama']; ?></span>

                        </div>

                        <div class="card-action center">
                          <a href="<?= base_url(); ?>user/lihatproduk/3/<?= $jm['Id']; ?>" class="light-blue-text text-darken-1 modal-trigger" style="margin: 0; margin-right: 10px;">Detail</a>                          
                        </div>
                      </div>
                  </div>
              <?php endforeach; ?>
            
          </div>
      


        </div>
    </div>