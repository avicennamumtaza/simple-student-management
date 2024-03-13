<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $mhs['nama'] ?>
                        <a href="<?=BASEURL;?>/MhsController/detail/<?=$mhs['nim']?>" class="badge text-bg-primary">
                            detail
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <br>
            <table>
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Prodi</th>
                    <th>Jurusan</th>
                </tr>
                <?php foreach ($data['mhs'] as $mhs) : ?>
                <tr>
                    <td><?=$mhs['nama']?></td>
                    <td><?=$mhs['nim']?></td>
                    <td><?=$mhs['prodi']?></td>
                    <td><?=$mhs['jurusan']?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>