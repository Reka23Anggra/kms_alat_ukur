<div class="judul">
    <h4><?= $data['judul'] ?></h4>
</div>
<!-- <div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div> -->
<div class="data-table">
    <div class="navigasi">
        <?php Flasher::flash(); ?>
        <form action="">
            <!-- <a href="<?= BASEURL; ?>/dashboard/tambahData">Tambah Pertanyaan</a> -->
            <select id="optionFilter" name="optionFilter">
                <option value="1">Nama Alat</option>
                <option value="2"></option>
            </select>
        <input type="text" id="myInput" onkeyup="cari()" placeholder="Masukan Pencarian" title="Ketik disini">
        </form>    
    </div>
    <!-- ini bagian judul -->
    <div class="table-wrapper">
        <table id="myTable" class="fl-table">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama Alat</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $no = 1; ?>
            <?php foreach ( $data['data_alat'] as $pertanyaan ) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $pertanyaan['nm_alat'] ?></td>
        
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

