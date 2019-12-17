    <div class="parallax-container" style="height:90vh;">
        <div class="parallax"><img src="../img/portfolio.jpeg"></div>
        <div class="banner-overlay">
            <div class="container center" style="padding-top:150px;">
                <h3 data-aos="zoom-out-up" class="font-bold before-header-p">
                    Portofolio
                </h3>
                <h3 data-aos="zoom-out-up" data-aos-delay="200" class="font-bold banner-header-p" style="margin-top: 40px;">
                    Pengalaman kami dalam kegiatan pembangunan di setiap klien.
                </h3>
            </div>
        </div>
    </div>

            <div class="grid-kuburan">

                <div class="container">                        

                    <div class="row portfolio-grid" style="margin-top:80px;">
                        
                        <?php foreach($portfolio as $port) : ?>
                            <div class="col s6 portfolio-card" data-aos="zoom-out-up" data-aos-delay="400">
                                <div class="card z-depth-12 hoverable grey lighten-5" style="border-radius: 10px;">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <a data-fancybox="gallery" href="../img/portofolio/<?= $port['Gambar']; ?>" data-caption="<?= $port['Jenis_Rumah']; ?>">
                                            <img class="activator" src="../img/portofolio/<?= $port['Gambar']; ?>">
                                        </a>
                                    </div>
                                
                                    <div class="card-content">
                                        <span class="card-title activator grey-text text-darken-4"><?= $port['Jenis_Rumah']; ?><i class="material-icons right">chevron_right</i></span>
                                    </div>
                                
                                    <div class="card-reveal">
                                        <h3 class="card-title grey-text text-darken-4"><i class="material-icons right">close</i><?= $port['Jenis_Rumah']; ?></h3>
                                        <p>Deskripsi Rumah</p>
                                        <ul>
                                            <li>Ukuran : <?= $port['Ukuran']; ?> M</li>
                                            <li>Kamar : <?= $port['Kamar']; ?></li>
                                            <li>Kamar Mandi : <?= $port['Kamar_Mandi']; ?></li>
                                            <li>
                                                <?= $port['Keterangan']; ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>

                </div>

            </div>