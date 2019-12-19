
    <div class="grid-kuburan" style="padding-top:10%;padding-bottom: 4%;">

        <div class="container">

              <p style="padding-top: 30px;">
                  *Recommended "Y" untuk menampilkan tanda bintang, "N" untuk tidak di tampilkan di halaman produk
              </p>

            <div style="margin-bottom: 6%;" data-aos="fade-up">
              <blockquote class="font-bold" style="border-left: 5px solid #039be5"><h2>Rebana</h2><a href="#tambahrebana" class="btn btn-sm light-blue darken-1 modal-trigger">Tambah</a></blockquote>
            </div>

                <div id="tambahrebana" class="modal">
                    <div class="modal-title" style="margin-left: 20px; margin-top: 20px;">
                      <h4 class="font-bold" style="margin-bottom: 0;">Tambah</h4>
                    </div>

                    <div class="modal-content">
                        <form action="<?= base_url(); ?>admin/tambahrebana" method="POST" class="row" enctype="multipart/form-data">
                            <div class="col s12">
                                  <div class="input-field">
                                      <input id="nama" type="text" class="validate" name="nama" required>
                                      <label for="nama">Nama</label>
                                  </div>
                            </div>

                            <div class="col s12">
                                  <div class="input-field">
                                      <input id="keterangan" type="text" class="validate" name="keterangan" required>
                                      <label for="keterangan">Keterangan</label>
                                  </div>
                            </div>

                            <div class="col s12">
                                <div class="file-field input-field">
                                    <div class="btn light-blue darken-1">
                                        <span>File</span>
                                        <input type="file" name="fotorebana1" required>
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="col s12">
                                <div class="file-field input-field">
                                    <div class="btn light-blue darken-1">
                                        <span>File</span>
                                        <input type="file" name="fotorebana2">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="col s12">
                                <div class="file-field input-field">
                                    <div class="btn light-blue darken-1">
                                        <span>File</span>
                                        <input type="file" name="fotorebana3">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="col s12">
                                <div class="file-field input-field">
                                    <div class="btn light-blue darken-1">
                                        <span>File</span>
                                        <input type="file" name="fotorebana4">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="col s12">
                                <div class="file-field input-field">
                                    <div class="btn light-blue darken-1">
                                        <span>File</span>
                                        <input type="file" name="fotorebana5">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="col s12">
                                <div class="file-field input-field">
                                    <div class="btn light-blue darken-1">
                                        <span>File</span>
                                        <input type="file" name="fotorebana6">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="col s12">
                                <div class="file-field input-field">
                                    <div class="btn light-blue darken-1">
                                        <span>File</span>
                                        <input type="file" name="fotorebana7">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                    </div>
                                </div>
                            </div>
                    </div>
                    

                    <div class="modal-footer">
                          <button type="submit" class="btn btn-sm light-blue darken-1">Submit</button>
                        </form>
                    </div>
                </div>

            <div class="row">
              <?php foreach($rebana as $reb) :?>
                <div class="col l4 m6 s6 z-depth-12">
                    <div class="card hoverable grey lighten-5">
                      <div class="card-image fitur-mh">
                        <div class="card-photo" style="min-height: 300px; overflow: hidden; background-image: url(../../img/produk/<?= $reb['Gambar_1']; ?>); background-size: cover;">                          
                        </div>
                      </div>

                      <div class="card-content">
                        <span class="card-title black-text center" style="font-size: 20px; height: 32px; overflow: hidden;"><?= $reb['Nama_Barang']?></span>
                      </div>

                      <div class="card-action center">
                        <a href="#editrebana<?= $reb['Id']; ?>" class="light-blue-text text-darken-1 modal-trigger" style="margin: 0; margin-right: 10px;">Detail</a>
                        <a href="<?= base_url(); ?>admin/hapus/7/<?= $reb['Id']; ?>" class="red-text" style="margin: 0; margin-left: 10px;">Hapus</a>
                      </div>
                    </div>
                </div>


                <div id="editrebana<?= $reb['Id']; ?>" class="modal">
                    <div class="modal-title" style="margin-left: 20px; margin-top: 20px;">
                      <h4 class="font-bold" style="margin-bottom: 0;"><?= $reb['Nama_Barang']; ?></h4>
                    </div>

                    <div class="modal-content">
                        <form action="<?= base_url(); ?>admin/editrebana" method="POST" class="row" enctype="multipart/form-data">
                            <div class="col s12">
                                  <div class="input-field">
                                      <input id="nama" type="text" class="validate" name="nama" value="<?= $reb['Nama_Barang']; ?>" required>
                                      <label for="nama">Nama</label>
                                  </div>
                            </div>

                            <div class="col s12">
                                  <div class="input-field">
                                      <input id="keterangan" type="text" class="validate" name="keterangan" value="<?= $reb['Keterangan']; ?>" required>
                                      <label for="keterangan">Keterangan</label>
                                  </div>
                            </div>
                    </div>
                    

                    <div class="modal-footer">
                          <button type="submit" class="btn btn-sm light-blue darken-1">Submit</button>
                          <input type="hidden" name="idrebana" value="<?= $reb['Id']?>">
                        </form>
                    </div>
                </div>
              <?php endforeach; ?>
            </div>





























          <div style="margin-bottom: 6%;" data-aos="fade-up">
            <blockquote class="font-bold" style="border-left: 5px solid #039be5"><h2>Sepatu</h2><a href="#tambahsepatu" class="btn btn-sm light-blue darken-1 modal-trigger">Tambah</a></blockquote>
          </div>

                <div id="tambahsepatu" class="modal">
                      <div class="modal-title" style="margin-left: 20px; margin-top: 20px;">
                        <h4 class="font-bold" style="margin-bottom: 0;">Tambah</h4>
                      </div>

                    <div class="modal-content">
                        <form action="<?= base_url(); ?>admin/tambahsepatu" method="POST" class="row" enctype="multipart/form-data">
                            <div class="col s12">
                                  <div class="input-field">
                                      <input id="nama" type="text" class="validate" name="nama" required>
                                      <label for="nama">Nama</label>
                                  </div>
                            </div>

                            <div class="col s12">
                                  <div class="input-field">
                                      <input id="keterangan" type="text" class="validate" name="keterangan" required>
                                      <label for="keterangan">Keterangan</label>
                                  </div>
                            </div>

                            <div class="col s12">
                                <div class="input-field">
                                    <input id="recommend" type="text" class="validate" name="recommended" required>
                                    <label for="recommend">Recommended</label>
                                </div>
                            </div>                      

                            <div class="col s12">
                                <div class="file-field input-field">
                                    <div class="btn light-blue darken-1">
                                        <span>File</span>
                                        <input type="file" name="fotosepatu" required>
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                          <button type="submit" class="btn btn-sm light-blue darken-1">Submit</button>
                        </form>
                    </div>
                </div>

          <div class="row">
            <?php foreach($sepatu as $sep) : ?>
              <div class="col l4 m6 s6 z-depth-12">
                  <div class="card hoverable grey lighten-5">
                    <div class="card-image fitur-mh">
                      <div class="card-photo" style="min-height: 300px; overflow: hidden; background-image: url(../../img/produk/<?= $sep['Gambar']; ?>); background-size: cover;">
                      </div>
                      <?php if($sep['Recommended'] == "Y") { ?>
                        <a class="btn-floating halfway-fab waves-effect waves-light light-blue darken-1"><i class="material-icons">grade</i></a>
                      <?php } ?>
                    </div>

                    <div class="card-content">
                      <span class="card-title black-text center" style="font-size: 20px; height: 32px; overflow: hidden;"><?= $sep['Nama']; ?></span>
                    </div>

                    <div class="card-action center">
                      <a href="#editsepatu<?= $sep['Id']; ?>" class="light-blue-text text-darken-1 modal-trigger" style="margin: 0; margin-right: 10px;">Detail</a>
                      <a href="<?= base_url(); ?>admin/hapus/6/<?= $sep['Id']; ?>" class="red-text" style="margin: 0; margin-left: 10px;">Hapus</a>
                    </div>
                  </div>
              </div>

              <div id="editsepatu<?= $sep['Id']; ?>" class="modal">
                <div class="modal-title" style="margin-left: 20px; margin-top: 20px;">
                  <h4 class="font-bold" style="margin-bottom: 0;"><?= $sep['Nama']; ?></h4>
                </div>

                <div class="modal-content">
                  <form action="<?= base_url(); ?>admin/editsepatu" method="POST" class="row col s12" enctype="multipart/form-data">
                      <div class="col s12">
                        <div class="input-field">
                            <input id="nama" type="text" class="validate" name="nama" value="<?= $sep['Nama']; ?>" required>
                            <label for="nama">Nama</label>
                        </div>
                      </div>

                      <div class="col s12">
                        <div class="input-field">
                            <input id="keterangan" type="text" class="validate" name="keterangan" value="<?= $sep['Keterangan']; ?>" required>
                            <label for="keterangan">Keterangan</label>
                        </div>
                      </div>

                      <div class="col s12">
                        <div class="input-field">
                            <input id="recommend" type="text" class="validate" name="recommended" value="<?= $sep['Recommended']; ?>" required>
                            <label for="recommend">Recommended</label>
                        </div>
                      </div>                      
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm light-blue darken-1">Submit</button>
                    <input type="hidden" name="idsepatu" value="<?= $sep['Id']?>">
                </form>
                </div>
              </div>
            <?php endforeach; ?>
          </div>

            
























              <div style="margin-bottom: 6%;" data-aos="fade-up">
                <blockquote class="font-bold" style="border-left: 5px solid #039be5"><h2>Jam Tangan</h2><a href="#tambahjam" class="btn btn-sm light-blue darken-1 modal-trigger">Tambah</a></blockquote>
              </div>

                <div id="tambahjam" class="modal">
                      <div class="modal-title" style="margin-left: 20px; margin-top: 20px;">
                        <h4 class="font-bold" style="margin-bottom: 0;">Tambah</h4>
                      </div>

                    <div class="modal-content">
                        <form action="<?= base_url(); ?>admin/tambahjam" method="POST" class="row" enctype="multipart/form-data">
                            <div class="col s12">
                                  <div class="input-field">
                                      <input id="nama" type="text" class="validate" name="nama" required>
                                      <label for="nama">Nama</label>
                                  </div>
                            </div>

                            <div class="col s12">
                                  <div class="input-field">
                                      <input id="keterangan" type="text" class="validate" name="keterangan" required>
                                      <label for="keterangan">Keterangan</label>
                                  </div>
                            </div>

                            <div class="col s12">
                                <div class="input-field">
                                    <input id="recommend" type="text" class="validate" name="recommended" required>
                                    <label for="recommend">Recommended</label>
                                </div>
                            </div>                      

                            <div class="col s12">
                                <div class="file-field input-field">
                                    <div class="btn light-blue darken-1">
                                        <span>File</span>
                                        <input type="file" name="fotojam" required>
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                          <button type="submit" class="btn btn-sm light-blue darken-1">Submit</button>
                        </form>
                    </div>
                </div>



              <div class="row">
                <?php foreach ($jam as $jm) : ?>
                  <div class="col l4 m6 s6 z-depth-12">
                      <div class="card hoverable grey lighten-5">
                        <div class="card-image fitur-mh" >
                          <div class="card-photo" style="min-height: 300px; overflow: hidden; background-image: url(../../img/produk/<?= $jm['Gambar']; ?>); background-size: cover;">
                          </div>
                          <?php if($jm['Recommended'] == "Y") { ?>
                                <a class="btn-floating halfway-fab waves-effect waves-light light-blue darken-1"><i class="material-icons">grade</i></a>
                          <?php } ?>                                     
                        </div>

                        <div class="card-content">
                          <span class="card-title black-text center" style="font-size: 20px; height: 32px; overflow: hidden;"><?= $jm['Nama']; ?></span>

                        </div>

                        <div class="card-action center">
                          <a href="#editjam<?= $jm['Id']; ?>" class="light-blue-text text-darken-1 modal-trigger" style="margin: 0; margin-right: 10px;">Detail</a>
                          <a href="<?= base_url(); ?>admin/hapus/8/<?= $jm['Id']; ?>" class="red-text" style="margin: 0; margin-left: 10px;">Hapus</a>
                        </div>
                      </div>
                  </div>


                <div id="editjam<?= $jm['Id']; ?>" class="modal">
                      <div class="modal-title" style="margin-left: 20px; margin-top: 20px;">
                        <h4 class="font-bold" style="margin-bottom: 0;"><?= $jm['Nama']; ?></h4>
                      </div>

                    <div class="modal-content">
                        <form action="<?= base_url(); ?>admin/editjam" method="POST" class="row" enctype="multipart/form-data">
                            <div class="col s12">
                                  <div class="input-field">
                                      <input id="nama" type="text" class="validate" name="nama" value="<?= $jm['Nama']; ?>" required>
                                      <label for="nama">Nama</label>
                                  </div>
                            </div>

                            <div class="col s12">
                                  <div class="input-field">
                                      <input id="keterangan" type="text" class="validate" name="keterangan" value="<?= $jm['Keterangan']; ?>" required>
                                      <label for="keterangan">Keterangan</label>
                                  </div>
                            </div>

                            <div class="col s12">
                                <div class="input-field">
                                    <input id="recommend" type="text" class="validate" name="recommended" value="<?= $jm['Recommended']; ?>" required>
                                    <label for="recommend">Recommended</label>
                                </div>
                            </div>                      
                    </div>
                    <div class="modal-footer">
                          <button type="submit" class="btn btn-sm light-blue darken-1">Ubah</button>
                          <input type="hidden" name="idjam" value="<?= $jm['Id']; ?>">
                        </form>
                    </div>
                </div>
                <?php endforeach; ?>
              </div>


        </div>
    </div>