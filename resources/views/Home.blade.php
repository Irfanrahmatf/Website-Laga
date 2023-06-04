<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}" />
    <title>Laga | Laporan Warga</title>
</head>

<body>
    <!-- Navbar -->
    @include('layouts.Navbar')
    <!-- End Navbar -->

    <!-- Box -->
    <div class="custom-box">
        <h2 class="text-1">Lapor Warga!</h2>
        <p class="text-2">
            SAMPAIKAN laporan dan aspirasi warga terkait Dinas Perhubungan Kota
            Surabaya
        </p>
        <div class="container">
            <div id="laporan-form" class="laporan-anda">
                Sampaikan Laporan Anda!
            </div>
            <form>
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputNama">Judul Laporan</label>
                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="Type your Messege">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTanggal">Tanggal Kejadian</label>
                        <input type="date" class="form-control" id="date" name="date"
                            placeholder="Type your Messege">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputLokasi">Lokasi Area Kejadian</label>
                        <input type="text" class="form-control" id="location" name="location"
                            placeholder="Type your Messege">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputIsi">Isi Laporan Anda</label>
                        <input type="text" class="form-control" id="content" name="content"
                            placeholder="Type your Messege">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUpload">Upload lampiran</label>
                        <input type="file" class="form-control-file" id="attachment" name="attachment"
                            accept="image/*">
                    </div>
                    <div class="button-container">
                        <button class="kirim-button">Kirim Laporan</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-container">
            <p class="layanan">Layanan yang kami sediakan untuk masyarakat</p>
            <div class="images">
                <div class="image-card">
                    <img src="{{ asset('dist/image/Content.png') }}" alt="Ajukan Pengaduan">
                    <p class="image-text">Ajukan Pengaduan</p>
                </div>
                <div class="image-card">
                    <img src="{{ asset('dist/image/Content2.png') }}" alt="Lacak Status Pengaduan">
                    <p class="image-text">Lacak Status Pengaduan</p>
                </div>
                <div class="image-card">
                    <img src="{{ asset('dist/image/feedback.png') }}" alt="Sampaikan feedback">
                    <p class="image-text">Sampaikan feedback</p>
                </div>
                <div class="image-card">
                    <img src="{{ asset('dist/image/city alerts.png') }}" alt="Informasi Terkini">
                    <p class="image-text">Informasi Terkini</p>
                </div>
            </div>
        </div>
        <div class="group-container">
            <div class="informasi-terkini">Informasi Terkini</div>
            <div class="BG">
                <p class="date">13</p>
                <p class="month">mei</p>
                <p class="lalulintas1">lalu lintas</p>
                <div class="Line1"></div>
                <p class="Padatmerayap daerah">Padat merayap daerah <br>Jl. Mayjen Sungkono</p>
                <div class="Arrowbutton">
                    <div class="Ellipse"></div>
                </div>
            </div>
            <div class="BG2">
                <p class="date2">25</p>
                <p class="month2">MEI.</p>
                <p class="lalulintas2">lalu lintas</p>
                <div class="Line"></div>
                <p class="Padatmerayap daerah2">Traffic light tidak menyala daerah Raya Darmo</p>
                <div class="Arrowbutton">
                    <div class="Ellipse"></div>
                </div>
                <div class="container2"></div>
            </div>
        </div>
        <!-- End Box -->

        <div id="tentang-kami" class="tentang-kami">
            <a>Tentang Kami</a>
        </div>
        <div class="deskripsi-laga">
            <p>Laga merupakan platform untuk membantu warga dengan mudah melaporkan kondisi jalan yang rusak, fasilitas
                umum yang membutuhkan perhatian, dan permasalahan lainnya yang mempengaruhi kehidupan sehari-hari warga
                Kota Surabaya.</p>
            <p1>Dengan adanya Laga dapat membantu Surabaya menjadi kota yang lebih baik melalui partisipasi aktif warga.
                Maka, bergabunglah dengan Laga dan berkontribusilah dalam perbaikan infrastruktur Kota Surabaya
                bersama-sama.</p1>
        </div>
        <div class="logo-design"></div>
        <div class="button" onclick="scrollToForm()">Laporkan Sekarang</div>
        <footer class="footer">
            <div class="laga-logo"></div>
            <div class="navigasi">Navigasi</div>
            <div class="menu">
                <a href="/resources/views/Home.blade.php">Home</a>
                <a href="#laporan-form">Ajukan Laporan</a>
                <a href="/resources/views/Cari Aduan.blade.php">Cari Laporan</a>
                <a href="#tentang-kami">Tentang Kami</a>
            </div>
            <div id="kontak-kami" class="kontak-kami">Kontak Kami</div>
            <div class="info-kontak">
                <p>Jalan Darmo No. 1001, Kota Surabaya, Indonesia</p>
                <p>Telepon: +62 8123 3333 3333</p>
                <p>Email: info@lagaweb.com</p>
            </div>
        </footer>
        <script>
            function scrollToForm() {
                const form = document.getElementById("laporan-form");
                form.scrollIntoView({
                    behavior: "smooth"
                });
            }
        </script>
</body>

</html>
