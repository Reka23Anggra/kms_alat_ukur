<div class="judul">
    <h4><?= $data['judul'] ?></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
<div class="gaya-form">
    <div class="navigasi">
            <label for="id_modul">
                <span>Id modul<span class="required">*</span></span>
                    <input type="text" class="input-text" name="id_modul" value="<?= $data['data_berkas']['id_modul'] ?>" disabled/>
                </label>
                <label for="id_eksplisit">
                    <span>Id Eksplisit<span class="required">*</span></span>
                    <input type="text" class="input-text" name="id_eksplisit" value="<?= $data['data_berkas']['id_eksplisit'] ?>" disabled/>
                </label>
                <label for="nm_alat">
                    <span>Nama Alat<span class="required">*</span></span>
                    <input type="text" class="input-text" name="nm_alat" value="<?= $data['data_berkas']['nm_alat'] ?>" disabled/>
                </label>
                <label for="modul">
                    <span>Modul atau Jurnal<span class="required">*</span></span>
                    <input type="text" class="input-text" name="modul" value="<?= $data['data_berkas']['modul'] ?>" disabled/>
                </label>
                <label>
                    <span>FILE<span class="required">*</span></span>
                    <a href="<?= BASEURL; ?>/Berkas/getBerkas/<?= $data['data_berkas']['id_modul'] ?>"><?= $data['data_berkas']['modul'] ?>.PDF</a>
                </label>
    </div>
 
</div>