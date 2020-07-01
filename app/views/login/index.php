<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Masuk Aplikasi KMS</title>
    <link rel="icon" href="<?= BASEURL; ?>/img/favicon.png" type="png" sizes="18x18">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/login.css">

</head>

<body>
    <div id="card">
        <div id="card-content">
        <div id="card-title">
            <img src="<?= BASEURL;?>/img/dntikms.png" alt="" width="230" heigth="230">
            
            <div class="underline-title"></div>
        </div>
        <form method="post" class="form" action="<?= BASEURL; ?>/login/cekLogin/">
            <label for="user-email" style="padding-top:13px">
                &nbsp;NIK
            </label>
            <input id="user-email" class="form-content" type="text" name="id_user" autocomplete="on" placeholder="Masukan NIK" required />
            <div class="form-border"></div>
            <label for="user-password" style="padding-top:22px">&nbsp;Password
            </label>
            <input id="user-password" class="form-content" type="password" name="password" placeholder="Masukan password" required />
            <div class="form-border"></div>
            <!-- <a href="#">
            <legend id="forgot-pass">Lupa password ?</legend>
            </a> -->
            <input id="submit-btn" type="submit" name="submit" value="LOGIN" />

            <!-- <a href="<?= BASEURL; ?>/Pengguna/tambahData/">Daftar Akun</a> -->

            <!-- <td>
                    <a title="Ubah Data" href="<?= BASEURL; ?>/pengguna/getUbah/<?= $pengguna['id_user'] ?>/<?= $pengguna['level'] ?>"><img src="<?= BASEURL; ?>/img/b-edit.png" alt=""  width="19" heigth="19"></a>
                    <a title="Hapus Data" href="<?= BASEURL; ?>/pengguna/hapus/<?= $pengguna['id_user'] ?>/<?= $pengguna['level'] ?>" onClick="return confirm('Anda Yakin Akan Menghapus ?')"><img src="<?= BASEURL; ?>/img/b-hapus.png" alt=""  width="15" heigth="15"></a>
            </td> -->
        </form>
        </div>
    </div>
</body>

</html>