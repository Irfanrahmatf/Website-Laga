<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('dist/css/styl.css') }}" />
    <title>Cari Aduan</title>
</head>

<body>

    <body>
        {{-- Header --}}
        @include('layouts.Navbar')
        {{-- End Header --}}
        <div class="popup">
            <p class="LacakStatus">Lacak Status</p>
            <div class="close-button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 33">
                    <rect y="0.944336" width="32" height="32" rx="4" fill="#1D2130" />
                    <path d="M10 22.9443L22 10.9443M10 10.9443L22 22.9443" stroke="white" stroke-width="1.5" />
                </svg>
            </div>
            <div class="Form">
                <div class="wrapper">
                    <div class="input-data">
                        <input type="text" required />
                        <div class="underline"></div>
                        <label>ID Laporan</label>
                    </div>
                </div>
                <div class="Primarybutton">
                    <p class="Primarybutton-text">Cari Laporan</p>
                </div>
            </div>
        </div>
        <script>
            // Mengambil elemen close button
            const closeButton = document.querySelector(".close-button");

            // Mengambil elemen popup
            const popup = document.querySelector(".popup");

            // Menambahkan event listener untuk mengatur aksi saat tombol ditutup
            closeButton.addEventListener("click", () => {
                popup.style.display = "none"; // Mengubah display popup menjadi none
            });
        </script>
    </body>

</html>
