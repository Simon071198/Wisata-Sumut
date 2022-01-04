<!-- Begin Page Content -->
<div class="container-fluid">

  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/style.css'); ?>">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


  <div class="row mx-auto mt-3">
    <div class="card mr-3 ml-0.8" style="width: 16rem;">
      <img src="<?= base_url('assets/img/kuliner/kl1.jpg'); ?>" class="card-img-top" alt="...">
      <div class="card-body bg-light">
        <h5 class="card-title">Dekke Na Niura</h5>
        <p class="card-text">Dekke Na Niura adalah makanan yang hanya dikonsumsi oleh raja-raja suku Batak</p><br>
        <a href="#" class="btn btn-primary" data-target="#kuliner1" data-toggle="modal">Detail</a>
      </div>
    </div>

    <div class="card mr-3 ml-0.8" style="width: 16rem;">
      <img src="<?= base_url('assets/img/kuliner/kl2.jpg'); ?>" class="card-img-top" alt="...">
      <div class="card-body bg-light">
        <h5 class="card-title">Kue Ombus-Ombus</h5>
        <p class="card-text">Kue Ombus-Ombus merupakan makanan yang paling nikmat dengan ditambah secangkir kopi hangat</p><br>
        <a href="#" class="btn btn-primary" data-target="#kuliner2" data-toggle="modal">Detail</a>
      </div>
    </div>

    <div class="card mr-3 ml-0.8" style="width: 16rem;">
      <img src="<?= base_url('assets/img/kuliner/kl3.jpg'); ?>" class="card-img-top" alt="...">
      <div class="card-body bg-light">
        <h5 class="card-title">Manuk Napinadar</h5>
        <p class="card-text">Ayam napidanar merupakan salah satu jenis santapan yang biasanya ditemukan pada acara-acara adat</p><br>
        <a href="#" class="btn btn-primary" data-target="#kuliner3" data-toggle="modal">Detail</a>
      </div>
    </div>

    <div class="card mr-1.5 ml-1" style="width: 16rem;">
      <img src="<?= base_url('assets/img/kuliner/kl4.jpg'); ?>" class="card-img-top" alt="...">
      <div class="card-body bg-light">
        <h5 class="card-title">Mie Gomak</h5>
        <p class="card-text">Mie Gomak adalah makanan tradisional Sumatera Utara yang terbuat dari bahan baku berupa mie spagethi</p><br>
        <a href="#" class="btn btn-primary" data-target="#kuliner4" data-toggle="modal">Detail</a>
      </div>
    </div>
  </div>

  <div class="row mx-auto mt-3">
    <div class="card mr-3 ml-0.8" style="width: 16rem;">
      <img src="<?= base_url('assets/img/kuliner/kl5.jpg'); ?>" class="card-img-top" alt="...">
      <div class="card-body bg-light">
        <h5 class="card-title">Arsik</h5>
        <p class="card-text">Ikan Arsik makanan khas batak yang diolah dengan bumbu rempah yang lezat</p><br>
        <a href="#" class="btn btn-primary" data-target="#kuliner5" data-toggle="modal">Detail</a>
      </div>
    </div>

    <div class="card mr-3 ml-0.8" style="width: 16rem;">
      <img src="<?= base_url('assets/img/kuliner/kl6.jpg'); ?>" class="card-img-top" alt="...">
      <div class="card-body bg-light">
        <h5 class="card-title">Saksang</h5>
        <p class="card-text">Saksang merupakan makanan khas Sumatera Utara yang berasal dari Batak </p><br>
        <a href="#" class="btn btn-primary" data-target="#kuliner6" data-toggle="modal">Detail</a>
      </div>
    </div>

    <div class="modal fade" id="kuliner1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail Kuliner</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-10">
                <table class="table table-borderless">
                  <tr>
                    <th>Nama Kuliner</th>
                    <td>Dekke Na Niura</td>
                  </tr>
                  <tr>
                    <th>Lokasi Kuliner</th>
                    <td>Tapanuli, Tarutung, Balige, Pulau Samosir, Medan</td>
                  </tr>
                  <tr>
                    <th>Keterangan</th>
                    <td>Makanan khas Sumatera Utara yang tak boleh dilewatkan siapa saja bila kesana adalah Dekke Na Niura. Dahulu kuliner lezat ini adalah makanan yang hanya dikonsumsi oleh raja-raja suku Batak. Bahan utamanya terbuat dari ikan mas. Cara pembuatan Na Niura sangat simpel dan sederhana. Ikan mas yang sudah dibersihkan diolesi dengan asam dan bumbu halus lalu didiamkan kurang lebih selama empat jam. Setelah itu baru disajikan. Semakin mantap kalau disantap bersama nasi yang masih hangat.</td>
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

    <div class="modal fade" id="kuliner2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail Kuliner</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-10">
                <table class="table table-borderless">
                  <tr>
                    <th>Nama Kuliner</th>
                    <td>Kue Ombus-Ombus</td>
                  </tr>
                  <tr>
                    <th>Lokasi Kuliner</th>
                    <td>Siborong-borong, Medan</td>
                  </tr>
                  <tr>
                    <th>Keterangan</th>
                    <td>Ombus-ombus sendiri merupakan kue yang berasal dari kota kecil tersebut. Biasanya kue ombus-ombus ditemukan pada saat acara adat. Makanan yang satu ini paling nikmat bila disajikan bersama secangkir kopi. Kue ombus-ombus sendiri terbuat dari tepung beras yang dicampur dengan gula merah. Setelah itu adonan ombus-ombus kemudian dibungkus menggunakan daun pisang, lalu dikukus. Tunggu sampai matang dan ombus-ombus sangat nikmat disajikan dalam kondisi hangat. Buat kamu pecinta kopi, sangat nikmat menyantap ombus-ombus bersama kopi toraja.</td>
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

    <div class="modal fade" id="kuliner3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail Kuliner</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-10">
                <table class="table table-borderless">
                  <tr>
                    <th>Nama Kuliner</th>
                    <td>Manuk Napinadar</td>
                  </tr>
                  <tr>
                    <th>Lokasi Kuliner</th>
                    <td>Samosir, Toba Samosir, Humbang Hasundutan, Tapanuli Utara, Simalungun, Dairi, dan Karo</td>
                  </tr>
                  <tr>
                    <th>Keterangan</th>
                    <td>Nama manuk napinadar mungkin terasa asing di telinga pecinta kuliner, mengingat karena jarang dijual di warung-warung atau rumah makan. Bahkan di daerah asalnya, Sumatera Utara, manuk napinadar lebih sering disajikan hanya saat ada acara adat atau khusus. Olahan bernama napinadar ini merupakan olahan dari ayam kampung goreng atau panggang yang tersaji bersama bumbu dan sambalnya yang khas. Walaupun terlihat seperti ayam panggang pada umumnya, namun pada napinadar terdapat satu bumbu yang membuatnya berbeda dengan olahan lain yang serupa, yaitu andaliman. Rempah tersebut sering disebut merica batak karena ditempat lain sangat sulit untuk ditemui, namun subur di daerah Sumatera. Selain itu, napinadar yang tradisional akan menggunakan darah ayam itu sendiri sebagai sambalnya, sedangkan kini penggunaan sambal darah diganti dengan kelapa gonseng atau mirip dengan serundeng. Bumbu untuk memasak makanan adat Sumatera Utara ini ada berupa cabai merah atau cabai rawit, kemiri, kencur, bawang merah, bawang putih, asam, jahe, dan tak lupa andaliman. Kesemua rempah tersebut harus terlebih dahulu dihaluskan sebelum disiramkan di atas ayam kampung yang telah dipanggang. Rasanya adalah pedas dan getir berkat adanya cabai maupun andaliman, dengan aroma panggangan yang semerbak. Karena dimasak dengan cara dipanggang, ayamnya tetap memiliki tekstur empuk dan memiliki rasa khas layaknya daging panggang lain.</td>
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

    <div class="modal fade" id="kuliner4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail Kuliner</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-10">
                <table class="table table-borderless">
                  <tr>
                    <th>Nama Kuliner</th>
                    <td>Mie Gomak</td>
                  </tr>
                  <tr>
                    <th>Lokasi Kuliner</th>
                    <td>Medan, Tapanuli</td>
                  </tr>
                  <tr>
                    <th>Keterangan</th>
                    <td>Mie gomak merupakan olahan mie yang berasal dari Batak Toba dengan bahan baku pembuatannya adalah mie lidi. Penamaannya dengan sebutan mie gomak bukan tanpa alasan, karena dulunya mie ini dibuat dengan cara digomak-gomak atau digenggam dengan tangan, walaupun kini tidak lagi dibuat dengan cara seperti itu. Bahkan mie tersebut mendapat sebutan spagetti batak karena mirip dengan olahan mie spagetti asal Negeri Pizza, Italia. Selain itu, mie ini memiliki dua varian, yakni basah dengan ciri khasnya memiliki kuah yang gurih dan goreng yang dibuat dengan cara digoreng. Akan tetapi, kebanyakan mie gomak lebih dikenal dengan jenisnya yang basah alias berkuah. Biasanya setelah mie lidi direbus, nantinya akan diberi kuah berkaldu ayam yang diberikan bumbu saus dan diisi dengan sayuran. Seperti kebanyakan olahan Sumatera Utara, mie gomak juga memiliki rasa pedas dan ada tambahan bumbu andaliman yang semakin mempertegas rasa pedasnya. Untuk satu mangkuk mie gomak, dihargai cuma 5 ribu rupiah yang bisa ditemukan di kedai pinggir jalan hingga sekolah-sekolah. Karena biasanya disantap dengan bakwan, kerupuk, atau mendowan, kamu juga bisa membeli lauk tersebut agar semakin mantap rasanya. Makanan khas Sumatera Utara mulai dari Medan hingga Tapanuli yang paling enak dan terkenal. Bila kamu berkunjung ke provinsi yang berdekatan dengan Aceh Darussalam tersebut, jangan lupa untuk mencicipinya di warung atau toko terdekat. Tidak hanya masakan modern dengan pengemasan mutakhir, namun banyak pula masakan-masakan tradisional yang tidak ada di daerah lain. Jadi sangat cocok bila menjadikannya sebagai oleh-oleh atau sekedar menjadi makanan maupun cemilan saat ada di Sumatera Utara.</td>
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

    <div class="modal fade" id="kuliner5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail Kuliner</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-10">
                <table class="table table-borderless">
                  <tr>
                    <th>Nama Kuliner</th>
                    <td>Arsik</td>
                  </tr>
                  <tr>
                    <th>Lokasi Kuliner</th>
                    <td>Tapanuli, Sumatera Utara</td>
                  </tr>
                  <tr>
                    <th>Keterangan</th>
                    <td>Di Kawasan Tapanuli, ada yang namanya arsik ikan yang dibuat menggunakan bahan dasar ikan mas atau ikan-ikan lain. Tapanuli yang notabene adalah kawasan pesisir, rasanya menggunakan ikan adalah salah cara tepat untuk meningkatkan nilai jual ikan. Arsik sendiri yang ditemukan oleh suku Batak, punya nama lain yaitu ikan mas bumbu kuning karena memang dibuat dari bumbu kuning. Namun tidak hanya ikan mas saja yang dijadikan bahan utama, karena ikan lain berupa ikan kakap dan ikan kembung, bahkan ada yang memakai daging babi tetap bisa menjadi pengganti ikan mas. Dalam membuat arsik, memerlukan bumbu arsik yang dibuat dari perpaduan rempah-rempah seperti asam cikala atau buah kecombrang dan andaliman. Selain itu untuk menciptakan warna kuning seperti namanya bumbu kuning, maka diperlukan lengkuas dan serai. Setelah itu, bumbu halus tersebut akan dilumurkan kedalam ikan yang dipakai secara merata. Uniknya, dalam pembuatan makanan khas sumatera utara arsik, sisik ikannya tidak perlu dibuang. Terakhir, ikan berbumbu tersebut sudah siap untuk digoreng pada api kecil sampai agak mengering. Dengan rasa yang enak dari bumbunya yang meresap, arsik akan nikmat bila dimakan sebagai makanan utama atau dijadikan lauk untuk menemani nasi.</td>
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

    <div class="modal fade" id="kuliner6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail Kuliner</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-10">
                <table class="table table-borderless">
                  <tr>
                    <th>Nama Kuliner</th>
                    <td>Saksang</td>
                  </tr>
                  <tr>
                    <th>Lokasi Kuliner</th>
                    <td>Medan, Sumatera Utara</td>
                  </tr>
                  <tr>
                    <th>Keterangan</th>
                    <td>Jika napinadar adalah olahan dari ayam kampung yang bisa dilumuri darah, saksang juga olahan yang dibumbui darah, namun daging yang digunakan adalah daging babi, anjing, atau kerbau. Namun terkadang, penggunaan darah dihilangkan dan diganti dengan bumbu sambalnya saja yang disebut dengan na so margota. Uniknya, selain diberi hasil cincangan daging dan bumbu, saksang juga diberi dengan santan, berbeda dengan manuk napinadar. Sedangkan bumbu yang digunakan adalah andaliman, cabai, merica, serai, bawang merah, ketumbar, bawang putih, daun salam, kunyit, lengkuas, jahe, dan jeruk perut yang dihaluskan bersama santan. Makanan khas Sumateara Utara saksang yang dibuat oleh suka Batak-nya Sumatera Utara ini kerap disajikan dengan nasi, karena memang saksang disajikan sebagai lauk. Untuk mendapatkannya bisa dengan mudah menemuinya di rumah makan di Medan atau lapo (kedai tradisional masyarakat Batak untuk makan minum). Selain itu di acara adat, kerap pula disajikan saksang, misalnya saat acara pernikahan. Namun karena dibuat dari daging dan darah yang diharamkan untuk dimakan menurut islam, maka undangan atau tamu muslim tidak memakannya. Tetapi ada juga yang menggunakan daging kerbau dan tanpa darah, sehingga dihalalkan bagi umat islam. Rasa dagingnya sangat enak, belum lagi dengan adanya bumbu rempah yang melimpah yang merasuk sampai ke dalam daging.</td>
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