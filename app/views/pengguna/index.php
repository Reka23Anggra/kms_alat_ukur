<div class="judul">
    <h4><?= $data['judul'] ?></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <?php Flasher::flash(); ?>
        <? if($_SESSION['level'] == 'Admin')
                    {?>
        <form action="">
            <a href="<?= BASEURL; ?>/Pengguna/tambahData">Tambah Data</a>
            <?}?>
            <select id="optionFilter" name="optionFilter">
                <option value="1">NIK</option>
                <option value="2">Nama Karyawan</option>
            </select>
            <input type="text" id="myInput" onkeyup="cari()" placeholder="Masukan Pencarian" title="Ketik disini">
        </form>    
    </div>
    <!-- ini bagian judul -->
    <div class="table-wrapper">
        <table id="myTable" class="f1-table">
            <thead>
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Level</th>
                <th>Username</th>
                <!-- <th>Password</th> -->
                <th>No Handphone</th>
                <th>Email</th>
                <th>Proses</th>
                
            </tr>
            </thead>
            <tbody>
            <?php
            $no = 1; ?>
            <?php foreach ( $data['data_pengguna'] as $pengguna ) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $pengguna['id_user'] ?></td>
                <td><?= $pengguna['nama'] ?></td>
                <td><?= $pengguna['jk'] ?></td>
                <td><?= $pengguna['level'] ?></td>
                <td><?= $pengguna['username'] ?></td>
                <!-- <td><?= $pengguna['password'] ?></td> -->
                <td><?= $pengguna['no_hp'] ?></td>
                <td><?= $pengguna['email'] ?></td>
                <td>
                <?php if($_SESSION['level'] == 'Admin')
                    {?>
                    <a title="Ubah Data" href="<?= BASEURL; ?>/pengguna/getUbah/<?= $pengguna['id_user'] ?>/<?= $pengguna['level'] ?>"><img src="<?= BASEURL; ?>/img/b-edit.png" alt=""  width="22" heigth="22"></a>
                 
                    <a title="Hapus Data" href="<?= BASEURL; ?>/pengguna/hapus/<?= $pengguna['id_user'] ?>/<?= $pengguna['level'] ?>" onClick="return confirm('Anda Yakin Akan Menghapus ?')"><img src="<?= BASEURL; ?>/img/b-hapus.png" alt=""  width="19" heigth="19"></a>
                    <?php }?>
                <?php if($_SESSION['level'] == 'Pegawai')
                    {?>
                    <a title="Ubah Data" href="<?= BASEURL; ?>/pengguna/getUbahPg/<?= $pengguna['id_user'] ?>/<?= $pengguna['level'] ?>"><img src="<?= BASEURL; ?>/img/b-edit.png" alt=""  width="22" heigth="22"></a>
                    <?php } ?>

                </td>
            </tr>
            <?php endforeach; ?>
            <tbody>
        </table>
    </div>
</div>

<script>
function cari() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    v = parseInt(document.getElementById("optionFilter").value);
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[v];
        if (td) {
            txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }
    }       
  }
}

</script>

