<div class="container" style="width: 88%;">
    <div style="padding-top: 120px;">

    <div class="row">
       

        <div class="col l9 m9 s12">
            <div class="card z-depth-12" style="border-radius: 10px;">
                <div class="card-content">
                    <div class="row">

                        <?php if($jenis == "rebana") { ?>
                            <div  class="col l6 m6 s12" data-aos="zoom-out-up" data-aos-delay="200">
                                <div class="card" style="border-radius: 10px;">
                                    <div class="card-image" style="border-radius: 10px;">
                                        <div id="rebana" class="owl-carousel">
                                            <?php for($i = 1; $i<8; $i++ ) {
                                                     if($produk['Gambar_'.$i] != NULL){
                                            ?>
                                                <a data-fancybox="gallery" href="../../../img/produk/<?= $produk['Gambar_'.$i]; ?>" data-caption="<?= $produk['Nama_Barang']; ?>">
                                                    <div class="card-photo" style="border-radius: 10px;height: 350px;background-image: url('../../../img/produk/<?= $produk['Gambar_'.$i] ?>')" alt="">
                                                    </div>
                                                </a>
                                            <?php   } 
                                                }
                                            ?>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } 
                        
                        else{


                        ?>
                            <div class="col l6 m6 s12" data-aos="zoom-out-up" data-aos-delay="200">
                                <div class="card" style="border-radius: 10px;">
                                    <div class="card-image" style="border-radius: 10px;">
                                        
                                        <a data-fancybox="gallery" href="../../../img/produk/<?= $produk['Gambar']; ?>" data-caption="<?= $produk['Nama']; ?>">
                                            <div class="card-photo" style="border-radius: 10px;height: 350px;background-image: url('../../../img/produk/<?= $produk['Gambar'] ?>')" alt="">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        <?php }; ?>

                        <div class="col l6 m6 s12">
                            <div style="margin-left: 10px; padding-top: 20%;">

                                <div data-aos="zoom-out-up" data-aos-delay="200">
                                    <?php if($jenis == "rebana"){ ?>
                                        <h3 class="grey-text text-darken-3 font-bold"><?= $produk['Nama_Barang']; ?></h3>
                                    <?php } 

                                    else{?>
                                        <h3 class="grey-text text-darken-3 font-bold"><?= $produk['Nama']; ?></h3>
                                    <?php } ?>
                                    <br>                                                                    
                                    <a  href="https://api.whatsapp.com/send?phone=6282213844350" class="btn btn-large light-blue darken-1 waves-effect modal-trigger" style="margin-top: 15px;text-transform: capitalize"><i class="left fab fa-whatsapp"></i>Beli via Whatsapp</a>
                                    <br>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card z-depth-12" style="border-radius: 10px;" data-aos="zoom-out-up" data-aos-delay="200">
                <div class="card-content">
                    <h5 class="grey-text text-darken-3 comfortaa" style="margin-bottom: 30px;">Detail Produk</h5>
                    <p class="grey-text text-darken-2 font-light">
                        <p>
                            <?= $produk['Keterangan']; ?>
                        </p>

                        <br>

                        <p>Syarat & Ketentuan Pembelian :</p>

                        <p>1. Produk pesanan dalam proses dikemas telah melewati dua pemeriksaan serta penghitungan total jumlah pada barang atau produk sebelum dikirim pada jasa pengiriman.</p>

                        <p>2. Selanjutnya Produk yang telah diterima, maka tidak dapat dikembalikan atau retur.</p>

                        <p>3. Membeli berati setuju atas perhatian kebijakan di atas pada no 1 & 2.</p>

                        <br>

                        <p>HAPPY SHOPPING</p>
                    </p>
                </div>
            </div>
        </div>

        <div class="col l3 m3 s12" data-aos="zoom-out-up" data-aos-delay="200">
            <h5 class="grey-text text-darken-3" style="margin-bottom: 30px;">Produk lainnya</h5>
                
                <?php
                if($jenis == "rebana"){
                    for($x=0; $x<2; $x++) { 
                        if($produk['Nama_Barang'] != $list[$x]['Nama_Barang'])
                        {
                ?>

                            <div class="card horizontal z-depth-12" style="border-radius: 10px;">
                                <div class="card-image">
                                    <img src="../../../img/produk/<?= $list[$x]['Gambar_1']; ?>" style="border-top-left-radius: 10px;border-bottom-left-radius: 10px;border-right: 1px solid #ddd;">
                                </div>
                                <div class="card-stacked">
                                    <div class="card-content">
                                        <a href="<?= base_url(); ?>user/lihatproduk/<?= $no ?>/<?= $list[$x]['Id']; ?>" class="comfortaa grey-text text-darken-3" style="font-size: 17px;">
                                            <?= $list[$x]['Nama_Barang']; ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                <?php  
                        }
                    }   
                }else{
                    for($x=0; $x<5; $x++) { 
                        if($produk['Nama'] != $list[$x]['Nama'])
                        {
                ?>
                            <div class="card horizontal z-depth-12" style="border-radius: 10px;">
                                <div class="card-image">
                                    <img src="../../../img/produk/<?= $list[$x]['Gambar']; ?>" style="border-top-left-radius: 10px;border-bottom-left-radius: 10px;border-right: 1px solid #ddd;">
                                </div>
                                <div class="card-stacked">
                                    <div class="card-content">
                                        <a href="<?= base_url(); ?>user/lihatproduk/<?= $no ?>/<?= $list[$x]['Id']; ?>" class="comfortaa grey-text text-darken-3" style="font-size: 17px;">
                                            <?= $list[$x]['Nama']; ?>
                                        </a>
                                    </div>
                                </div>
                            </div>

                <?php  
                        }
                    }   
                }

                ?>

        </div>
    

    </div>
    </div>
</div>