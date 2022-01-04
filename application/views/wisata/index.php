<!-- Begin Page Content -->
<div class="container-fluid">

  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/style.css'); ?>">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>



  <div class="row mx-auto mt-3">
    <div class="card mr-3 ml-0.8" style="width: 16rem;">
      <img src="assets/img/wisata/obj1.jpg" class="card-img-top" alt="...">
      <div class="card-body bg-light">
        <h5 class="card-title">Danau Toba</h5>
        <p class="card-text">Danau gunung api dengan panorama indah</p>
        <i class="fas fa-star text-success"></i>
        <i class="fas fa-star text-success"></i>
        <i class="fas fa-star text-success"></i>
        <i class="fas fa-star text-success"></i>
        <i class="fas fa-star text-success"></i><br>
        <a href="#" class="btn btn-primary" data-target="#wisata1" data-toggle="modal">Detail</a>
      </div>
    </div>

    <div class="card mr-3 ml-0.8" style="width: 16rem;">
      <img src="assets/img/wisata/2.jpg" class="card-img-top" alt="...">
      <div class="card-body bg-light">
        <h5 class="card-title">Gunung Sibayak</h5>
        <p class="card-text">Gunung api strato celah uap aktif</p>
        <i class="fas fa-star text-success"></i>
        <i class="fas fa-star text-success"></i>
        <i class="fas fa-star text-success"></i>
        <i class="fas fa-star text-success"></i>
        <i class="fas fa-star text-success"></i><br>
        <a href="#" class="btn btn-primary" data-target="#wisata2" data-toggle="modal">Detail</a>
      </div>
    </div>

    <div class="card mr-3 ml-0.8" style="width: 16rem;">
      <img src="assets/img/wisata/3.jpg" class="card-img-top" alt="...">
      <div class="card-body bg-light">
        <h5 class="card-title">Air Terjun Sipiso Piso</h5>
        <p class="card-text">Air terjun dan danau di hutan pinus</p>
        <i class="fas fa-star text-success"></i>
        <i class="fas fa-star text-success"></i>
        <i class="fas fa-star text-success"></i>
        <i class="fas fa-star text-success"></i>
        <i class="fas fa-star text-success"></i><br>
        <a href="#" class="btn btn-primary" data-target="#wisata3" data-toggle="modal">Detail</a>
      </div>
    </div>

    <div class="card mr-1.5 ml-1" style="width: 16rem;">
      <img src="assets/img/wisata/4.jpg" class="card-img-top" alt="...">
      <div class="card-body bg-light">
        <h5 class="card-title">Gunung Sinabung</h5>
        <p class="card-text">Gunung berapi, gunung, dan danau</p>
        <i class="fas fa-star text-success"></i>
        <i class="fas fa-star text-success"></i>
        <i class="fas fa-star text-success"></i>
        <i class="fas fa-star text-success"></i>
        <i class="far fa-star text-success"></i><br>
        <a href="#" class="btn btn-primary" data-target="#wisata4" data-toggle="modal">Detail</a>
      </div>
    </div>
  </div>

  <div class="row mx-auto mt-3">
    <div class="card mr-3 ml-0.8" style="width: 16rem;">
      <img src="assets/img/wisata/5.jpg" class="card-img-top" alt="...">
      <div class="card-body bg-light">
        <h5 class="card-title">Bukit Gundaling, Berastagi</h5>
        <p class="card-text">Bukit yang memiliki keindahan alam dan senja</p>
        <i class="fas fa-star text-success"></i>
        <i class="fas fa-star text-success"></i>
        <i class="fas fa-star text-success"></i>
        <i class="fas fa-star text-success"></i>
        <i class="far fa-star text-success"></i><br>
        <a href="#" class="btn btn-primary" data-target="#wisata5" data-toggle="modal">Detail</a>
      </div>
    </div>

    <div class="card mr-3 ml-0.8" style="width: 16rem;">
      <img src="assets/img/wisata/6.jpg" class="card-img-top" alt="...">
      <div class="card-body bg-light">
        <h5 class="card-title">Graha Maria Annai Velangkanni</h5>
        <p class="card-text">Gereja Katolik bergaya Indo-Mogul</p>
        <i class="fas fa-star text-success"></i>
        <i class="fas fa-star text-success"></i>
        <i class="fas fa-star text-success"></i>
        <i class="fas fa-star text-success"></i>
        <i class="fas fa-star text-success"></i><br>
        <a href="#" class="btn btn-primary" data-target="#wisata6" data-toggle="modal">Detail</a>
      </div>
    </div>


    <div class="modal fade" id="wisata1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail Wisata</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-10">
                <table class="table table-borderless">
                  <tr>
                    <th>Nama Wisata</th>
                    <td>Danau Toba</td>
                  </tr>
                  <tr>
                    <th>Lokasi Wisata</th>
                    <td>Sumatera Utara, Indonesia</td>
                  </tr>
                  <tr>
                    <th>Jam Buka</th>
                    <td>Buka 24 jam</td>
                  </tr>
                  <tr>
                    <th>Rating</th>
                    <td>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star text-success"></i>
                    </td>
                  </tr>
                  <tr>
                    <th>Google Map</th>
                    <td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510166.39237121394!2d98.55576270139842!3d2.6114158826282874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031de07a843b6ad%3A0xc018edffa69c0d05!2sDanau%20Toba!5e0!3m2!1sid!2sid!4v1597810124650!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></td>
                  </tr>
                  <tr>
                    <th>Keterangan</th>
                    <td>Danau Toba adalah danau alami berukuran besar di Indonesia yang berada di kaldera Gunung Supervulkan. Danau ini memiliki panjang 100 kilometer, lebar 30 kilometer, dan kedalaman 1600 meter. Danau ini terletak di tengah pulau Sumatra bagian utara dengan ketinggian permukaan sekitar 900 meter. Danau ini membentang dari 2.88°N 98.52°E sampai 2.35°N 99.1°E. Ini adalah danau terbesar di Indonesia dan danau vulkanik terbesar di dunia. Danau Toba adalah lokasi letusan gunung berapi super masif berkekuatan VEI 8 sekitar 69.000 sampai 77.000 tahun yang lalu yang memicu perubahan iklim global. Metode penanggalan terkini menetapkan bahwa 74.000 tahun yang lalu lebih akurat. Letusan ini merupakan letusan eksplosif terbesar di Bumi dalam kurun 25 juta tahun terakhir. Menurut teori bencana Toba, letusan ini berdampak besar bagi populasi manusia di seluruh dunia; dampak letusan menewaskan sebagian besar manusia yang hidup waktu itu dan diyakini menyebabkan penyusutan populasi di Afrika timur tengah dan India sehingga memengaruhi genetika populasi manusia di seluruh dunia sampai sekarang.</td>
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


    <div class="modal fade" id="wisata2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail Wisata</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-10">
                <table class="table table-borderless">
                  <tr>
                    <th>Nama Wisata</th>
                    <td>Gunung Sibayak</td>
                  </tr>
                  <tr>
                    <th>Lokasi Wisata</th>
                    <td>Jl. Sempajaya, Kec. Berastagi, Kabupaten Karo, Sumatera Utara, Indonesia</td>
                  </tr>
                  <tr>
                    <th>Jam Buka</th>
                    <td>Buka 24 jam</td>
                  </tr>
                  <tr>
                    <th>Rating</th>
                    <td>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star-half-alt text-success"></i>
                    </td>
                  </tr>
                  <tr>
                    <th>Google Map</th>
                    <td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15934.388679857091!2d98.50791221885322!3d3.2000212870598546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303102e887075dfb%3A0x3a472ce13b073e11!2sGn.%20Sibayak!5e0!3m2!1sid!2sid!4v1597810353564!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></td>
                  </tr>
                  <tr>
                    <th>Keterangan</th>
                    <td>Gunung Sibayak adalah sebuah gunung di Kabupaten Karo, Sumatra Utara. Orang suku Karo menyebut gunung Sibayak dengan sebutuan "gunung Raja". Gunung Sibayak merupakan gunung berapi dan meletus terakhir tahun 1881. Gunung ini berada di sekitar 50 kilometer barat daya Kota Medan. Sekarang Gunung Sibayak banyak dikunjungi karena akses menuju gunung sibayak banyak mulai Sibayak 1 dan Sibayak 2. Setiap 17 Agustus di Gunung Sibayak diadakan upacara rutin serta lomba panjat pinang seluruh pencinta alam dari berbagai macam dan berbagai penjuru.</td>
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

    <div class="modal fade" id="wisata3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail Wisata</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-10">
                <table class="table table-borderless">
                  <tr>
                    <th>Nama Wisata</th>
                    <td>Air Terjun Sipiso Piso</td>
                  </tr>
                  <tr>
                    <th>Lokasi Wisata</th>
                    <td>Jl. Pengambaten, Kecamatan Merek, Kabupaten Karo, Sumatra Utara</td>
                  </tr>
                  <tr>
                    <th>Jam Buka</th>
                    <td>Buka 24 jam</td>
                  </tr>
                  <tr>
                    <th>Rating</th>
                    <td>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star-half-alt text-success"></i>
                    </td>
                  </tr>
                  <th>Google Map</th>
                  <td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.6505184291796!2d98.51731511426297!3d2.9164926553533395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031ad70b69431e9%3A0x8d2b0d8b4069f47f!2sAir%20Terjun%20Sipiso%20Piso!5e0!3m2!1sid!2sid!4v1597810436793!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></td>
                  </tr>
                  <tr>
                    <th>Keterangan</th>
                    <td>Air Terjun Sipisopiso atau Sipiso-piso adalah sebuah air terjun yang berada di Desa Tongging, Kecamatan Merek, Kabupaten Karo, Provinsi Sumatra Utara, Indonesia. Air Terjun Sipisopiso memiliki ketinggian hingga 120 meter dan mengucur deras membentuk garis vertikal sempurna. Sehingga Air Terjun Sipisopiso masuk dalam air terjun tipe Plunge. Air Terjun Sipisopiso berada di bibir kaldera raksasa Danau Toba serta terbentuk pada aliran Sungai Pajanabolon yang merupakan salah satu sungai menyuplai air ke Danau Toba. Air Terjun Sipisopiso berada di ketinggian sekitar 1.300 meter di atas permukaan air laut. Nama Sipisopiso diambil dari nama sebuah Gunung yang berada tepat di timur laut Air Terjun Sipisopiso. Gunung yang juga disebut Dolok Sipisopiso ini memiliki ketinngian sekitar 1.860 meter di atas permukaan air laut.</td>
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

    <div class="modal fade" id="wisata4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail Wisata</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-10">
                <table class="table table-borderless">
                  <tr>
                    <th>Nama Wisata</th>
                    <td>Gunung Sinabung</td>
                  </tr>
                  <tr>
                    <th>Lokasi Wisata</th>
                    <td>Jl. Kuta Gugung, Naman Teran, Kabupaten Karo, Sumatra Utara</td>
                  </tr>
                  <tr>
                    <th>Jam Buka</th>
                    <td>Buka 24 jam</td>
                  </tr>
                  <tr>
                    <th>Rating</th>
                    <td>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star text-success"></i>
                      <i class="far fa-star text-success"></i>
                    </td>
                  </tr>
                  <tr>
                    <th>Google Map</th>
                    <td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15934.858584654547!2d98.38427941885344!3d3.169655938043948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3030fb896e2dce3d%3A0x78aa2a0b96c7f525!2sGn.%20Sinabung!5e0!3m2!1sid!2sid!4v1597810529688!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></td>
                  </tr>
                  <tr>
                    <th>Keterangan</th>
                    <td>Gunung Sinabung adalah gunung api di Dataran Tinggi Karo, Kabupaten Karo, Sumatra Utara, Indonesia. Sinabung bersama Gunung Sibayak di dekatnya adalah dua gunung berapi aktif di Sumatra Utara dan menjadi puncak tertinggi ke 2 di provinsi itu. Ketinggian gunung ini adalah 2.451 meter. Gunung ini tidak pernah tercatat meletus sejak tahun 1600, tetapi mendadak aktif kembali dengan meletus pada 27 agustus 2010. Letusan terakhir gunung ini terjadi sejak 19 Febuari 2018 dan berlangsung hingga kini.</td>
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

    <div class="modal fade" id="wisata5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail Wisata</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-10">
                <table class="table table-borderless">
                  <tr>
                    <th>Nama Wisata</th>
                    <td>Bukit Gundaling, Berastagi</td>
                  </tr>
                  <tr>
                    <th>Lokasi Wisata</th>
                    <td>Jl. Letjen jamin Ginting, Gundaling I, Kec. Berastagi, Kabupaten Karo, Sumatera Utara</td>
                  </tr>
                  <tr>
                    <th>Jam Buka</th>
                    <td>Buka 24 jam</td>
                  </tr>
                  <tr>
                    <th>Rating</th>
                    <td>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star text-success"></i>
                      <i class="far fa-star text-success"></i>
                    </td>
                  </tr>
                  <tr>
                    <th>Google Map</th>
                    <td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.625476571711!2d98.49910441426282!3d3.192730953774744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303102f384795f55%3A0x485e62795ba81fec!2sBukit%20Gundaling%2C%20Berastagi!5e0!3m2!1sid!2sid!4v1597815438297!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></td>
                  </tr>
                  <tr>
                    <th>Keterangan</th>
                    <td>Gundaling adalah sebuah bukit yang ada di Berastagi, Kabupaten Karo, Sumatra Utara. Gundaling merupakan objek wisata di Berastagi. Gundaling terletak di 1.575 meter dari permukaan laut. Jarak yang dapat tempuh dari Berastagi ke Bukit Gundaling yaitu sekitar 2 km. Pemandangan yang dapat dilihat dari Gundaling yaitu ada Gunung Sibayak dan Gunung Sinabung.</td>
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

    <div class="modal fade" id="wisata6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail Wisata</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-10">
                <table class="table table-borderless">
                  <tr>
                    <th>Nama Wisata</th>
                    <td>Graha Maria Annai Velangkanni</td>
                  </tr>
                  <tr>
                    <th>Lokasi Wisata</th>
                    <td>Jl. Sakura III No. 7-10, Tj. Selamat, Kec. Medan Tuntungan, Kota Medan, Sumatera Utara</td>
                  </tr>
                  <tr>
                    <th>Jam Buka</th>
                    <td>Buka Tutup 07.00-20.00</td>
                  </tr>
                  <tr>
                    <th>Rating</th>
                    <td>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star text-success"></i>
                      <i class="fas fa-star text-success"></i>
                    </td>
                  </tr>
                  <tr>
                    <th>Google Map</th>
                    <td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.170877805489!2d98.60657211426269!3d3.5480405515615483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312e7174d78d7b%3A0x168a135b3871de39!2sGraha%20Maria%20Annai%20Velangkanni!5e0!3m2!1sid!2sid!4v1597815540199!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></td>
                  </tr>
                  <tr>
                    <th>Keterangan</th>
                    <td>Graha Maria Annai Velangkanni adalah gereja Katolik bergaya India-Mughal yang dibuka pada tahun 2005 di kota Medan, Indonesia. Gereja ini dipersembahkan untuk Bunda Velangkanni atau Santa Maria Bunda Penyembuh yang Baik. Konon Bunda Maria pernah muncul pada abad ke-17 di Kota Velankanni, Tamil Nadu, India, sehingga muncullah gelar Bunda Velangkanni Bunda Penyembuh. Gereja ini merupakan bangunan dua tingkat yang terdiri dari tempat pertemuan di lantai dasar dan tempat ibadah di lantai pertama, sementara menara di atasnya terdiri dari tujuh lantai sebagai lambang bahwa di surga terdapat tempat untuk semua orang. Menara ini sendiri merupakan perwakilan Raja Gopuram dalam arsitektur Hindu. Di atas bangunan gereja ini juga terdapat tiga kubah yang dibangun dengan gaya arsitektur Mughal dan merupakan lambang Tritunggal. Gereja ini terletak di sebuah jalan kecil yang bernama Jl. Sakura III.</td>
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