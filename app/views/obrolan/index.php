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
            <a href="<?= BASEURL; ?>/Obrolan/tambahData">Tambah Pertanyaan</a>
            <select id="optionFilter" name="optionFilter">
                <option value="1">ID diskusi</option>
                <option value="2">NIK</option>
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
                <th>ID Diskusi</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Pertanyaan</th>
                <th>Level</th>
                <th>Proses</th>
                <th>Jawaban Pakar</th>

            </tr>
            </thead>
            <tbody>
            <?php
            $no = 1; ?>
            <?php foreach ( $data['data_chat'] as $pertanyaan ) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $pertanyaan['id_chat'] ?></td>
                <td><?= $pertanyaan['id_user'] ?></td>
                <td><?= $pertanyaan['nama'] ?></td>
                <td><?= $pertanyaan['chat'] ?></td>
                <td><?= $pertanyaan['level'] ?></td>                
                
                <td>
                <?php
                    if($_SESSION['level'] == 'Pakar')
                    {?>
                       <a title="Jawab" href="<?= BASEURL; ?>/obrolan/getUbahP/<?= $pertanyaan['id_chat'] ?>/<?= $pertanyaan['level'] ?>"><img src="<?= BASEURL; ?>/img/balas.png" alt=""  width="19" heigth="19"></a>
                   <?php } elseif(($_SESSION['level'] == 'Pegawai')||($_SESSION['level'] == 'Admin') ){ ?>

                
                    <a title="Ubah Data" href="<?= BASEURL; ?>/obrolan/getUbah/<?= $pertanyaan['id_chat'] ?>/<?= $pertanyaan['level'] ?>"><img src="<?= BASEURL; ?>/img/b-edit.png" alt=""  width="19" heigth="19"></a>
                    <!-- <a title="Hapus Data" href="<?= BASEURL; ?>/obrolan/hapus/<?= $pertanyaan['id_chat'] ?>/<?= $pertanyaan['level'] ?>" onClick="return confirm('Anda Yakin Akan Menghapus ?')"><img src="<?= BASEURL; ?>/img/b-hapus.png" alt=""  width="15" heigth="15"></a> -->
                </td>
                   <?php } ?>

                   <td><?= $pertanyaan['jawab'] ?></td>
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

