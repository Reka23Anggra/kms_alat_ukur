<div class="judul">
    <h4><a href="<?= BASEURL; ?>/user/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <div class="gaya-form">
            <form action="<?= BASEURL; ?>/Pengguna/ubahData/" method="post">
                <label for="id_user">
                    <span>NIK<span class="required">*</span></span>
                    <input type="text" class="input-text" name="id_user" value="<?= $data['data_pengguna']['id_user'] ?>" disable required/>
                </label>
                <label for="nama">
                    <span>Nama Lengkap<span class="required">*</span></span>
                    <input type="text" class="input-text" name="nama" value="<?= $data['data_pengguna']['nama'] ?>" required/>
                </label>
               
                <label for="jk">
                    <span>Jenis Kelamin</span>
                    <select name="jk" class="select-field">
                        <option value="">>>Pilih Jenis Kelamin<<</option>
                        <option value="L">Laki - laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </label>
                <label for="level">
                    <span>Level User</span>
                    <select name="level" class="select-field">
                        <option value="<?= $data['data_pengguna']['level'] ?>"><?= $data['data_pengguna']['level'] ?></option>
                        <option value="Pakar">Pakar</option>
                        <option value="Admin">Admin</option>
                        <option value="Pegawai">Pegawai</option>
                    </select>
                </label>
                <label for="username">
                    <span>Username<span class="required">*</span></span>
                    <input type="text" class="input-text" name="username" value="<?= $data['data_pengguna']['username'] ?>" required/>
                </label>
                <!-- <label for="password">
                    <span>Password<span class="required">*</span></span> -->
                    <input type="hidden" class="input-text" name="password" value="<?= $data['data_pengguna']['password'] ?>"/>
                <!-- </label> -->
                <label for="no_hp">
                    <span>Ho Hansphone<span class="required">*</span></span>
                    <input type="number" class="input-text" name="no_hp" value="<?= $data['data_pengguna']['no_hp'] ?>" required/>
                </label>
                <label for="email">
                    <span>Email<span class="required">*</span></span>
                    <input type="text" class="input-text" name="email" value="<?= $data['data_pengguna']['email'] ?>" required/>
                </label>
                
                <label><span> </span><input type="submit" value="SIMPAN" ><a href="<?= BASEURL; ?>/Pengguna/index">KEMBALI</a></label>
                
            </form>
        </div>
    </div>
</div>
