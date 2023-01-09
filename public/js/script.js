$(function () {
  $('.tombolTambahData').on('click', function () {
    $('#formModalLabel').html('Tamabh Data');
    $('.modal-footer button[type=submit]').html('Tambah Data');
    $('#nama').val('');
    $('#npm').val('');
    $('#email').val('');
    $('#jurusan').val('');
  });

  $('.tampilModalUbah').on('click', function () {
    $('#formModalLabel').html('Ubah Data');
    $('.modal-footer button[type=submit]').html('Ubah Data');
    $('.modal-body form').attr('action', 'http://localhost/syaratuasmvc/public/barang/ubah');

    const id = $(this).data('id');

    $.ajax({
      url: 'http://localhost/syaratuasmvc/public/barang/getubah',
      data: { id_barang: id },
      method: 'post',
      dataType: 'json',
      success: function (data) {
        $('#nama_barang').val(data.nama_barang);
        $('#keterangan').val(data.keterangan);
        $('#barang_kategori_id').val(data.barang_kategori_id);
        $('#id_barang').val(data.id_barang);
      },
    });
  });
});
