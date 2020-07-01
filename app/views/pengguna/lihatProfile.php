<div class="judul">
    <h4><a href="<?= BASEURL; ?>/user/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>


<div class="row">
  <div class="column">
        <div class="data-table">
            <div class="navigasi">
            <?php Flasher::flash(); ?>
                <div class="gaya-form">
                    <form action="<?= BASEURL; ?>/Pengguna/ubahProfile/<?= $data['data_pengguna']['id_user'] ?>" method="post">
                    <label for="id_user">
                    <span>Id User<span class="required">*</span></span>
                    <input type="text" class="input-text" name="id_user" value="" required/>
                </label>
                <label for="nama">
                    <span>Nama Lengkap<span class="required">*</span></span>
                    <input type="text" class="input-text" name="nama" value="" required/>
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
                        <option value="Admin">Admin</option>
                        <option value="Pakar">Pakar</option>
                        <option value="Pegawai">Pegawai</option>
                    </select>
                </label>
                <label for="username">
                    <span>Username<span class="required">*</span></span>
                    <input type="text" class="input-text" name="username" value="" required/>
                </label>
                <label for="password">
                    <span>Password<span class="required">*</span></span>
                    <input type="password" class="input-text" name="password" value="" required/>
                </label>                
                <label for="no_hp">
                    <span>No Handphone<span class="required">*</span></span>
                    <input type="number" class="input-text" name="no_hp" value="" required/>
                </label>
                <label for="email">
                    <span>Email<span class="required">*</span></span>
                    <input type="email" class="input-text" name="email" value="" required/>
                </label>

                <label><span> </span><input type="submit" value="UBAH DATA"><a href="<?= BASEURL; ?>/Pengguna/ubahPass/<?= $data['data_pengguna']['id_user'] ?>">UBAH PASSWORD</a></label>
                        
                        </form>
                    </div>
                </div>
            </div>
      </div>
      <div class="column">
            <div class="data-table">
                <div class="mainPesan2">
                    <table class="fl-table">
                        <thead>
                        <tr>
                            <th>Pengirim</th>
                            <th>Subjek</th>
                            <th>Tanggal Pesan</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ( $data['data_pesan'] as $pesan ) : ?>
                        <tr>
                            <td><a class="pesan-masuk" href="<?= BASEURL; ?>/pesan/detilPesan/<?= $pesan['id_pesan'] ?>"><?= $pesan['nama'] ?></td>
                            <td><a class="pesan-masuk" href="<?= BASEURL; ?>/pesan/detilPesan/<?= $pesan['id_pesan'] ?>"><?= $pesan['subjek'] ?></td>
                            <td><?= $pesan['tgl_kirim'] ?></td>
                            <td>
                                <a href="<?= BASEURL; ?>/pesan/hapusPesanMasuk/<?= $pesan['id_pesan'] ?>" onClick="return confirm('Anda Yakin Akan Menghapus ?')"><img src="<?= BASEURL; ?>/img/b-hapus.png" alt=""  width="15" heigth="15"></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <tbody>
                    </table>
                </div>    
            </div>
      </div>
    </div>