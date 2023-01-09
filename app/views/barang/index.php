<?php
$no = 1; ?>
<div class="container mt-5">
<div class="col-lg-6">
      <?= Flasher::flash() ?>
    </div>
<button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
  tambah data
</button>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Nama Kategori</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data['barang'] as $barang): ?>
    <tr>
      <th scope="row"><?= $no ?></th>
      <td><?= $barang['nama_barang'] ?></td>
      <td><?= $barang['keterangan'] ?></td>
      <td><?= $barang['nama_kategori'] ?></td>
      <td>

      <a href="<?= BASEURL ?>/barang/hapus/<?= $barang[
    'id_barang'
] ?>" class="badge badge-danger  " onclick="return confirm('yakin Hapus data?')">Hapus</a>

  <a href="" class="badge badge-success   tampilModalUbah " data-toggle="modal" data-target="#formModal" data-id="<?= $barang[
      'id_barang'
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
    <form action="<?= BASEURL ?>/barang/tambah" method="post">
    <input type="hidden" name="id_barang" id="id_barang">

      <div class="form-group">
        <label for="nama_barang">Nama_barang</label>
        <input type="text" class="form-control" id="nama_barang" name="nama_barang">
    </div>
      <div class="form-group">
        <label for="keterangan">keterangan</label>
        <input type="text" class="form-control" id="keterangan" name="keterangan"> 
    </div>
    <div class="form-group">
    <label for="barang_kategori_id">barang_kategori_id</label>
    <select class="form-control" id="barang_kategori_id" name="barang_kategori_id">
      <option >Pilih</option>
    <?php foreach ($data['kategori'] as $kategori): ?>
    <option value="<?= $kategori['id_kategori_barang'] ?>"><?= $kategori[
    'nama_kategori'
] ?></option>
    <?php endforeach; ?>
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