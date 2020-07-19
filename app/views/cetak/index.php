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
        <?php if($_SESSION['level'] == 'Admin') {?>
                    <a title="Tambah Data"  href="<?= BASEURL; ?>/Cetak /tambahData">Tambah Data</a>
                 <?php } ?>
            <select id="optionFilter" name="optionFilter">
                <option value="1">ID Perawatan</option>
                <option value="2">Nama Alat</option>
            </select>
            <input type="text" id="myInput" onkeyup="cari()" placeholder="Masukan Pencarian" title="Ketik disini">
        </form>    
    </div>
    <div class="table-wrapper">
        <table id="myTable" class="f1-table">
            <thead>
            <tr>
                <th>No</th>
                <th>Id Perawatan Alat</th>
                <th>Nama Alat</th>
                <th>Fungsi Alat</th>
                <th>Penggunaan Alat</th>
                <th>Perawatan Alat Tacit</th>
                <th>Perawatan Alat Eksplisit</th>
                <th>Satuan Alat</th>
                <th>Proses</th>
                
            </tr>
            </thead>
            <tbody>
            <?php
            $no = 1; ?>
            <?php foreach ( $data['cetak_data'] as $print ) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $print['id_perawatan_alat'] ?></td>
                <td><?= $print['nm_alat'] ?></td>
                <td><?= $print['fungsi'] ?></td>
                <td><?= $print['penggunaan_alat'] ?></td>
                <td><?= $print['perawatan_alat_tacit'] ?></td>
                <td><?= $print['perawatan_alat_eks'] ?></td>
                <td><?= $print['satuan'] ?></td>
               
                <td>
                <a title="Cetak Data" href="<?= BASEURL; ?>/Cetak/getData/<?= $print['id_perawatan_alat'] ?>"><img src="<?= BASEURL; ?>/img/laporan.png" alt=""  width="28" heigth="28"></a>
                
                <?php if($_SESSION['level'] == 'Admin') {?>
                    <a title="Hapus Data" href="<?= BASEURL; ?>/cetak/hapus/<?= $print['id_perawatan_alat'] ?>/<?= $print['nm_alat'] ?>" onClick="return confirm('Anda Yakin Akan Menghapus ?')"><img src="<?= BASEURL; ?>/img/b-hapus.png" alt=""  width="19" heigth="19"></a>
                 <?php } ?>
              
                
                </td>
            </tr>
            <?php endforeach; ?>
            <tbody>
        </table>
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
