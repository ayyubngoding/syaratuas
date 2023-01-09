<?php
class Kategori_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Databse();
    }

    public function getAllKategori()
    {
        // . $this->table
        $this->db->query(' SELECT * from kategori_barang');
        return $this->db->resultSet();
    }

    public function getKategoriById($id)
    {
        $this->db->query(
            ' SELECT * FROM kategori_barang WHERE id_kategori_barang=:id_kategori_barang'
        );
        $this->db->bind('id_kategori_barang', $id);
        return $this->db->single();
    }

    public function tambahDataKategori($data)
    {
        $query = "INSERT INTO kategori_barang VALUES('',:nama_kategori)";

        $this->db->query($query);
        $this->db->bind('nama_kategori', $data['nama_kategori']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataKategori($id)
    {
        $query =
            'DELETE FROM kategori_barang WHERE id_kategori_barang=:id_kategori_barang';
        $this->db->query($query);
        $this->db->bind('id_kategori_barang', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ubahDataKategori($data)
    {
        $query = "UPDATE kategori_barang set
         nama_kategori=:nama_kategori
         WHERE
         id_kategori_barang=:id_kategori_barang";

        $this->db->query($query);
        $this->db->bind('nama_kategori', $data['nama_kategori']);
        $this->db->bind('id_kategori_barang', $data['id_kategori']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
