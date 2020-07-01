
<div class="judul">
    <h4><a href="<?= BASEURL; ?>/obrolan/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <div class="gaya-form">
            <form action="<?= BASEURL; ?>/Obrolan/simpan/" method="post">
                <label for="id_chat">
                    <span>Id Diskusi<span class="required">*</span></span>
                    <input type="text" class="input-text" name="id_chat" value="" require />
                </label>
                <label for="id_user">
                    <span>NIK<span class="required">*</span></span>
                    <input type="text" class="input-text" name="id_user" value="<?= $_SESSION['id_user']; ?>" />
                </label>
                <label for="nama">
                    <span>Nama User<span class="required">*</span></span>
                    <input type="text" class="input-text" name="nama" value="<?= $_SESSION['nama']; ?>" />
                </label>
                <label for="chat">
                    <span>Pertanyaan<span class="required">*</span></span>
                    <input type="text" class="input-text" name="chat" value="" required/>
                </label>
                <label for="level">
                    <span>Level<span class="required">*</span></span>
                    <input type="text" class="input-text" name="level" value="<?= $_SESSION['level']; ?>"/>
                </label>

                
                <label><span> </span><input type="submit" value="SIMPAN" /><a href="<?= BASEURL; ?>/Obrolan/index">KEMBALI</a></label>
            </form>
        </div>
    </div>
</div>


