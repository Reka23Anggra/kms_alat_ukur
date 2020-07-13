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
.fl-table {
    border-radius: 5px;
    margin-top: 10px;
    font-size: 14px;
    font-weight: normal;
    border-collapse: collapse;
    width: 60%;
    max-width: 100%;
    white-space: nowrap;
    height: 60px;
    /* background-color: #9bd2da; */
    word-wrap: break-word;
    border: 1px solid #000000;

}

.fl-table td, .fl-table th {
    text-align: center;
    padding: 8px;
    width: 60px;
    word-wrap: break-word;
}
.side-form{
  max-width: 50%;
  padding: 20px 12px 10px 20px;
	font: 13px Raleway, sans-serif;
}
.judul{
    margin-top: 25px;
    float: center;
}

</style>
<page size="A4" layout="landscape">
    <div style="float: left">
        <img src="<?= BASEURL;?>/img/dntikms.png" alt="" width="200" heigth="200" alt="">
        <h3 class="judul"> KMS PERAWATAN ALAT UKUR</h3> 
    </div>
    
    <div class="side-form">
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
            
            </tr>
           
            <tr>
                <td><?= 1 ?></td>
                <td><?=$data['cetak_data']['id_perawatan_alat'] ?></td>
                <td><?=$data['cetak_data']['nm_alat'] ?></td>
                <td><?=$data['cetak_data']['id_tacit'] ?></td>
                <td><?=$data['cetak_data']['id_eksplisit'] ?></td>
                <td><?=$data['cetak_data']['fungsi'] ?></td>
            </tr><br>
            </thead>
     <table id="myTable" class="fl-table">
            <thead>       
            <tr>
                <th>Penggunaan Alat</th>
                <th>Perawatan Alat Tacit</th>
                <th>Perawatan Alat Eksplisit</th>
                <th>Satuan Alat</th>
                
            </tr>

            <tr>
                <td><?=$data['cetak_data']['penggunaan_alat'] ?></td>
                <td><?=$data['cetak_data']['perawatan_alat_tacit'] ?></td>
                <td><?=$data['cetak_data']['perawatan_alat_eks'] ?></td>
                <td><?=$data['cetak_data']['satuan'] ?></td>
            </tr>
            </thead>
            <tbody>
         
            
            
            <?php  ?>
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
