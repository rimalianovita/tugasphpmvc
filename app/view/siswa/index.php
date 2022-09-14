    <div class="container mt-3">
        <div class="row">
            <div class="col-6">
                <?php Flasher::flash(); ?>

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Tambah Data Siswa
                </button>
                
                <h3 class="mt-4">DATA SISWA</h3>
                <ul class="list-group">
                <?php foreach ($data['siswa'] as $siswa) : ?>
                    <li class="list-group-item d-flex justify-content-between">
                        <?=$siswa['nama']; ?>
                        <div>
                        <a href="<?=BASE_URL;?>/siswa/detail/<?= $siswa['id']?>"class="btn btn-primary">detail</a>
                        <a href="<?=BASE_URL;?>/siswa/ubah/<?= $siswa['id']?>"class="btn btn-success" data-toggle="#formModal" data-id="<?= $siswa['id']; ?>">ubah</a>
                        <a href="<?=BASE_URL;?>/siswa/hapus/<?= $siswa['id']?>"class="btn btn-danger" onclick="return confirm('yakin?');">hapus</a>
                    </div>
                    </li>    
                <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modaltitle" id="exampleModalLabel">Tambah Data Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="<?= BASE_URL; ?>/Siswa/tambah" method="post">
                <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat">
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
        </div>
    </div>