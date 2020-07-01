<style>
body {
  background: rgb(204,204,204); 
}
page {
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}
page[size="A4"] {  
  width: 21cm;
  height: 29.7cm; 
}
page[size="A4"][layout="landscape"] {
  width: 29.7cm;
  height: 21cm;  
}
page[size="A3"] {
  width: 29.7cm;
  height: 42cm;
}
page[size="A3"][layout="landscape"] {
  width: 42cm;
  height: 29.7cm;  
}
page[size="A5"] {
  width: 14.8cm;
  height: 21cm;
}
page[size="A5"][layout="landscape"] {
  width: 21cm;
  height: 14.8cm;  
}
@media print {
  body, page {
    margin: 0;
    box-shadow: 0;
  }
}
</style>
<page size="A4">
    <!-- <div style="float: right;">
        <img src="<?= BASEURL;?>/img/logo-ta.png" alt="" width="200" heigth="200" alt="">
    </div> -->
    <div>
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
        <br>
        <br>
        <br>
        <p>KMS Perawatan Alat Ukur</p>
        <br>
        <br>
        <br>
        <p>PT DNTI</p>
        <p>KARAWANG </p>
    </div>
    </div>
    </page>
<script>
		window.print();
</script>
