<?php
class About extends Controller
{
    public function index($nama = 'ayyub', $pekerjaan = 'dosen', $umur = '21')
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $judul['judul'] = 'About';
        $this->view('templates/header', $judul);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        $this->view('templates/header');
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
