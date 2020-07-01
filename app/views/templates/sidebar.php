<section id="sideMenu">
    <button class="closebtn" onclick="closeNav()"><</button>
    <div class="logo-app">
        <img src="<?= BASEURL;?>/img/logonew.png" alt="" width="170" heigth="150">
    </div>
    <nav>
        <?php
        $halaman = $data['judul'];
        
        if ($_SESSION["level"] == 'Admin') { ?>
            <a href="<?= BASEURL;?>/Pengguna/lihatProfile/<?= $_SESSION['id_user'] ?>" <?php if($halaman == "Profile") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/profil.png" alt="" width="40" heigth="40">&nbsp Profil</a>
            <a href="<?= BASEURL;?>/Tacit/index" <?php if($halaman == "Tacit") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/pakar.png" alt="" width="40" heigth="40">&nbsp Kelola Tacit</a>
            <a href="<?= BASEURL;?>/Eksplisit/index" <?php if($halaman == "Eksplisit") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/jurnal.png" alt="" width="40" heigth="40">&nbsp Kelola Eksplisit</a>
            <a href="<?= BASEURL;?>/cetak/index" <?php if($halaman == "Perawatan") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/rawat4.png" alt="" width="30" heigth="30">&nbsp Cetak Perawatan </a>
            <a href="<?= BASEURL;?>/Pengguna/index" <?php if($halaman == "Data User") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/obrolan.png" alt="" width="40" heigth="40">&nbsp Kelola User</a>
            <a href="<?= BASEURL;?>/berkas/index/<?= $_SESSION['id_user'] ?>" <?php if($halaman == "Pengetahuan") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/ebook.png" alt="" width="40" heigth="40">&nbsp Modul Pengetahuan</a>
            <!-- <a href="<?= BASEURL;?>/cetak/index/<?= $_SESSION['level'] ?>" <?php if($halaman == "Laporan") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/cetak3.png" alt="" width="40" heigth="40">&nbsp Cetak Perawatan</a>                   -->
        <?php }
        
        else if($_SESSION["level"] == 'Pakar'){ ?>
            <a href="<?= BASEURL;?>/Pengguna/lihatProfile/<?= $_SESSION['id_user'] ?>" <?php if($halaman == "Profile") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/edituser.png" alt="" width="20" heigth="20">&nbsp Profil</a>
            <a href="<?= BASEURL;?>/Tacit/index" <?php if($halaman == "Tacit") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/kms1.png" alt="" width="20" heigth="20">&nbsp Kelola Tacit</a>
            <a href="<?= BASEURL;?>/cetak/index" <?php if($halaman == "PErawatan") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/rawat.png" alt="" width="20" heigth="20">&nbsp Cetak Perawatan </a>
            <a href="<?= BASEURL;?>/Berkas/index/<?= $_SESSION['id_user'] ?>" <?php if($halaman == "Pengetahuan") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/buku.png" alt="" width="20" heigth="20">&nbsp Modul Pengetahuan</a>
        <?php } 
        // Role user Admin Procurement
        else if($_SESSION["level"] == 'Pegawai'){ ?>
            <a href="<?= BASEURL;?>/pengguna/v_detil_profil/<?= $_SESSION['id_user'] ?>" <?php if($halaman == "Profile") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/edituser.png" alt="" width="20" heigth="20">&nbsp Profile</a>
            <a href="<?= BASEURL;?>/cetak/index" <?php if($halaman == "Perawatan") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/panah.png" alt="" width="20" heigth="20">&nbsp Perawatan </a>
            <a href="<?= BASEURL;?>/Berkas/index/<?= $_SESSION['nik'] ?>" <?php if($halaman == "Modul Pengetahuan") echo "class='active'"; ?>><img style="float : left;" src="<?= BASEURL;?>/img/berkas.png" alt="" width="20" heigth="20">&nbsp Modul Pengetahuan</a>  
        <?php } ?>

    </nav>
</section>
<header id="main">
    <div class="search-area">
        <div>  
            <button class="openbtn" onclick="openNav()">☰</button>
            <a title="Diskusi" href="<?= BASEURL;?>/Obrolan/index/<?= $_SESSION['id_user'] ?>"><img style="float : right; margin-left : 15px;" src="<?= BASEURL;?>/img/chat.png" alt="" width="35" heigth="35"></a> 
            <a title="Unduh Data" href="<?= BASEURL;?>/Unduh/index/<?= $_SESSION['id_user'] ?>"><img style="float : right; margin-left : 15px;" src="<?= BASEURL;?>/img/b-simpan.png" alt="" width="35" heigth="35"></a> 
        </div>
    </div>
    <div class="user-area">
        <!-- <p> Welcome <?= $_SESSION['nama'] ?> </p> -->
     (<?= $_SESSION['level'] ?>) , <?= $_SESSION['nama'] ?> 
        <a title="Keluar/Logout" href="<?= BASEURL;?>/login/logout"><img style="float : right; margin-left : 15px;" src="<?= BASEURL;?>/img/reg.png" alt="" width="40" heigth="40"></a>
    </div>
</header>
<section id="content-area">