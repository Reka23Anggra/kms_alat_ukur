<div class="judul">
    <h4><a href="<?= BASEURL; ?>/user/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <div class="gaya-form">
            <form action="<?= BASEURL; ?>/Tacit/ubahData/" method="post">
                <label for="id_tacit">
                    <span>Id Tacit<span class="required">*</span></span>
                    <input type="text" class="input-text" name="id_tacit" value="<?= $data['data_tacit']['id_tacit'] ?>" disable required/>
                </label>
                <label for="id_user">
                    <span>Id User<span class="required">*</span></span>
                    <input type="text" class="input-text" name="id_user" value="<?= $data['data_tacit']['id_user'] ?>" disable required/>
                </label>
                <label for="nama">
                    <span>NAMA LENGKAP<span class="required">*</span></span>
                    <input type="text" class="input-text" name="nama" value="<?= $data['data_tacit']['nama'] ?>" required/>
                </label>
                <label for="nm_alat">
                    <span>Nama Alat<span class="required">*</span></span>
                    <input type="text" class="input-text" name="nm_alat" value="<?= $data['data_tacit']['nm_alat'] ?>" required/>
                </label>
                <label for="fungsi">
                    <span>Fungsi Alat<span class="required">*</span></span>
                    <input type="text" class="input-text" name="fungsi" value="<?= $data['data_tacit']['fungsi'] ?>" required/>
                </label>
                <label for="penggunaan_alat">
                    <span>Fungsi Alat<span class="required">*</span></span>
                    <input type="text" class="input-text" name="penggunaan_alat" value="<?= $data['data_tacit']['penggunaan_alat'] ?>" required/>
                </label>
                <label for="perawatan_alat">
                    <span>Fungsi Alat<span class="required">*</span></span>
                    <input type="text" class="input-text" name="perawatan_alat" value="<?= $data['data_tacit']['perawatan_alat'] ?>" required/>
                </label>
                <label for="satuan">
                    <span>Fungsi Alat<span class="required">*</span></span>
                    <input type="text" class="input-text" name="satuan" value="<?= $data['data_tacit']['satuan'] ?>" required/>
                </label>
                
                
                <label><span> </span><input type="submit" value="SIMPAN" ><a href="<?= BASEURL; ?>/Tacit/resetPass/<?= $data['data_tacit']['id_user'] ?>">RESET PASSWORD</a><a href="<?= BASEURL; ?>/Pengguna/index">KEMBALI</a></label>
                
            </form>
        </div>
    </div>
</div>
