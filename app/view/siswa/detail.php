<div class="container mt-5">
    <div class="card col-md-6">
        <div class="card-body">
            <h4 class="card-title">Nama : <?= $data['siswa']['nama']; ?></h5>
                <h6 class="card-text">Jurusan : <?= $data['siswa']['jurusan']; ?></h6>
                <h6 class="card-subtitle mb-2 text-muted">Jenis Kelamin : <?= $data['siswa']['jenis_kelamin']; ?></h6>
                <h6 class="card-text">Alamat : <?= $data['siswa']['alamat']; ?></h6>
                <!-- <a href="<?= BASE_URL; ?>/siswa/hapus/<?= $siswa['id']; ?>" class="btn btn-dark float-right" onclick="returnconfirm('yakin?');">Hapus</a>
            <a href="<?= BASE_URL; ?>/siswa/ubah/<?= $siswa['id']; ?>"class="btn btn-success float-right tampilModalUbah" data-toggle="modal"data-target="#formModal" data-id="<?= $siswa['id']; ?>">Ubah</a>
                <input type="hidden" name="id" id="id"> -->
                <a href=" <?= BASE_URL; ?>/siswa" class="btn btn-danger card-link">Kembali</a>
        </div>
    </div>
</div>