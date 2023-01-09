<div class="container mt-5">
  <div class="row">
    <div class="col-lg-6">
      <?= Flasher::flash() ?>
    </div>
  </div>
    <div class="row">
        <div class="col-6">
        <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
  tambah data
</button>
            <h3>daftar mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs): ?>
                <li class="list-group-item"><?= $mhs['nama'] ?>
                <a href="<?= BASEURL ?>/mahasiswa/hapus/<?= $mhs[
    'id_mahasiswa'
] ?>" class="badge badge-danger  float-right" onclick="return confirm('yakin Hapus data?')">Hapus</a>

  <a href="" class="badge badge-success  float-right tampilModalUbah " data-toggle="modal" data-target="#formModal" data-id="<?= $mhs[
      'id_mahasiswa'
  ] ?>">Ubah
</a>

                 <a href="<?= BASEURL ?>/mahasiswa/detail/<?= $mhs[
    'id_mahasiswa'
] ?>" class="badge badge-primary  float-right">Detail</a>

            </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Mhs</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <form action="<?= BASEURL ?>/mahasiswa/tambah" method="post">
    <input type="hidden" name="id_mhs" id="id">

      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama">
    </div>
      <div class="form-group">
        <label for="npm">npm</label>
        <input type="text" class="form-control" id="npm" name="npm"> 
    </div>
      <div class="form-group">
        <label for="email">email</label>
        <input type="text" class="form-control" id="email" name="email">
    </div>
    <div class="form-group">
    <label for="jurusan">Jurusan</label>
    <select class="form-control" id="jurusan" name="jurusan">
      <option value="Teknik Informatika">Teknik Informatika</option>
      <option value="Teknik Sipil">Teknik Sipil</option>
      
    </select>
  </div>
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit" class="submit">Save s</button>
    </form>
      </div>
    </div>
  </div>
</div>

