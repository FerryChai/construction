    <div class="parallax-container" style="height:100vh;">
        <div class="parallax"><img src="img/home.jpeg"></div>
        <div class="banner-overlay">
            <div class="container" style="padding-top:200px;">
                <h3 data-aos="zoom-out-up" class="font-bold before-header-p">
                    Selamat Datang Di Kudus Karya Inti Megah !
                </h3>
                <h3 data-aos="zoom-out-up" data-aos-delay="200" class="font-bold banner-header-p" style="margin-top: 40px;">
                    Buat Bangunan Impianmu Bersama Kudus Karya Inti Megah !
                </h3>
            </div>
        </div>
    </div>

    <div class="grid-kuburan light-blue darken-1" style="padding-top:5%;padding-bottom: 5%;">
        <div class="container">
            <h2 data-aos="fade-up" data-aos-delay="200" class="font-bold header-bold-text center" style="color: #F4FFFD;">Siapa Kami ?</h2>

            <h3 data-aos="fade-up" data-aos-delay="400" class="center section-article-p" style="color: #F4FFFD">
                Kudus Karya Inti Megah adalah Perusahaan yang di dirikan oleh Heru Subiat di Kota Kudus, Jawa Tengah. Perusahaan ini bergerak di bidang pembangunan, selain menawarkan jasa, Perusahaan ini juga menjual materi-materi yang berguna untuk pembangunan. Dengan tim yang profesional dan berbakat, Kudus Karya Inti Megah dapat memberikan hasil proyek yang berkualitas dan dapat melayani pelanggan dengan maksimal.
            </h3>

            <div class="row">
                <div class="col l3 m8 s8" data-aos="fade-up-right" data-aos-delay="200">
                    <h1 class="center deep-orange-text text-darken-2 font-bold"><span
                            class="white-text counter">140</span>+</h1>
                    <h3 class="font-light center coloum-header-p">Proyek Bangunan</h3>
                </div>
                <div class="col l3 m8 s8" data-aos="fade-up" data-aos-delay="200">
                    <h1 class="center deep-orange-text text-darken-2 font-bold"><span
                            class="white-text counter">100</span>%</h1>
                    <h3 class="font-light center coloum-header-p">Kepuasan Pelanggan</h3>
                </div>
                <div class="col l3 m8 s8" data-aos="fade-up" data-aos-delay="200">
                    <h1 class="center deep-orange-text text-darken-2 font-bold"><span
                            class="white-text counter">127</span>+</h1>
                    <h3 class="font-light center coloum-header-p">Sertifikat</h3>
                </div>
                <div class="col l3 m8 s8" data-aos="fade-up-left" data-aos-delay="200">
                    <h1 class="center deep-orange-text text-darken-2 font-bold"><span
                            class="white-text counter">300</span>%</h1>
                    <h3 class="font-light center coloum-header-p">Kualitas Pembangunan</h3>
                </div>
            </div>

        </div>
    </div>

    <div class="grid-kuburan" style="padding-top:3%;padding-bottom: 3%;">
        <div class="container">
            <h2 data-aos="fade-up" class="font-bold section-header-p center deep-orange-text text-darken-2">Pelayanan
                Kami
            </h2>
            <h2 data-aos="fade-up" data-aos-delay="200" class="font-bold header-bold-text center">Segala kebutuhan untuk Pembangunan, Semuanya ada disini</h2>

            <div class="row fitur-grid" style="margin-top:30px;">

                <?php 
                $i = 1;
                $wktu = array("200","400","200","400");
                foreach($pelayanan as $pel) : ?>

                    <div class="col l6 m6 s12 fitur-card" data-aos="zoom-out-up" data-aos-delay="<?= $wktu[$i-1]; ?>">
                        <div class="card z-depth-12 hoverable grey lighten-5" style="border-radius:10px;">
                            <div class="card-content">
                                <div class="row">
                                    <div class="col l3 m3 s12">
                                        <div class="center hide-on-small-only">
                                            <img src="img/fitur<?= $i; ?>.svg" class="responsive-img circle light-blue darken-1"
                                                style="height:70px;padding: 5px;" alt="">
                                        </div>
                                        <img src="img/fitur<?= $i; ?>.svg"
                                            class="hide-on-med-and-up responsive-img circle light-blue darken-1"
                                            style="height:70px;padding: 10px;" alt="">
                                    </div>
                                    <div class="col l9 m9 s12">
                                        <h3 class="grey-text text-darken-4 font-bold coloum-judul-p"><?= $pel['Judul']; ?></h3>
                                        <p class="grey-text text-darken-1 coloum-article-p">
                                            <?= $pel['Keterangan']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php 
                $i++;
                endforeach; ?>
                
            </div>
        </div>
    </div>


    <div class="grid-kuburan" style="padding-top:3%;padding-bottom: 5%;">
        <div class="container">
            <h2 data-aos="fade-up" class="font-bold section-header-p center deep-orange-text text-darken-2">
                Portofolio
            </h2>

            <h1 data-aos="fade-up" data-aos-delay="200" class="font-bold header-bold-text center">
                Kualitas pembangunan adalah prioritas kami.
            </h1>

            <div style="margin-top:30px;" data-aos="zoom-out-up" data-aos-delay="200">
                <div id="portofolio" class="owl-carousel">
                    <?php foreach($portfolio as $port): ?>
                        <div class="col s6">
                            <div class="card z-depth-12 hoverable grey lighten-5" style="border-radius: 10px;">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <a data-fancybox="gallery" href="img/portofolio/<?= $port['Gambar'] ?>" data-caption="<?= $port['Jenis_Rumah']; ?>">
                                        <img class="activator" src="img/portofolio/<?= $port['Gambar'] ?>">
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
                                    </ul>
                                    <p> <?= $port['Keterangan']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>            

                <div class="col l12">
                    <div class="center">
                        <a href="<?= base_url(); ?>user/portfolio" class="btn btn-large btn-minimal font-bold" style="border-radius:30px;animation-delay: 0.4s">
                            <i class="material-icons left">search</i>
                            SEE MORE
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <div class="grid-kuburan" style="padding-top:4%;padding-bottom: 4%;">
        <div class="container">
            <h2 data-aos="fade-up" class="font-bold section-header-p center deep-orange-text text-darken-2">
                Gallery
            </h2>

            <h2 data-aos="fade-up" data-aos-delay="200" class="font-bold grey-text text-darken-4 header-bold-text center">
                Kumpulan Foto Foto Proses Kerja Kami Di Lapangan.
            </h2>

            <div data-aos="zoom-out-up" style="margin-top:30px;">

                <div id="gallery" class="owl-carousel">

                    <?php foreach($gallery as $gal): ?>
                        <div class="col s4 no-padding">
                            <div class="col l12 m12 s12 ig-photo no-padding">
                                <div class="zoom-wrapper z-depth-5" style="overflow: hidden;height: 45vh;">
                                    <div class="card-photo" style="background-image: url(img/gallery/<?= $gal['Nama_Gallery']; ?>);height: 100%;position: relative;">

                                        <a data-fancybox="gallery" href="img/gallery/<?= $gal['Nama_Gallery']; ?>" data-caption="<?= $gal['Keterangan']; ?>" class="card-photo-overlay waves-effect waves-light">
                                            <div class="container">
                                                <div class="" style="text-align: center;margin-top: 18.5vh;">
                                                    <div class="row">
                                                        <div class="col l12 m12 s12">
                                                            <div class="btn btn-floating deep-orange darken-2 btn-large">
                                                                <i class="material-icons white-text large">add</i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>

                <div class="col l12">
                    <div class="center">
                        <a href="<?= base_url(); ?>user/gallery" class="btn btn-large btn-minimal font-bold"
                            style="border-radius:30px ;animation-delay: 0.4s; margin-top:30px;"><i class="material-icons left">search</i>SEE MORE</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="grid-kuburan" style="padding-top:3%; padding-bottom: 4%;">
        <div class="container">

            <h2 data-aos="fade-up" class="font-bold section-header-p center deep-orange-text text-darken-2">Testimoni
                Pelayanan
            </h2>

            <h2 data-aos="fade-up" data-aos-delay="200" class="font-bold grey-text text-darken-4 header-bold-text center">
                Kumpulan testimoni pelanggan terhadap pelayanan kami.
            </h2>

            <div data-aos="zoom-out-up" style="margin-top:30px;">
                <div id="testi" class="owl-carousel">
                    <?php foreach ($testi as $tes): ?>
                        <div class="col l6 m12 s12 row" style="margin-bottom:20px;">
                            <div class="col l4 m4 s6 no-padding">
                                <div class="col l12 m12 s12 ig-photo no-padding">
                                    <div class="zoom-wrapper z-depth-5"
                                        style="overflow: hidden;height: 150px;border-radius: 100%;width: 150px;">
                                        <div class="card-photo"
                                            style="background-image: url(img/testi/<?= $tes['Gambar']; ?>);height: 100%;position: relative;border-radius: 100%;width: 150px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col l8 m8 s12">
                                <p class="grey-text text-darken-1 coloum-article-p">
                                    "<?= $tes['Keterangan']; ?> "
                                </p>
                                <h3 class="grey-text text-darken-3 font-bold coloum-judul-p"
                                    style="text-transform: capitalize;letter-spacing: 0.5px;">- <?= $tes['Nama']; ?><br> 
                                </h3>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
                    
            <div class="col s12">
                <div class="center" style="margin-top: 20px;">
                    
                    <a href="#foto_prev" class="testi-prev btn btn-floating z-depth-1 deep-orange darken-2 waves-effect" style="border-radius: 10px;"><i class="material-icons" style="font-size: 20px;">arrow_back</i></a>
                    
                    <a href="#foto_next" class="testi-next btn btn-floating z-depth-1 deep-orange darken-2 waves-effect" style="border-radius: 10px;"><i class="material-icons" style="font-size: 20px;">arrow_forward</i></a>
                </div>
            </div>

        </div>
    </div>  
