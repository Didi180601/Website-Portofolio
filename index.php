<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Budi Nurahyadi</title>
</head>

<body>
    <!--===== HEADER =====-->
    <header class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a href="#" class="nav__logo">TugasPemWeB</a>
            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                    <li class="nav__item"><a href="#about" class="nav__link">Tentang Saya</a></li>
                    <li class="nav__item"><a href="#grafik" class="nav__link">Grafik Tabel dan Line</a></li>
                    <li class="nav__item"><a href="#contact" class="nav__link">Kontak Saya</a></li>
                    <li class="nav__item"><a href="#data" class="nav__link" >Input Data Mahasiswa</a></li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>

    <main class="l-main">
        <!--===== HOME =====-->
        <section class="home bd-grid" id="home">
            <div class="home__data">
                <h1 class="home__title">Halo,<br>Saya <span class="home__title-color">Budi Nurcahyadi</span><br> Mahasiswa Teknik Informatika</h1>

                <a href="#" class="button">Informasi Kontak</a>
            </div>

            <div class="home__social">
                <a href="" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
                <a href="" class="home__social-icon"><i class='bx bxl-gmail'></i></a>
                <a href="" class="home__social-icon"><i class='bx bxl-github'></i></a>
            </div>

            <div class="home__img">
                <svg class="home__blob" viewBox="0 0 479 467" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <mask id="mask0" mask-type="alpha">
                        <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z" />
                    </mask>
                    <g mask="url(#mask0)">
                        <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z" />
                        <image class="home__blob-img" x="50" y="65" href="assets/img/image.png" />
                    </g>
                </svg>
            </div>
        </section>

        <!--===== Tentang Saya =====-->
        <section class="about section " id="about">
            <h2 class="section-title">Tentang Saya</h2>

            <div class="about__container bd-grid">
                <div class="about__img">
                    <img src="assets/img/fotogaya.png" alt="">
                </div>

                <div>
                    <h2 class="about__subtitle">Saya Budi Nurcahyadi</h2>
                    <p class="about__text">Halo perkenalkan, nama saya Budi Nurcahyadi saya adalah salah satu mahasiswa teknik informatika di perguruan tinggi Universitas Palangkaraya. Berikut biodata diri saya, saya tampilkan dibawah</p>
                </div>
                <div class="card kartu">
                    <h1>Biodata Diri</h1>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="foto">
                                <img src="assets/img/image2.png" alt="" width="200" height="auto">
                            </div>
                        </div>
                        <div class="col-md-8 kertas-biodata">
                            <div class="biodata">
                                <table width="100%" border="0">
                                    <tbody>
                                        <tr>
                                            <td valign="top">
                                                <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
                                                    <tbody>
                                                        <tr>
                                                            <td width="25%" valign="top" class="textt" style="font-weight:bold">Nama</td>
                                                            <td width="2%">:</td>
                                                            <td style="color: rgb(0, 170, 225); font-weight:bold">Budi Nurcahyadi</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="textt" style="font-weight: bold">Jenis Kelamin</td>
                                                            <td>:</td>
                                                            <td style="color: rgb(0, 170, 225); font-weight:bold">Laki-Laki</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="textt" style="font-weight:bold">Tempat Lahir</td>
                                                            <td>:</td>
                                                            <td style="color: rgb(0, 170, 225); font-weight:bold">Batam,Kepulauan Riau</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="textt" style="font-weight:bold">Tanggal Lahir</td>
                                                            <td>:</td>
                                                            <td style="font-weight: bold;">18-06-2001</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="textt" style="font-weight:bold">Fakultas</td>
                                                            <td>:</td>
                                                            <td style="color: rgb(0, 170, 225); font-weight: bold">Teknik</td>
                                                        </tr>
                                                        <tr>
                                                            <td valign="top" class="textt" style="font-weight: bold;">Prodi</td>
                                                            <td valign="top">:</td>
                                                            <td style="color: rgb(0, 170, 225); font-weight: bold">Teknik Informatika</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </section>
        <!--===== Grafik =====-->
        <section class="grafik section" id="grafik">
            <h2 class="section-title">Grafik Nilai Tabel dan Line</h2>
            <div class="graph_box bd-grid">
                <div class="box">
                    <canvas id="myChart"></canvas>
                </div>
                <div class="box">
                    <canvas id="mychart"></canvas>
                </div>
            </div>
        </section>

        <!--===== CONTACT =====-->
        <section class="contact section" id="contact">
            <h2 class="section-title">Kontak Saya</h2>

            <div class="contact__container bd-grid">
                <form action="" class="contact__form">
                    <input type="text" placeholder="Name" class="contact__input">
                    <input type="mail" placeholder="Email" class="contact__input">
                    <textarea name="" id="" cols="0" rows="10" class="contact__input"></textarea>
                    <input type="button" value="Enter" class="contact__button button">
                </form>
            </div>
        
        <!-- INPUT DATA -->
        </section>
        <style>
        </style>
        <section class="data section" id="data">
            <h2 class="section-title">Input data Mahasiswa</h2>
            <?php include 'data.php' ?>
            <div class="mx-auto">
                <!-- untuk memasukkan data -->
                <div class="card">
                    <div class="card-header">
                        Create / Edit Data
                    </div>
                    <div class="card-body">
                        <?php
                        if ($error) {
                        ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $error ?>
                            </div>
                        <?php
                             //5 : detik
                        }
                        ?>
                        <?php
                        if ($sukses) {
                        ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $sukses ?>
                            </div>
                        <?php
                           
                        }
                        ?>
                        <form action="" method="POST">
                            <div class="mb-3 row">
                                <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $nim ?>">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat ?>">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="fakultas" class="col-sm-2 col-form-label">Fakultas</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="fakultas" id="fakultas">
                                        <option value="">- Pilih Fakultas -</option>
                                        <option value="teknik" <?php if ($fakultas == "teknik") echo "selected" ?>>Teknik</option>
                                        <option value="keguruan dan ilmu pendidikan" <?php if ($fakultas == "keguruan dan ilmu pendidikan") echo "selected" ?>>Keguruan dan Ilmu Pendidikan</option>
                                        <option value="ekonomi" <?php if ($fakultas == "ekonomi") echo "selected" ?>>Ekonomi</option>
                                        <option value="hukum" <?php if ($fakultas == "hukum") echo "selected" ?>>Hukum</option>
                                        <option value="ilmu sosial dan politik" <?php if ($fakultas == "ilmu sosial dan politik") echo "selected" ?>>Ilmu Sosial dan Politik</option>
                                        <option value="kedokteran" <?php if ($fakultas == "kedokteran") echo "selected" ?>>Kedokteran</option>
                                        <option value="matematika dan ilmu pengetahuan alam" <?php if ($fakultas == "matematika dan ilmu pengetahuan alam") echo "selected" ?>>Matematika dan Ilmu Pengetahuan Alam</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
                            </div>
                        </form>
                    </div>
                </div>

                <!-- untuk mengeluarkan data -->
                <div class="card">
                    <div class="card-header text-white bg-secondary">
                        Data Mahasiswa
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">NIM</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Fakultas</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql2   = "select * from mahasiswa order by id desc";
                                $q2     = mysqli_query($koneksi, $sql2);
                                $urut   = 1;
                                while ($r2 = mysqli_fetch_array($q2)) {
                                    $id         = $r2['id'];
                                    $nim        = $r2['nim'];
                                    $nama       = $r2['nama'];
                                    $alamat     = $r2['alamat'];
                                    $fakultas   = $r2['fakultas'];
                                ?>
                                    <tr>
                                        <th scope="row"><?php echo $urut++ ?></th>
                                        <td scope="row"><?php echo $nim ?></td>
                                        <td scope="row"><?php echo $nama ?></td>
                                        <td scope="row"><?php echo $alamat ?></td>
                                        <td scope="row"><?php echo $fakultas ?></td>
                                        <td scope="row">
                                            <a href="index.php?op=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                            <a href="index.php?op=delete&id=<?php echo $id ?>" onclick="return confirm('Jangan di hapus om pls!!!')"><button type="button" class="btn btn-danger">Delete</button></a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
    </main>

    </section>
    <!--===== FOOTER =====-->
    <footer class="footer">
        <p class="footer__title">Didi</p>
        <div class="footer__social">
            <a href="#" class="footer__icon"><i class='bx bxl-facebook'></i></a>
            <a href="#" class="footer__icon"><i class='bx bxl-instagram'></i></a>
            <a href="#" class="footer__icon"><i class='bx bxl-twitter'></i></a>
            <a href="#" class="footer__icon"><i class='bx bxl-tiktok'></i></a>
        </div>
        <p class="footer__copy">&#169; BudiNurcahyadi. All rigths reserved</p>
    </footer>


    <!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--===== Java Script =====-->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="assets/js/chart.js"></script>
</body>

</html>