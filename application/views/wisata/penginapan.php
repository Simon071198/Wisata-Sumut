<!-- Begin Page Content -->
<div class="container-fluid">

  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/style.css'); ?>">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


  <div class="row mx-auto mt-3">
    <div class="card mr-3 ml-0.8" style="width: 16rem;">
      <img src="<?= base_url('assets/img/penginapan/pg1.jpg'); ?>" class="card-img-top" alt="...">
      <div class="card-body bg-light">
        <h5 class="card-title">Hotel Bumi Asih</h5>
        <p class="card-text">Casual kamar dengan TV layar datar bersahaja hotel yang menawarkan gratis Wi-Fi</p>
        <i class="fas fa-star text-success"></i>
        <i class="fas fa-star text-success"></i>
        <i class="fas fa-star text-success"></i>
        <i class="fas fa-star text-success"></i>
        <i class="far fa-star text-success"> Hotel bintang 2</i><br>
        <a href="#" class="btn btn-primary" data-target="#penginapan1" data-toggle="modal">Detail</a>
      </div>
    </div>

    <div class="card mr-3 ml-0.8" style="width: 16rem;">
      <img src="<?= base_url('assets/img/penginapan/pg2.jpg'); ?>" class="card-img-top" alt="...">
      <div class="card-body bg-light">
        <h5 class="card-title">Toba Village Inn</h5>
        <p class="card-text">Kamar santai berpanorama danau di hotel kasual dengan Wi-Fi gratis dan parkir, serta kolam renang & taman</p>
        <i class="fas fa-star text-success"></i>
        <i class="fas fa-star text-success"></i>
        <i class="fas fa-star text-success"></i>
        <i class="fas fa-star text-success"></i>
        <i class="far fa-star text-success"> Hotel bintang 3</i><br>
        <a href="#" class="btn btn-primary" data-target="#penginapan2" data-toggle="modal">Detail</a>
      </div>
    </div>

    <div class="card mr-3 ml-0.8" style="width: 16rem;">
      <img src="<?= base_url('assets/img/penginapan/pg3.jpg'); ?>" class="card-img-top" alt="...">
      <div class="card-body bg-light">
        <h5 class="card-title">Hotel Sapadia</h5>
        <p class="card-text">Kamar dan suite simpel di hotel kasual yang menawarkan restoran, bar lobi, serta kolam renang outdoor</p>
        <i class="fas fa-star text-success"></i>
        <i class="fas fa-star text-success"></i>
        <i class="fas fa-star text-success"></i>
        <i class="fas fa-star text-success"></i>
        <i class="far fa-star text-success"> Hotel bintang 3</i><br>
        <a href="#" class="btn btn-primary" data-target="#penginapan3" data-toggle="modal">Detail</a>
      </div>
    </div>

    <div class="card mr-1.5 ml-1" style="width: 16rem;">
      <img src="<?= base_url('assets/img/penginapan/pg4.jpg'); ?>" class="card-img-top" alt="...">
      <div class="card-body bg-light">
        <h5 class="card-title">PIA Hotel Pandan</h5>
        <p class="card-text">Bersahaja hotel di pantai menampilkan sebuah restoran & kolam renang luar ruangan, ditambah sarapan gratis</p>
        <i class="fas fa-star text-success"></i>
        <i class="fas fa-star text-success"></i>
        <i class="fas fa-star text-success"></i>
        <i class="fas fa-star text-success"></i>
        <i class="far fa-star text-success"></i><br>
        <a href="#" class="btn btn-primary" data-target="#penginapan4" data-toggle="modal">Detail</a>
      </div>
    </div>
  </div>

  <div class="row mx-auto mt-3">
    <div class="card mr-3 ml-0.8" style="width: 16rem;">
      <img src="<?= base_url('assets/img/penginapan/pg5.jpg'); ?>" class="card-img-top" alt="...">
      <div class="card-body bg-light">
        <h5 class="card-title">JW Marriott Hotel Medan</h5>
        <p class="card-text">Kamar mewah dan suite, serta beberapa pilihan restoran, spa, dan antar-jemput bandara gratis</p>
        <i class="fas fa-star text-success"></i>
        <i class="fas fa-star text-success"></i>
        <i class="fas fa-star text-success"></i>
        <i class="fas fa-star text-success"></i>
        <i class="fas fa-star text-success">Hotel bintang 5</i><br>
        <a href="#" class="btn btn-primary" data-target="#penginapan5" data-toggle="modal">Detail</a>
      </div>
    </div>

    <div class="card mr-3 ml-0.8" style="width: 16rem;">
      <img src="<?= base_url('assets/img/penginapan/pg6.jpg'); ?>" class="card-img-top" alt="...">
      <div class="card-body bg-light">
        <h5 class="card-title">Medan Ville Hotel</h5>
        <p class="card-text">Santai pilihan dengan kamar sederhana, menyediakan sarapan gratis, restoran & toko</p>
        <i class="fas fa-star text-success"></i>
        <i class="fas fa-star text-success"></i>
        <i class="fas fa-star text-success"></i>
        <i class="fas fa-star text-success"></i>
        <i class="far fa-star text-success"> Hotel bintang 3</i><br>
        <a href="#" class="btn btn-primary" data-target="#penginapan6" data-toggle="modal">Detail</a>
      </div>
    </div>

    <div class="modal fade" id="penginapan1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail Penginapan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-10">
                <table class="table table-borderless">
                  <tr>
                    <th>Nama Hotel</th>
                    <td>Hotel Bumi Asih</td>
                  </tr>
                  <tr>
                    <th>Lokasi Hotel</th>
                    <td>Jl. Sei Bahorok No.20, Babura, Kec. Medan Baru, Kota Medan, Sumatera Utara 20153</td>
                  </tr>
                  <tr>
                    <th>Kontak Hotel</th>
                    <td>021-29707600</td>
                  </tr>
                  <tr>
                    <th>Rating Hotel</th>
                    <td>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star text-success"></i>
                      <i class="far fa-star text-success"></i><br>
                      Hotel bintang 2
                    </td>
                  </tr>
                  <tr>
                    <th>Fasilitas Hotel</th>
                    <td>
                      <i class="fas fa-wifi"> Wi-Fi gratis</i><br>
                      <i class="fas fa-parking"> Parkir gratis</i><br>
                      <i class="far fa-snowflake"> Ber-AC</i>
                    </td>
                  </tr>
                  <tr>
                    <th>Harga</th>
                    <td>Rp. 96.668</td>
                  </tr>
                  <tr>
                    <th>Kerjasama</th>
                    <td>
                      Agoda<br>
                      OYO<br>
                      Expedia.co.id<br>
                      Tripadvisor.co.id<br>
                    </td>
                  </tr>
                  <tr>
                    <th>Google Map</th>
                    <td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2038804.335814367!2d97.53576663124998!3d3.5783467999999883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312e2b69ea3c45%3A0xb0b8d4577d0b87f8!2sHotel%20Bumi%20Asih!5e0!3m2!1sid!2sid!4v1597818692621!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></td>
                  </tr>
                  <tr>
                    <th>Keterangan</th>
                    <td>Di jalan perumahan berdaun dan dekat dengan pilihan bersantap, hotel ini bersahaja adalah 4 km dari pameran kostum sejarah di Istana Maimun dan 6 menit berjalan kaki dari halte bus terdekat.</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="penginapan2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail Penginapan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-10">
                <table class="table table-borderless">
                  <tr>
                    <th>Nama Hotel</th>
                    <td>Toba Village Inn</td>
                  </tr>
                  <tr>
                    <th>Lokasi Hotel</th>
                    <td>Kampung Tuktuk Siadong, Kecamatan Simanindo, Ambarita, Tuktuk Siadong, Simanindo, Kabupaten Samosir, Sumatera Utara 22395</td>
                  </tr>
                  <tr>
                    <th>Kontak Hotel</th>
                    <td>0625-451346</td>
                  </tr>
                  <tr>
                    <th>Rating Hotel</th>
                    <td>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star text-success"></i>
                      <i class="far fa-star text-success"></i><br>
                      Hotel bintang 3
                    </td>
                  </tr>
                  <tr>
                    <th>Fasilitas Hotel</th>
                    <td>
                      <i class="fas fa-swimmer"> Kolam renang bagus</i><br>
                      <i class="fas fa-bed"> Kamar bagus</i><br>
                      <i class="fas fa-map-marker-alt"> Lokasi bagus</i><br>
                      <i class="fas fa-glass-martini-alt"> Bar</i><br>
                      <i class="fas fa-coffee"> Sarapan gratis</i><br>
                      <i class="fas fa-wifi"> Wi-Fi gratis</i><br>
                      <i class="fas fa-parking"> Parkir gratis</i><br>
                    </td>
                  </tr>
                  <tr>
                    <th>Harga</th>
                    <td>Rp. 350.001</td>
                  </tr>
                  <tr>
                    <th>Kerjasama</th>
                    <td>
                      Agoda <br>
                      Booking.com <br>
                    </td>
                  </tr>
                  <tr>
                    <th>Google Map</th>
                    <td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.4903090146418!2d98.85145801426324!3d2.668975156662205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031ea1e9c164ee3%3A0x7dbec97f1bd8bf80!2sToba%20Village%20inn!5e0!3m2!1sid!2sid!4v1597818776591!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></td>
                  </tr>
                  <tr>
                    <th>Keterangan</th>
                    <td>Hotel bersuasana santai yang terletak di tepi Danau Toba ini berjarak 4 km dari Museum Batak, 5 km dari situs sejarah makam Raja Sidabutar, dan 40 km dari Pangururan yang terkenal dengan mata air panas dan pemandangan indah.</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="penginapan3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail Penginapan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-10">
                <table class="table table-borderless">
                  <tr>
                    <th>Nama Hotel</th>
                    <td>Hotel Sapadia</td>
                  </tr>
                  <tr>
                    <th>Lokasi Hotel</th>
                    <td>Jl. P Diponegoro No.21A, Karo, Kec. Siantar Sel., Kota Pematang Siantar, Sumatera Utara 21145</td>
                  </tr>
                  <tr>
                    <th>Kontak Hotel</th>
                    <td>0622-435922</td>
                  </tr>
                  <tr>
                    <th>Rating Hotel</th>
                    <td>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star text-success"></i>
                      <i class="far fa-star text-success"></i><br>
                      Hotel bintang 3
                    </td>
                  </tr>
                  <tr>
                    <th>Fasilitas Hotel</th>
                    <td>
                      <i class="fas fa-swimmer"> Kolam renang</i><br>
                      <i class="fas fa-map-marker-alt"> Lokasi bagus</i><br>
                      <i class="fas fa-dumbbell"> Gym</i><br>
                      <i class="fas fa-coffee"> Sarapan gratis</i><br>
                      <i class="fas fa-wifi"> Wi-Fi gratis</i><br>
                      <i class="fas fa-parking"> Parkir gratis</i><br>
                      <i class="far fa-snowflake"> Ber-AC</i><br>
                    </td>
                  </tr>
                  <tr>
                    <th>Harga</th>
                    <td>Rp. 450.000</td>
                  </tr>
                  <tr>
                    <th>Kerjasama</th>
                    <td>Agoda</td>
                  </tr>
                  <tr>
                    <th>Google Map</th>
                    <td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d255041.79833947984!2d98.86136449918497!3d2.807904413940806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303184524fffffff%3A0x755c59cbb0fec7c1!2sHotel%20Sapadia!5e0!3m2!1sid!2sid!4v1597818897508!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></td>
                  </tr>
                  <tr>
                    <th>Keterangan</th>
                    <td>Hotel santai berfasad modern di kawasan yang rindang ini berjarak 12 menit berjalan kaki dari Stasiun Siantar dan 13 menit berjalan kaki dari Kebun Binatang Pematang Siantar.</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="penginapan4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail Penginapan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-10">
                <table class="table table-borderless">
                  <tr>
                    <th>Nama Hotel</th>
                    <td>PIA Hotel Pandan</td>
                  </tr>
                  <tr>
                    <th>Lokasi Hotel</th>
                    <td>Jl. Padang Sidempuan No.Km. 10A, Pandan, Kabupaten Tapanuli Tengah, Sumatera Utara 22537</td>
                  </tr>
                  <tr>
                    <th>Kontak Hotel</th>
                    <td>0631-372145</td>
                  </tr>
                  <tr>
                    <th>Rating Hotel</th>
                    <td>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star text-success"></i>
                      <i class="far fa-star text-success"></i>
                    </td>
                  </tr>
                  <tr>
                    <th>Fasilitas Hotel</th>
                    <td>
                      <i class="fas fa-swimmer"> Kolam renang</i><br>
                      <i class="fas fa-spa"> Spa</i><br>
                      <i class="fas fa-glass-martini-alt"> Bar</i><br>
                      <i class="fas fa-coffee"> Sarapan gratis</i><br>
                      <i class="fas fa-parking"> Parkir gratis</i><br>
                    </td>
                  </tr>
                  <tr>
                    <th>Harga</th>
                    <td>Rp. 230.000</td>
                  </tr>
                  <tr>
                    <th>Kerjasama</th>
                    <td>Agoda</td>
                  </tr>
                  <tr>
                    <th>Google Map</th>
                    <td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.0984923224732!2d98.81902421426469!3d1.6823609608867083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302ef2c868dc7f25%3A0x6c4a8e39f9b41d64!2sPIA%20Hotel%20Pandan!5e0!3m2!1sid!2sid!4v1597818985287!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></td>
                  </tr>
                  <tr>
                    <th>Keterangan</th>
                    <td>Terletak di sebuah pantai di sepanjang Samudera Hindia, hotel informal adalah 7 km dari indah Sihobuk terjun dan 22 km dari Dr. Ferdinand Lumban Tobing Bandara.</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="penginapan5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail Penginapan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-10">
                <table class="table table-borderless">
                  <tr>
                    <th>Nama Hotel</th>
                    <td>JW Marriott Hotel Medan</td>
                  </tr>
                  <tr>
                    <th>Lokasi Hotel</th>
                    <td>Jl. Putri Hijau No.10, Kesawan, Kec. Medan Bar., Kota Medan, Sumatera Utara 20111</td>
                  </tr>
                  <tr>
                    <th>Kontak Hotel</th>
                    <td>061-4553333</td>
                  </tr>
                  <tr>
                    <th>Rating Hotel</th>
                    <td>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star text-success"></i><br>
                      Hotel bintang 5
                    </td>
                  </tr>
                  <tr>
                    <th>Fasilitas Hotel</th>
                    <td>
                      <i class="fas fa-star"> Rating tertinggi</i><br>
                      <i class="fas fa-swimmer"> Kolam renang</i><br>
                      <i class="fas fa-spa"> Spa</i><br>
                      <i class="fas fa-bed"> Kamar bagus</i><br>
                      <i class="fas fa-coffee"> Sarapan enak</i><br>
                      <i class="fas fa-map-marker-alt"> Lokasi bagus</i><br>
                      <i class="fas fa-gem"> Kesan mewah</i><br>
                      <i class="fas fa-user-tie"> Layanan bagus</i><br>
                      <i class="fas fa-briefcase"> Populer bagi wisatawan bisnis</i><br>
                      <i class="fas fa-wifi"> Wi-Fi gratis</i><br>
                      <i class="far fa-snowflake"> Ber-AC</i><br>
                    </td>
                  </tr>
                  <tr>
                    <th>Harga</th>
                    <td>Rp. 847.000</td>
                  </tr>
                  <tr>
                    <th>Kerjasama</th>
                    <td>
                      Agoda<br>
                      trivago.co.id<br>
                      Hotels.com<br>
                    </td>
                  </tr>
                  <tr>
                    <th>Google Map</th>
                    <td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.9608880816845!2d98.67359571426269!3d3.5964389512441874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131c3f6c8d037%3A0x54771c0e776d21fe!2sJW%20Marriott%20Hotel%20Medan!5e0!3m2!1sid!2sid!4v1597819058352!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></td>
                  </tr>
                  <tr>
                    <th>Keterangan</th>
                    <td>Hotel kelas atas yang terletak di bangunan bertingkat tinggi di pusat kota ini berjarak 12 menit berjalan kaki dari Stasiun Kereta Api Medan, dan 26 km dari Bandara Internasional Kualanamu.</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="penginapan6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail Penginapan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-10">
                <table class="table table-borderless">
                  <tr>
                    <th>Nama Hotel</th>
                    <td>Medan Ville Hotel</td>
                  </tr>
                  <tr>
                    <th>Lokasi Hotel</th>
                    <td>Taman Multatuli Indah Jalan Multatuli Blok BB No.1, Hamdan, Kec. Medan Maimun, Kota Medan, Sumatera Utara 20151</td>
                  </tr>
                  <tr>
                    <th>Kontak Hotel</th>
                    <td>061-4521600</td>
                  </tr>
                  <tr>
                    <th>Rating Hotel</th>
                    <td>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star text-success"></i>
                      <i class="far fa-star text-success"></i><br>
                      Hotel bintang 3
                    </td>
                  </tr>
                  <tr>
                    <th>Fasilitas Hotel</th>
                    <td>
                      <i class="fas fa-parking"> Parkir gratis</i><br>
                      <i class="fas fa-coffee"> Sarapan</i><br>
                      <i class="fas fa-wifi"> Wi-Fi gratis</i><br>
                      <i class="fas fa-utensils"> Restoran</i><br>
                    </td>
                  </tr>
                  <tr>
                    <th>Harga</th>
                    <td>Rp. 122.999</td>
                  </tr>
                  <tr>
                    <th>Kerjasama</th>
                    <td>Agoda</td>
                  </tr>
                  <tr>
                    <th>Google Map</th>
                    <td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.0534542939754!2d98.6804702142627!3d3.5751849513840135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30313049fc23acdf%3A0x14778d4295f8967!2sMedan%20Ville%20Hotel!5e0!3m2!1sid!2sid!4v1597819150209!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></td>
                  </tr>
                  <tr>
                    <th>Keterangan</th>
                    <td>Diterjemahkan dari bahasa Inggris​-​Hotel santai ini diatur di Central Business District Medan di sebuah bangunan modern dengan sentuhan art deco. Ini 1,3 km dari mengesankan istana Istana Maimun, 2,4 km dari stasiun kereta api Medan dan 1,6 km dari Masjid Masjid Raya Medan. Kamar-kamar santai memiliki lantai keramik dan TV fitur layar datar, brankas, minibar, dan teh dan coffeemaking. Layanan kamar tersedia 24 jam. Sarapan termasuk dan disajikan di restoran. Fasilitas lainnya mencakup toko dan pusat bisnis. Ada kamar juga memenuhi</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>


    <footer class="bg-dark text-white p-5">
      <div class="row">
        <div class="col-md-3">
          <h5>Kategori Populer</h5>
          <ul>
            <li>Objek Wisata</li>
            <li>Penginapan</li>
            <li>Kuliner Khas</li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>Mitra Kerjasama</h5>
          <ul>
            <li>tiket.com</li>
            <li>traveloka.com</li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>Tentang Kami</h5>
          <p>Website Wisata Sumut adalah sebuah layanan wisata yang menyediakan informasi mengenai objek wisata, penginapana dan kuliner yang berada di Provinsi Sumatera Utara. Diharapkan dengan adanya website ini dapat memudahkan wisatawan untuk mencari destinasi wisata di Sumatera Utara.</p>
        </div>
        <div class="col-md-3">
          <h5>Kontak Layanan</h5>
          <ul>
            <li>021-2345-6789</li>
            <li>wisatasumut2020@gmail.com</li>
          </ul>
        </div>
      </div>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->