<div class="judul">
    <h4><a href="<?= BASEURL; ?>/user/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <div class="gaya-form">
            <form action="<?= BASEURL; ?>/Eksplisit/ubahData/" method="post">
                <label for="id_eksplisit">
                    <span>Id Pengetahuan<span class="required">*</span></span>
                    <input type="text" class="input-text" name="id_eksplisit" value="<?= $data['data_eksplisit']['id_eksplisit'] ?>" disable required/>
                </label>
                <label for="buku">
                    <span>Buku<span class="required">*</span></span>
                    <input type="text" class="input-text" name="buku" value="<?= $data['data_eksplisit']['buku'] ?>" disable required/>
                </label>
                <label for="nm_alat">
                    <span>Nama Alat<span class="required">*</span></span>
                    <input type="text" class="input-text" name="nm_alat" value="<?= $data['data_eksplisit']['nm_alat'] ?>" required/>
                </label>
                <label for="fungsi">
                    <span>Fungsi Alat<span class="required">*</span></span>
                    <input type="text" class="input-text" name="fungsi" value="<?= $data['data_eksplisit']['fungsi'] ?>" required/>
                </label>
                <label for="penggunaan_alat">
                    <span>Penggunaan Alat<span class="required">*</span></span>
                    <input type="text" class="input-text" name="penggunaan_alat" value="<?= $data['data_eksplisit']['penggunaan_alat'] ?>" required/>
                </label>
                <label for="perawatan_alat">
                    <span>Perawatan Alat<span class="required">*</span></span>
                    <input type="text" class="input-text" name="perawatan_alat" value="<?= $data['data_eksplisit']['perawatan_alat'] ?>" required/>
                </label>
                <label for="satuan">
                    <span>Satuan Alat<span class="required">*</span></span>
                    <input type="text" class="input-text" name="satuan" value="<?= $data['data_eksplisit']['satuan'] ?>" required/>
                </label>
                <label for="thn_terbit">
                    <span>Tahun Terbit<span class="required">*</span></span>
                    <input type="text" class="input-text" name="thn_terbit" value="<?= $data['data_eksplisit']['thn_terbit'] ?>" required/>
                </label>
                <label for="penulis">
                    <span>Penulis<span class="required">*</span></span>
                    <input type="text" class="input-text" name="penulis" value="<?= $data['data_eksplisit']['penulis'] ?>" required/>
                </label>
                
                
                <label><span> </span><input type="submit" value="SIMPAN" ><a href="<?= BASEURL; ?>/Eksplisit/index">KEMBALI</a></label>
                
            </form>
        </div>
    </div>
</div>
