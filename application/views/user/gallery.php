    <div class="parallax-container" style="height:90vh;">
        <div class="parallax"><img src="../img/gallery.jpeg"></div>
        <div class="banner-overlay">
            <div class="container center" style="padding-top:150px;">
                <h3 data-aos="zoom-out-up" class="font-bold before-header-p">
                    Gallery
                </h3>
                <h3 data-aos="zoom-out-up" data-aos-delay="200" class="font-bold banner-header-p" style="margin-top: 40px;">
                    Beberapa foto hasil pembangunan yang telah kami lakukan.
                </h3>
            </div>
        </div>
    </div>

    <div class="grid-kuburan" style="padding-top:3%;padding-bottom: 4%;">
        <div class="container">
            <div class="row" data-aos="zoom-out-up" style="margin-top:30px;">
                <?php foreach($gallery as $gal) : ?>
                    <div class="col l4 m4 s6 no-padding fitur-grid">
                        <div class="col l12 m12 s12 ig-photo no-padding fitur-card">
                            <div class="zoom-wrapper z-depth-5" style="overflow: hidden;height: 45vh;">
                                <div class="card-photo"
                                    style="background-image: url(../img/gallery/<?= $gal['Nama_Gallery']; ?>);height: 100%;position: relative;">
                                    <a data-fancybox="gallery" href="../img/gallery/<?= $gal['Nama_Gallery']; ?>" data-caption="<?= $gal['Keterangan']; ?>"
                                        class="card-photo-overlay waves-effect waves-light">
                                        <div class="container">
                                            <div class="" style="text-align: center;margin-top: 18.5vh;">
                                                <div class="row">
                                                    <div class="col l12 m12 s12">
                                                        <div class="btn btn-floating deep-orange darken-2 btn-large"><i
                                                                class="material-icons white-text large">add</i></div>
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
        </div>
    </div>