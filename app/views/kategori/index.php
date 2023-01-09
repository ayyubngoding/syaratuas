<?php
$no = 1; ?>
<div class="container mt-2">
<?= Flasher::flash() ?>
<button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
  tambah data
</button>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama_kategori</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($data['kategori'] as $kategori): ?>
    <tr>
      <td><?= $no ?></td>
      <td><?= $kategori['nama_kategori'] ?></td>
      <td>

      <a href="<?= BASEURL ?>/kategori/hapus/<?= $kategori[
    'id_kategori_barang'
] ?>" class="badge badge-danger  " onclick="return confirm('yakin Hapus data?')">Hapus</a>

  <a href="" class="tampilModalUbahKategori badge badge-success" data-toggle="modal" data-target="#formModal" data-id="<?= $kategori[
      'id_kategori_barang'
  ] ?>">Ubah
</a>

      </td>
    </tr>
    <?php $no++; ?>
    <?php endforeach; ?>
  </tbody>
</table>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <form action="<?= BASEURL ?>/kategori/tambah" method="post">
    <input type="hidden" name="id_kategori" id="id_kategori">

      <div class="form-group">
        <label for="nama_kategori">nama_kategori</label>
        <input type="text" class="form-control" id="nama_kategori" name="nama_kategori">
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