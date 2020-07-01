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
            <a href="<?= BASEURL; ?>/Berkas/tambah">Tambah Modul</a>
            <!-- <select id="optionFilter" name="optionFilter">
                <option value="1">Id Eksplisit</option>
                <option value="2">Nama Alat</option>
            </select>
            <input type="text" id="myInput" onkeyup="cari()" placeholder="Masukan Pencarian" title="Ketik disini"> -->
        </form>    
    </div>
    <!-- ini bagian judul -->
    <div class="table-wrapper">
        <table id="myTable" class="fl-table">
            <thead>
            <tr>
                <th>No</th>
                <th>Id Modul</th>
                <th>Id Eksplisit</th>
                <th>Nama Alat</th>
                <th>Modul atau Jurnal</th>
                <th>Proses</th>
                
            </tr>
            </thead>
            <tbody>
            <?php
            $no = 1; ?>
            <?php foreach ( $data['data_berkas'] as $modul ) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $modul['id_modul'] ?></td>
                <td><?= $modul['id_eksplisit'] ?></td>
                <td><?= $modul['nm_alat'] ?></td>
                <td>
                <a title="Upload Data" href="<?= BASEURL; ?>/files/<?= $prg['modul'] ?>" target="_blank">FILE</a>
                </td>
                <td>
                <a href="<?= BASEURL; ?>/Berkas/tambahBerkas/<?= $prg['id_modul'] ?>"><img src="<?= BASEURL; ?>/img/b-edit.png" alt=""  width="19" heigth="19"></a>
            </tr>
            <?php endforeach; ?>
            <tbody>
        </table>
    </div>
</div>

<!-- <script>
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

</script> -->
