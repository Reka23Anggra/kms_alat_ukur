
<div class="judul">
    <h4><a href="<?= BASEURL; ?>/cetak/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <div class="gaya-form">
            <form action="<?= BASEURL; ?>/Cetak/simpan/" method="post">
                <label for="id_perawatan_alat">
                    <span>Id Perawatan Alat<span class="required">*</span></span>
                    <input type="text" class="input-text" name="id_perawatan_alat" value="" required/>
                </label>
                <label for="nm_alat">
                    <span>Nama Alat<span class="required">*</span></span>
                    <input type="text" class="input-text" name="nm_alat" value="" required/>
                </label>                
                <label for="id_tacit">
                    <span>ID Tacit<span class="required">*</span></span>
                    <input type="text" class="input-text" name="id_tacit" value="" required/>
                </label>                
                <label for="id_eksplisit">
                    <span>ID Eksplisit <span class="required">*</span></span>
                    <input type="text" class="input-text" name="id_eksplisit" value="" required/>
                </label>                
                <label for="fungsi">
                    <span>Fungsi Alat<span class="required">*</span></span>
                    <input type="text" class="input-text" name="fungsi" value="" required/>
                </label>
                <label for="penggunaan_alat">
                    <span>Penggunaan Alat<span class="required">*</span></span>
                    <input type="text" class="input-text" name="penggunaan_alat" value="" required/>
                </label>
                <label for="perawatan_alat_tacit">
                    <span>Perawatan Alat Tacit<span class="required">*</span></span>
                    <input type="text" class="input-text" name="perawatan_alat_tacit" value="" required/>
                </label>
                <label for="perawatan_alat_eks">
                    <span>Perawatan Alat Eksplisit<span class="required">*</span></span>
                    <input type="text" class="input-text" name="perawatan_alat_eks" value="" required/>
                </label>
                <label for="satuan">
                    <span>Satuan Alat<span class="required">*</span></span>
                    <input type="text" class="input-text" name="satuan" value="" required/>
                </label>

                
                <label><span> </span><input type="submit" value="SIMPAN" /><a href="<?= BASEURL; ?>/Cetak/index">KEMBALI</a></label>
            </form>
        </div>
    </div>
</div>


