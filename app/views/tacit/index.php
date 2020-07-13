<div class="judul">
    <h4><?= $data['judul'] ?></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <?php Flasher::flash(); ?>
        <form action="">
            <a href="<?= BASEURL; ?>/Tacit/tambahData">Tambah Data</a>
            <select id="optionFilter" name="optionFilter">
                <option value="1">Id Tacit</option>
                <option value="2">Nama ALat Ukur</option>
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
                <th>Id Tacit</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Nama Alat</th>
                <th>Fungsi Alat</th>
                <th>Penggunaan Alat</th>
                <th>Perawatan Alat</th>
                <th>Satuan Alat</th>
                <th>Proses</th>
                
            </tr>
            </thead>
            <tbody>
            <?php
            $no = 1; ?>
            <?php foreach ( $data['data_tacit'] as $tacit ) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $tacit['id_tacit'] ?></td>
                <td><?= $tacit['id_user'] ?></td>
                <td><?= $tacit['nama'] ?></td>
                <td><?= $tacit['nm_alat'] ?></td>
                <td><?= $tacit['fungsi'] ?></td>
                <td><?= $tacit['penggunaan_alat'] ?></td>
                <td><?= $tacit['perawatan_alat'] ?></td>
                <td><?= $tacit['satuan'] ?></td>
                <td>
                    <a title="Ubah Data" href="<?= BASEURL; ?>/tacit/getUbah/<?= $tacit['id_tacit'] ?>/<?= $_SESSION['level'] ?> "><img src="<?= BASEURL; ?>/img/b-edit.png" alt=""  width="22" heigth="22"></a>
                    <a title="Hapus Data" href="<?= BASEURL; ?>/tacit/hapus/<?= $tacit['id_tacit'] ?>" onClick="return confirm('Anda Yakin Akan Menghapus ?')"><img src="<?= BASEURL; ?>/img/b-hapus.png" alt=""  width="19" heigth="19"></a>
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

