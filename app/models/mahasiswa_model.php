<?php
class Mahasiswa_model
{
    // private $mhs = [
    //     [
    //         'nama' => 'ayyub',
    //         'npm' => '0878263674636',
    //         'email' => 'ayyub@gmail.com',
    //         'jurusan' => 'Teknik',
    //     ],
    // ];

    // dbh databse handler
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Databse();
    }

    public function getAllMahasiswa()
    {
        // . $this->table
        $this->db->query(' SELECT * FROM mahasiswa ');
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query(
            ' SELECT * FROM mahasiswa WHERE id_mahasiswa=:id_mahasiswa'
        );
        $this->db->bind('id_mahasiswa', $id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data)
    {
        $query = "INSERT INTO mahasiswa VALUES('',:nama,:npm,:email,:jurusan)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('npm', $data['npm']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMahasiswa($id)
    {
        $query = 'DELETE FROM mahasiswa WHERE id_mahasiswa=:id';
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ubahDataMahasiswa($data)
    {
        $query = "UPDATE mahasiswa set
         nama=:nama,
         npm=:npm,
         email=:email,
         jurusan=:jurusan
         WHERE
         id_mahasiswa=:id_mahasiswa";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('npm', $data['npm']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('id_mahasiswa', $data['id_mhs']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
