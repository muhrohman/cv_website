<!DOCTYPE html>
<html>
  <head>
    <title>CV. MuhRohman</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  </head>
  <body>
    <button class="toggleCVButton">Buka CV</button>
    <main style="display: none">
      <div class="left-side">
        <br />
        <div class="content">
          <h3>ALAMAT</h3>
          <p>JL. Rungkut Asri Timur II, Surabaya</p>
        </div>
        <br />
        <img src="FotoProfil.jpg" width="100%" class="profile-img" />
        <div class="content">
          <h2>KONTAK</h2>
          <h4>Whatsapp</h4>
          <p>0895-0519-7700</p>
          <h4>Email</h4>
          <p>muh.rohman72@gmail.com</p>
          <h4>Instagram</h4>
          <p>@_muhrohman</p>
        </div>
        <tr><button class="toggleKhsButton">Transkip KHS</button></tr>
      </div>
      <div class="right-side">
        <div class="rightside-content">
          <h1>
            <strong>MUHAMMAD ROHMAN IRSYADI</strong>
          </h1>
          <p class="para">MAHASISWA</p>
          <br /><br />
          <h2>TENTANG SAYA</h2>
          <p class="para1">
            Sedang menjalankan studi atau kuliah di UPN "Veteran" Jawa Timur
            tepatnya di kota Surabaya. Dengan Mengambil Program Studi
            Informatika
          </p>
          <br />
          <br />

          <h2>RIWAYAT PENDIDIKAN</h2>
          <h4 class="sub-heading">KULIAH</h4>
          <p class="para2">
            <span>Sekarang</span> UPN "Veteran" Jawa Timur / Surabaya
          </p>
          <p class="para1">
            Saat menjalankan Studi mengambil jurusan Informatika
          </p>

          <h4 class="sub-heading">SMA</h4>
          <p class="para2"><span>2019-2022</span> MAN 1 Kota Madiun / Madiun</p>
          <p class="para1">
            Saat menjalankan Studi mengambil jurusan Ilmu Pengentahuan Sosial
          </p>

          <h4 class="sub-heading">SMP</h4>
          <p class="para2"><span>2016-2019</span> MTsN Kota Madiun / Madiun</p>
          <p class="para1">
            Saat menjalankan Studi mengambil jurusan Multimedia
          </p>

          <h4 class="sub-heading">SD</h4>
          <p class="para2"><span>2011-2016</span> MIN 2 Kota Madiun / Madiun</p>
          <p class="para1">
            Saat menjalankan studi dengan mengikuti ekstrakulikuler Sepak Bola
          </p>

          <h2>SERTIFIKAT</h2>
          <h4 class="sub-heading">DICODING</h4>
          <p class="para1">Belajar Dasar Manajemen Proyek</p>

          <h4 class="sub-heading">YOUNG ENTREPRENUER</h4>
          <p class="para1">
            Peserta Pelatihan Soft Skills Entreneurship dalam acara Young
            Entrepreneur Festival 2022
          </p>

          <br />
        </div>
      </div>

      <div class="clearfix"></div>
    </main>

    <div class="popup">
      <button class="close-popup cursor-pointer">&times;</button>
      <h2>DATA DIRI</h2>
      <table class="data-diri-table">
        <tr>
          <td>Nama Lengkap</td>
          <td>Muhammad Rohman Irsyadi</td>
        </tr>
        <tr>
          <td>Tempat, Tanggal Lahir</td>
          <td>Magetan, 14 Februari 2004</td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>Laki - Laki</td>
        </tr>
        <tr>
          <td>Tinggi Badan</td>
          <td>165 cm</td>
        </tr>
        <tr>
          <td>Berat Badan</td>
          <td>45 kg</td>
        </tr>
      </table>
    </div>


    <div class="khs-table">
    <?php
      $khs = array(
        array("Mata Kuliah", "Kelas"),
        array("Kecerdasan Buatan", "A-081",),
        array("Analisis Desain Sistem", "D-081",),
        array("Desain Antarmuka", "F-081",),
        array("Jaringan Komputer", "B-081",),
        array("Pemrograman Web", "E-081",),
        array("Kewirausahaan", "G-236",),
        array("Rekayasa Perangkat Lunak", "C-081",),
        array("Pemrograman Berorientasi Objek", "A-081",),
      );
    ?>

      <div class="khs-table-wrapper">
      <button class="close-khs-table-wrapper cursor-pointer">&times;</button>
      <h2>Transkip KHS Semester 4</h2>
        <table class="khs-table">
          <thead>
            <br>
            <tr>
              <th><?php echo $khs[0][0]; ?></th>
              <th><?php echo $khs[0][1]; ?></th>
            </tr>
          </thead>
          <tbody>
            <?php
              for ($i = 1; $i < count($khs); $i++) {
                echo "<tr>";
                foreach ($khs[$i] as $cell) {
                  echo "<td>" . htmlspecialchars($cell) . "</td>";
                }
                echo "</tr>";
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>


    <script>
      $(document).ready(function () {
        $(".toggleCVButton").click(function () {
          $("main").slideToggle(1000, function () {
            var buttonText = $("main").is(":visible") ? "Tutup CV" : "Buka CV";
            $(".toggleCVButton").text(buttonText);
          });
        });

        $(".toggleKhsButton").click(function () {
        $(".khs-table-wrapper").slideToggle(1000);
        });

        $(".close-khs-table-wrapper").click(function () {
          $(".khs-table-wrapper").fadeOut();
        });

        $(".profile-img").click(function () {
          $(".popup").fadeIn();
        });

        $(".close-popup").click(function () {
          $(".popup").fadeOut();
        });
      });
    </script>
</html>