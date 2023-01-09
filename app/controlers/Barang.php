<?php

class Barang extends Controller
{
    public function index()
    {
        $data['judul'] = 'barang';
        $data['barang'] = $this->model('barang_model')->getAllBarang();
        $data['kategori'] = $this->model('kategori_model')->getAllKategori();
        $this->view('templates/header', $data);
        $this->view('barang/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Barang_model')->tambahDataBarang($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location:' . BASEURL . '/barang');
            exit();
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location:' . BASEURL . '/barang');
            exit();
        }
    }

    public function hapus($id)
    {
        if ($this->model('Barang_model')->hapusDataBarang($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location:' . BASEURL . '/barang');
            exit();
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location:' . BASEURL . '/barang');
            exit();
        }
    }
    public function getubah()
    {
        echo json_encode(
            $this->model('Barang_model')->getBarangById($_POST['id_barang'])
        );
    }
    public function ubah()
    {
        if ($this->model('Barang_model')->ubahDataBarang($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location:' . BASEURL . '/barang');
            exit();
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location:' . BASEURL . '/barang');
            exit();
        }
    }
}

?>
