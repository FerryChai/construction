    <div class="parallax-container" style="height:90vh;">
        <div class="parallax"><img src="../img/kontak.jpg"></div>
        <div class="banner-overlay">
            <div class="container center" style="padding-top:150px;">
                <h3 data-aos="zoom-out-up" class="font-bold before-header-p">
                    Kontak Kami
                </h3>
                <h3 data-aos="zoom-out-up" data-aos-delay="200" class="font-bold banner-header-p" style="margin-top: 40px;">
                    Permintaan anda akan kami selesaikan segera.
                </h3>
            </div>
        </div>
    </div>

    <div class="grid-kuburan" style="padding-top: 6%;">
        <div class="container">
            <div class="row">
                
                <div class="col l7" data-aos="fade-up-right" data-aos-delay="400">
                    <div class="card grey lighten-5">
                        <div class="card-content" style="padding-bottom: 0;">
                            <span class="card-title">
                                <h5 class="font-bold"><i class="material-icons left">message</i>Sampaikan pesan anda disini.</h5>
                            </span>

                            <div class="row" style="margin-top: 30px; margin-bottom: 0;">
                                <form class="col s12 row" action="<?= base_url(); ?>user/kirim" method="POST">

                                    <div class="row col s6">
                                        <div class="input-field col s12">
                                          <input id="nama" type="text" class="validate" name="nama">
                                          <label for="nama">Nama</label>
                                        </div>
                                    </div>
                                  
                                    <div class="row col s6">
                                        <div class="input-field col s12">
                                          <input  id="email" type="email" class="validate" name="email">
                                          <label for="email">Email</label>
                                        </div>
                                    </div>

                                    <div class="row col s12">
                                        <div class="input-field col s12">
                                            <input id="subjek" type="text" class="validate" name="subjek">
                                            <label for="subjek">Subjek</label>
                                        </div>
                                    </div>

                                    <div class="row col s12">
                                        <div class="input-field col s12">
                                            <textarea id="keterangan" class="materialize-textarea" name="keterangan"></textarea>
                                            <label for="keterangan">Keterangan</label>
                                        </div>
                                    </div>
                            </div>
                        </div>

                        <div class="card-action" style="height: 75px;">
                            <button type="submit"  class="btn waves-effect waves-light black-text light-blue darken-1 right"><i class="material-icons right" style="border-radius: 30px; border: none;">send</i>Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col l4" data-aos="fade-up-left" data-aos-delay="400">
                    <img src="../img/siluet.png" style="width: 75vh; margin-top: 30%; margin-left: 10%;">
                    <p class="font-bold" style="margin-left: 10%;">
                        Kudus Karya Inti Megah
                    </p>
                    <div class="row" style="margin-left: 10%;">
                        <p class="font-light">
                            Ikuti Media Sosial kami!
                        </p>
                        <div class="font-bold">
                            <a href="https://web.facebook.com/Indra-Cah-Kudus-1949042315398650/?__tn__=%2Cd%2CP-R&eid=ARBrwg174c0UBP_cp0bdodA_O43RuoJiSm8EUSgFEjeSi8BmKixogqqej_aRnrpbKxS4shEZjjd89Tce" class="btn-floating light-blue darken-1" style="margin-right: 10px;"><i class="fab fa-facebook"></i><a>
                            <a href="https://www.instagram.com/cahkudusindra_kontraktor/" class="btn-floating light-blue darken-1" style="margin-right: 10px;"><i class="fab fa-instagram"></i></a>
                        </div>
                        
                    </div>
                </div>
            </div> 
        </div>
    </div>