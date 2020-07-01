
<div class="judul">
    <h4><a href="<?= BASEURL; ?>/berkas/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <div class="gaya-form">
            <form action="<?= BASEURL; ?>/Berkas/tambahBerkas/" method="post">
                <label for="id_modul">
                    <span>Id Modul<span class="required">*</span></span>
                    <input type="text" class="input-text" name="id_modul" value="" required/>
                </label>
                <label for="id_eksplisit">
                    <span>Id Eksplisit<span class="required">*</span></span>
                    <input type="text" class="input-text" name="id_eksplisit" value="" required/>
                </label>
                <label for="nm_alat">
                    <span>Nama Alat<span class="required">*</span></span>
                    <input type="text" class="input-text" name="nm_alat" value="" required/>
                </label>                
                <label for="modul">
                    <span>Modul<span class="required">*</span></span>
                    <input type="file" style="width: 100%" class="input-text" name="modul" value="" required/>
                </label>
                
                <label><span> </span><input type="submit" value="SIMPAN" /></label>
            </form>
        </div>
    </div>
</div>


