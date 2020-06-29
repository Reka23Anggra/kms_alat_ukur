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
            <a href="<?= BASEURL; ?>/Cetak/getData">Cetak Perawatan</a>
            <!-- <select id="optionFilter"" name="optionFilter">
                <option value="1">NIK</option>
                <option value="2">Nama Karyawan</option>
            </select>
            <input type="text" id="myInput" onkeyup="cari()" placeholder="Masukan Pencarian" title="Ketik disini"> -->
        </form>    
    </div>
    <div class="table-wrapper">
        <table id="myTable" class="fl-table">
            <thead>
            <tr>
                <th>No</th>
                <th>Id Perawatan Alat</th>
                <th>Nama Alat</th>
                <th>Id Tacit</th>
                <th>Id Eksplisit</th>
                <th>Fungsi Alat</th>
                <th>Penggunaan Alat</th>
                <th>Perawatan Alat Tacit</th>
                <th>Perawatan Alat Eksplisit</th>
                <th>Satuan Alat</th>
                
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
                <td><?= $print['id_tacit'] ?></td>
                <td><?= $print['id_eksplisit'] ?></td>
                <td><?= $print['fungsi'] ?></td>
                <td><?= $print['penggunaan_alat'] ?></td>
                <td><?= $print['perawatan_alat_tacit'] ?></td>
                <td><?= $print['perawatan_alat_eks'] ?></td>
                <td><?= $print['satuan'] ?></td>
            </tr>
            <?php endforeach; ?>
            <tbody>
        </table>
    </div>
