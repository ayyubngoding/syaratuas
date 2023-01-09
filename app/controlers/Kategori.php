<?php

class Kategori extends Controller
{
    public function index()
    {
        $data['judul'] = 'Kategori';
        $data['kategori'] = $this->model('kategori_model')->getAllKategori();
        $this->view('templates/header', $data);
        $this->view('kategori/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('kategori_model')->tambahDataKategori($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location:' . BASEURL . '/kategori');
            exit();
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location:' . BASEURL . '/kategori');
            exit();
        }
    }

    public function hapus($id)
    {
        if ($this->model('Kategori_model')->hapusDataKategori($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location:' . BASEURL . '/kategori');
            exit();
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location:' . BASEURL . '/kategori');
            exit();
        }
    }
    public function getubah()
    {
        echo json_encode(
            $this->model('kategori_model')->getKategoriById(
                $_POST['id_kategori']
            )
        );
    }
    public function ubah()
    {
        if ($this->model('kategori_model')->ubahDataKategori($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location:' . BASEURL . '/kategori');
            exit();
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location:' . BASEURL . '/kategori');
            exit();
        }
    }
}

?>
