
<div class="judul">
    <h4><a href="<?= BASEURL; ?>/eksplisit/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <div class="gaya-form">
            <form action="<?= BASEURL; ?>/Eksplisit/simpan/" method="post">
                <label for="id_eksplisit">
                    <span>Id Eksplisit<span class="required">*</span></span>
                    <input type="text" class="input-text" name="id_eksplisit" value="" required/>
                </label>
                <label for="kd_buku">
                    <span>Kode Buku<span class="required">*</span></span>
                    <input type="text" class="input-text" name="kd_buku" value="" require />
                </label>
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
                <label for="thn_terbit">
                    <span>Tahun Terbit<span class="required">*</span></span>
                    <input type="text" class="input-text" name="thn_terbit" value="" required/>
                </label>
                <label for="penulis">
                    <span>Penulis<span class="required">*</span></span>
                    <input type="text" class="input-text" name="penulis" value="" required/>
                </label>

                
                <label><span> </span><input type="submit" value="SIMPAN" /></label>
            </form>
        </div>
    </div>
</div>


