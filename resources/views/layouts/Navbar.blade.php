<header>
    <nav class="navbar">
        <div class="navbar-brand">
            <a href="/resources/views/Home.blade.php" onclick="location.reload()" class="navbar-logo">
                <img src="{{ asset('dist/image/3 6.png') }}" alt="Logo" class="navbar-logo-img" />
            </a>
        </div>
        <div class="navbar-menu">
            <ul class="navbar-items">
                <li class="navbar-item">
                    <a href="/resources/views/Home.blade.php" class="navbar-link" onclick="location.reload()">Home</a>
                </li>
                <li class="navbar-item">
                    <a href="#tentang-kami" class="navbar-link">Tentang Laga</a>
                </li>
                <li class="navbar-item">
                    <a href="/resources/views/Cari Aduan.blade.php" class="navbar-link" data-popup>Cari Aduan</a>
                </li>
                <li class="navbar-item">
                    <a href="#kontak-kami" class="navbar-link">Contact</a>
                </li>
            </ul>
        </div>
        <div class="navbar-buttons">
            <a href="/resources/views/layouts/login.blade.php" class="navbar-button-link">Login</a>
            <a href="/resources/views/layouts/Daftar.blade.php" class="navbar-button-link">Daftar</a>
        </div>
    </nav>
</header>
