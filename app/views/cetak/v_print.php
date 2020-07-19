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
    margin-top: 0px;
    font-size: 12px;
    font-weight: normal;
    border-collapse: collapse;
    width: 80%;
    max-width: 100%;
    white-space: nowrap;
    height: 30px;
    word-wrap: break-word;
    border: 1px solid #000000;
    text-align: left;

}

.fl-table td, .fl-table th {
    text-align: left;
    padding: 30px;
    width: 120px;
    padding-top: 5px;
    word-wrap: break-word;
}
.side-form{
  max-width: 100%;
  padding: 10px 8px 10px 20px;
  font: 13px Raleway, sans-serif;
  position: absolute;
}
.judul{
    position: fixed;
    margin-top: 8px ;
    margin-left: 200px;
    float: right;
    margin-right: 40px;
}
.judul-1{
    position: absolute;
    margin-top: 8px ;
    margin-left: 210px;
    float: right;
    margin-right: 40px;
}

</style>
<page [size="A4"] [layout="landscape"]>
    <div style="judul-1" >
        <img src="<?= BASEURL;?>/img/dntikms.png" alt="" width="200" heigth="200" alt="">
       
    </div>
        <div class="judul">
        <h3> KMS PERAWATAN ALAT UKUR</h3> 
        </div>
    
    <div class="side-form">
    <div class="table-wrapper">
    <table id="myTable" class="fl-table">
            <thead>
            <tr>  <th>No</th><td><?= 1 ?></td><br> </tr> <br>
            <tr>  <th>Id Perawatan Alat</th> <td><?=$data['cetak_data']['id_perawatan_alat'] ?></td></tr> <br>
            <tr>  <th>Nama Alat</th> <td><?=$data['cetak_data']['nm_alat'] ?></td> <tr> <br>
            <tr>  <th>Fungsi Alat</th> <td><?=$data['cetak_data']['fungsi'] ?></td>  </tr><br>
            <tr>  <th>Penggunaan Alat</th> <td><?=$data['cetak_data']['penggunaan_alat'] ?></td>  </tr><br>
            <tr>  <th>Perawatan Alat Tacit</th> <td><?=$data['cetak_data']['perawatan_alat_tacit'] ?></td></tr> <br>
            <tr>  <th>Perawatan Alat Eksplisit</th>  <td><?=$data['cetak_data']['perawatan_alat_eks'] ?></td> <tr> <br>
            <tr>  <th>Satuan Alat</th>  <td><?=$data['cetak_data']['satuan'] ?></td>  </tr><br>
     
            </thead>
  
            <tbody>
         
            
            
            <?php  ?>
            <tbody>
        </table>
        <br>
        <br>
        <br>
        <p>&emsp; &nbsp; &nbsp; &nbsp; &nbsp; KMS Perawatan Alat Ukur</p>
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
