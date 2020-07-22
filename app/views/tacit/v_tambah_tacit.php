
<div class="judul">
    <h4><a href="<?= BASEURL; ?>/tacit/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <div class="gaya-form">
            <form action="<?= BASEURL; ?>/Tacit/simpan/" method="post">
                <label for="id_tacit">
                    <span>Id Pengetahuan<span class="required">*</span></span>
                    <input type="text" class="input-text" name="id_tacit" value="" required/>
                </label>
                <!-- <label for="id_user"> -->
                    <!-- <span>Id User<span class="required">*</span></span> -->
                    <input type="hidden" class="input-text" name="id_user" value="<?= $_SESSION['id_user']; ?>" />
                <!-- </label>
                <label for="nama"> -->
                    <!-- <span>Nama User<span class="required">*</span></span> -->
                    <input type="hidden" class="input-text" name="nama" value="<?= $_SESSION['nama']; ?>" />
                <!-- </label> -->
                <label for="nm_alat">
                    <span>Nama Alat<span class="required">*</span></span>
                    <input type="text" class="input-text" name="nm_alat" value="" required/>
                </label>                
                <label for="fungsi">
                    <span>Fungsi Alat<span class="required">*</span></span>
                    <input type="text" class="input-text" name="fungsi" value="" required/>
                </label>
                <label for="penggunaan_alat">
                    <span>Penggunaan Alat<span class="required">*</span></span>
                    <input type="text" class="input-text" name="penggunaan_alat" value="" required/>
                </label>
                <label for="perawatan_alat">
                    <span>Perawatan Alat<span class="required">*</span></span>
                    <input type="text" class="input-text" name="perawatan_alat" value="" required/>
                </label>
                <label for="satuan">
                    <span>Satuan Alat<span class="required">*</span></span>
                    <input type="text" class="input-text" name="satuan" value="" required/>
                </label>

                
                <label><span> </span><input type="submit" value="SIMPAN" /><a href="<?= BASEURL; ?>/Tacit/index">KEMBALI</a></label>
            </form>
        </div>
    </div>
</div>


