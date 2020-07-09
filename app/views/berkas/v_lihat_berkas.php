<div class="judul">
    <h4><?= $data['judul'] ?></h4>
</div>
<div class="head-table">
    <h4><a href="<?= BASEURL; ?>/Berkas/getDetil/<?= $data['data_berkas']['id_modul'] ?>"><?= $data['data_berkas']['modul'] ?></a></h4>
</div>
<div class="data-table">
    
    <embed src="app/berkas/<?= $data['data_berkas']['modul'] ?>.pdf" type="application/pdf" width="100%" height="650px" />
    
</div>