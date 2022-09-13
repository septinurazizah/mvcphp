<body>
  <div class="container mt-4">
    <div class="row">
      <div class="card-body">
        <div class="col-md-6">
          <table class="table">
            <?php Flasher::flash(); ?>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Data Siswa</button>

            <div class="card-body">
              <h3 class="mt-4">DATA SISWA</h3>
              <div class="input-group">
                <form action="<?= BASE_URL; ?>/siswa/cari" method="post">
                  <input type="text" class="form-control" placeholder="cari siswa..." name="keyword" id="keyword" autocomplete="off">
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                </form>
              </div>
            </div>

            <thead>
              <tr>
                <th scope="col">NAMA SISWA</th>
                <th scope="col">JURUSAN</th>
                <th scope="col">DETAIL</th>
              </tr>
            </thead>
            <br>
            <tbody>
              <tr>
                <td> <?php foreach ($data['siswa'] as $siswa) : ?>
                    <hr>
                    <li class="list-group-item list-group-item d-flex justify-content-between align-items-center">
                      <?= $siswa['nama']; ?>
                    </li>
                    <hr>
                  <?php endforeach; ?>
                </td>


                <td> <?php foreach ($data['siswa'] as $siswa) : ?>
                    <hr>
                    <li class="list-group-item list-group-item d-flex justify-content-between align-items-center">
                      <?= $siswa['jurusan']; ?>
                    </li>
                    <hr>
                  <?php endforeach; ?>
                </td>

                <td>

                  <?php foreach ($data['siswa'] as $siswa) : ?>
                    <hr>
                    <li class="list-group-item list-group-item d-flex justify-content-between align-items-center"><a href="<?= BASE_URL; ?>/siswa/detail/<?= $siswa['id']; ?>" class="btn btn-primary float-right float-right ml-1">Lihat</a>
                      <a href="<?= BASE_URL; ?>/siswa/hapus/<?= $siswa['id']; ?>" class="btn btn-danger float-right ml-1" onclick="return confirm('yakin?');">Hapus</a>
                      <a href="<?= BASE_URL; ?>/siswa/ubah/<?= $siswa['id']; ?>" class="btn btn-success float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $siswa['id']; ?>">Ubah</a>
                      <input type="hidden" name="id" id="id">
                      <hr>
                    </li>
                  <?php endforeach; ?>
                </td>
              </tr>
        </div>

      </div>
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Isi Data Siswa</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="<?= BASE_URL; ?>/siswa/tambah" method="post">
            <div class="modal-body">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
              </div>
              <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan">
              </div>
              <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                  <option value="lakilaki">Laki - laki</option>
                  <option value="perempuan">Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>

        </div>
      </div>
    </div>
</body>