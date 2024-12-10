

 <div class="sidebar" id="side_nav">
    <div class="header-box px-5 pt-3 pb-2 d-flex justify-content-between">
        <img alt="Logo E-Tatib" src="/public/img/logo-svg" />
        <button class="btn d-md-none d-block close-btn px-1 py-0 text-dark">
            <i class="fas fa-stream"></i>
        </button>
    </div>
    <ul class="list-unstyled px-2 py-1">
        <!-- Dashboard -->
        <li class="<?php echo $_SERVER['REQUEST_URI'] == '/home' ? 'active' : ''; ?>">
            <a href="/home" class="text-decoration-none px-3 py-3 d-block fw-bold">
                <i class="fas fa-home"></i> Dashboard
            </a>
        </li>

        <!-- Kelola Pengguna -->
        <li>
            <a href="#" class="text-decoration-none px-3 py-3 d-block fw-bold dropdown-btn">
                <i class="fas fa-users"></i> Kelola Pengguna
                <i class="fas fa-chevron-down float-end"></i>
            </a>
            <ul class="collapse list-unstyled px-3">
                <li class="<?php echo $_SERVER['REQUEST_URI'] == '/dataMahasiswa' ? 'active-sub' : ''; ?>">
                    <a href="/dataMahasiswa" class="text-decoration-none px-3 py-2 d-block">Mahasiswa</a>
                </li>
                <li class="<?php echo $_SERVER['REQUEST_URI'] == '/dataDosen' ? 'active-sub' : ''; ?>">
                    <a href="/dataDosen" class="text-decoration-none px-3 py-2 d-block">Dosen</a>
                </li>
                <li class="<?php echo $_SERVER['REQUEST_URI'] == '/dataAdmin' ? 'active-sub' : ''; ?>">
                    <a href="/dataAdmin" class="text-decoration-none px-3 py-2 d-block">Admin</a>
                </li>
            </ul>
        </li>

        <!-- Pelanggaran -->
        <li>
            <a a href="#" class="text-decoration-none px-3 py-3 d-block fw-bold dropdown-btn">
                <i class="fas fa-book"></i> Pelanggaran
                <i class="fas fa-chevron-down float-end"></i>
            </a>
            <ul class="collapse list-unstyled px-3">
                <li class="<?php echo $_SERVER['REQUEST_URI'] == '/dataPelanggaran' ? 'active-sub' : ''; ?>">
                    <a href="/dataMahasiswa" class="text-decoration-none px-3 py-2 d-block">Data Pelanggaran</a>
                </li>
                <li class="<?php echo $_SERVER['REQUEST_URI'] == '/informaasi' ? 'active-sub' : ''; ?>">
                    <a href="/dataDosen" class="text-decoration-none px-3 py-2 d-block">Informasi</a>
                </li>
            </ul>
        </li>


        <!-- Log Aktivitas -->
        <li class="<?php echo $_SERVER['REQUEST_URI'] == '/cetakSurat' ? 'active' : ''; ?>">
            <a href="/cetakSurat" class="text-decoration-none px-3 py-3 d-block fw-bold">
                <i class="fas fa-print"></i> Log Aktivitas
            </a>
        </li>
    </ul>
</div>

<style>
    /* Menu utama */
.sidebar ul li.active a {
    background-color: #f8f9fa; /* Warna putih */
    color: #333; /* Warna teks */
}

/* Sub-menu yang dipilih */
.sidebar ul li ul li.active-sub a {
    /* background-color: #ffa500; Warna oranye */
    color: #ffa500; /* Warna teks */
}

/* Sub-menu default */
.sidebar ul li ul li a {
    background-color: #ffa500;
    color: #333;
}

/* Sub-menu hover efek */
.sidebar ul li ul li a:hover {
    background-color: #ffa500; /* Warna abu muda */
    color: #333;
}

</style>

<script>
        document.querySelectorAll('.dropdown-btn').forEach(function (dropdown) {
        dropdown.addEventListener('click', function () {
            // Tutup semua menu dropdown lainnya
            document.querySelectorAll('.dropdown-btn').forEach(function (btn) {
                if (btn !== dropdown) {
                    btn.nextElementSibling.classList.add('collapse');
                }
            });

            // Toggle menu dropdown yang diklik
            this.nextElementSibling.classList.toggle('collapse');
        });
    });

    // Tambahkan logika highlight sub-menu
    document.querySelectorAll('.collapse a').forEach(function (link) {
        link.addEventListener('click', function () {
            // Hapus highlight dari semua sub-menu
            document.querySelectorAll('.collapse li').forEach(function (item) {
                item.classList.remove('active-sub');
            });

            // Tambahkan highlight ke elemen yang diklik
            this.parentElement.classList.add('active-sub');
        });
    });
</script>