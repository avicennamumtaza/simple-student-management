<div class="container mt-5">
    <div class="card" style="width: 18rem;">
    <div class="card-header">
        <h5><?= $data['mhs']['nim'] ?></h5>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Name
            <h5><?= $data['mhs']['nama'] ?></h5>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Prodi
            <h5><?= $data['mhs']['prodi'] ?></h5>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Jurusan
            <h5><?= $data['mhs']['jurusan'] ?></h5>
        </li>
    </ul>
    </div>
    <br>
    <a href="<?=BASEURL;?>/MhsController/" class="btn btn-primary">Kembali</a>
</div>