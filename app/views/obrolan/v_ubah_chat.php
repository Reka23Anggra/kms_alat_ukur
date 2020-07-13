<div class="judul">
    <h4><a href="<?= BASEURL; ?>/user/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <div class="gaya-form">
            <form action="<?= BASEURL; ?>/Obrolan/ubahData/" method="post">
                <label for="id_chat">
                    <span>Id Diskusi<span class="required">*</span></span>
                    <input type="text" class="input-text" name="id_chat" value="<?= $data['data_chat']['id_chat'] ?>" disable required/>
                </label>
                <label for="id_user">
                    <span>NIK<span class="required">*</span></span>
                    <input type="text" class="input-text" name="id_user" value="<?= $data['data_chat']['id_user'] ?>" placeholder = "<?= $data['data_chat']?>"/>
                </label>
                <label for="nama">
                    <span>Nama User<span class="required">*</span></span>
                    <input type="text" class="input-text" name="nama" value="<?= $data['data_chat']['nama'] ?>" placeholder = "<?= $data['data_chat']?>"/>
                </label>
                <label for="chat">
                    <span>Pertanyaan<span class="required">*</span></span>
                    <input type="text" class="input-text" name="chat" value="" required/>
                </label>
                <label for="level">
                    <span>Level<span class="required">*</span></span>
                    <input type="text" class="input-text" name="level" value="<?= $data['data_chat']['level'] ?>" placeholder = "<?= $data['data_chat']?>"/>
                </label>
                <!-- <label for="jawab">
                    <span>Jawaban<span class="required">*</span></span> -->
                    <input type="hidden" class="input-text" name="jawab" value="" />
                <!-- </label> -->

                
                <label><span> </span><input type="submit" value="SIMPAN" ><a href="<?= BASEURL; ?>/Obrolan/index">KEMBALI</a></label>
                
            </form>
        </div>
    </div>
</div>
