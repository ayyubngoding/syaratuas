$(function () {
  $('.tombolTambahData').on('click', function () {
    $('#formModalLabel').html('Tamabh Data');
    $('.modal-footer button[type=submit]').html('Tambah Data');
    $('#nama_kategori').val('');
  });

  $('.tampilModalUbahKategori').on('click', function () {
    $('#formModalLabel').html('Ubah Data');
    $('.modal-footer button[type=submit]').html('Ubah Data');
    $('.modal-body form').attr('action', 'http://localhost/syaratuasmvc/public/kategori/ubah');

    const id = $(this).data('id');

    $.ajax({
      url: 'http://localhost/syaratuasmvc/public/kategori/getubah',
      data: { id_kategori: id },
      method: 'post',
      dataType: 'json',
      success: function (data) {
        $('#nama_kategori').val(data.nama_kategori);
        $('#id_kategori').val(data.id_kategori_barang);
      },
    });
  });
});
