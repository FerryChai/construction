    <div class="parallax-container" style="height:90vh;">
        <div class="parallax"><img src="../img/about.jpeg"></div>
        <div class="banner-overlay">
            <div class="container center" style="padding-top:150px;">
                <h3 data-aos="zoom-out-up" class="font-bold before-header-p">
                    Tentang Kami
                </h3>
                <h3 data-aos="zoom-out-up" data-aos-delay="200" class="font-bold banner-header-p" style="margin-top: 40px;">
                    Perusahaan pembangunan terbaik dengan tim yang profesional dan berbakat.
                </h3>
            </div>
        </div>
    </div>

     <div class="grid-kuburan" style="padding-top:5%;padding-bottom: 5%;">
        <div class="container">
            <h2 data-aos="fade-up" data-aos-delay="200" class="font-bold header-bold-text center"> Visi & Misi</h2>

            <div data-aos="fade-up" data-aos-delay="400">
                
                <h3 class="font-bold"><img src="../img/visi.svg" class="responsive-img circle" style="height:70px; padding: 10px;">VISI</h3>
                
                <h3 class="center section-article-p">
                    <?= $visi['Keterangan']; ?>
                </h3>
            </div>

            <div data-aos="fade-up" data-aos-delay="400" style="margin-top: 50px;">
                
                <h3 class="font-bold"><img src="../img/misi.svg" class="responsive-img circle" style="height:70px;padding: 10px;">MISI</h3>    
                
                <h3 class="align-left section-article-p">
                    <ol style="margin-top: 50px;">
                        <?php foreach ($misi as $mis) : ?>
                            <li style="padding-left: 50px;">
                                <?= $mis['Keterangan']; ?>
                            </li>
                            <br>
                        <?php endforeach; ?>
                    </ol>
                </h3>
            </div>
        </div>
    </div>

    <div class="grid-kuburan" style="padding-bottom: 3%;">
        <div class="container">
            <div class="row fitur-grid" style="margin-top:30px;">

                <?php 
                $logo = array("pekerja.svg","kerjasama.svg","integrasi.svg","pelayanan.svg","tekun.svg","kualitas.svg");
                $i = 0;
                foreach ($prinsip as $pr) : ?>
                    <div class="col l6 m6 s12 fitur-card" data-aos="zoom-out-up" data-aos-delay="200">
                        <div class="card z-depth-12 hoverable grey lighten-5" style="border-radius:10px;">
                            <div class="card-content">
                                <div class="row">
                                    <div class="col l3 m3 s12">
                                        <div class="center hide-on-small-only">
                                            <img src="../img/<?= $logo[$i]; ?>" class="responsive-img circle light-blue darken-1"
                                                style="height:70px;padding: 10px;" alt="">
                                        </div>
                                        <img src="../img/<?= $logo[$i]; ?>"
                                            class="hide-on-med-and-up responsive-img circle light-blue darken-1"
                                            style="height:70px;padding: 5px;" alt="">
                                    </div>
                                    <div class="col l9 m9 s12">
                                        <h3 class="grey-text text-darken-4 font-bold coloum-judul-p"><?= $pr['Judul']; ?></h3>
                                        <p class="grey-text text-darken-1 coloum-article-p">
                                            <?= $pr['Keterangan']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php 
                $i++; 
                if($i == 6)
                    $i = 0;
                endforeach; ?>

            </div>
        </div>
    </div>