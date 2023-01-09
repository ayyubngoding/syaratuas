<?php
class Barang_model
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
    private $db;

    public function __construct()
    {
        $this->db = new Databse();
    }

    public function getAllBarang()
    {
        // . $this->table
        $this->db->query(
            ' SELECT nama_kategori,nama_barang,barang.keterangan, barang.id_barang,kategori_barang.id_kategori_barang FROM kategori_barang join barang on kategori_barang.id_kategori_barang=barang.barang_kategori_id'
        );
        return $this->db->resultSet();
    }

    public function getBarangById($id)
    {
        $this->db->query(' SELECT * FROM barang WHERE id_barang=:id_barang');
        $this->db->bind('id_barang', $id);
        return $this->db->single();
    }

    public function tambahDataBarang($data)
    {
        $query =
            "INSERT INTO barang VALUES('',:nama_barang,:keterangan,:barang_kategori_id)";

        $this->db->query($query);
        $this->db->bind('nama_barang', $data['nama_barang']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('barang_kategori_id', $data['barang_kategori_id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataBarang($id)
    {
        $query = 'DELETE FROM barang WHERE id_barang=:id_barang';
        $this->db->query($query);
        $this->db->bind('id_barang', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ubahDataBarang($data)
    {
        $query = "UPDATE barang set
         nama_barang=:nama_barang,
         keterangan=:keterangan,
         barang_kategori_id=:barang_kategori_id
         WHERE
         id_barang=:id_barang";

        $this->db->query($query);
        $this->db->bind('nama_barang', $data['nama_barang']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('barang_kategori_id', $data['barang_kategori_id']);
        $this->db->bind('id_barang', $data['id_barang']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
