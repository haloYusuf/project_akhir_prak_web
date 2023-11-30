<?php

class Menu_model
{
    private $tMenu = 'menu';
    private $tKat = 'kategori';
    private $tOrder = 'pemesanan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getKategori()
    {
        $data = $this->db->runQuery("SELECT * FROM $this->tKat");
        $data = mysqli_fetch_all($data);
        return $data;
    }

    public function showMenu()
    {
        $data = $this->getKategori();
        $i = 0;
        foreach ($data as $s) {
            $val = mysqli_fetch_all($this->db->runQuery("SELECT * FROM $this->tMenu where id_kat = " . $s[0]));
            $data[$i][3] = $val;
            $i++;
        }
        return $data;
    }

    public function getMenu($id)
    {
        $data = $this->db->runQuery("SELECT * FROM $this->tMenu WHERE id_menu=$id");
        $data = mysqli_fetch_array($data);
        return $data;
    }

    public function getDetail($id)
    {
        $data = $this->getMenu($id);
        $data1 = $this->db->runQuery("SELECT * FROM $this->tKat WHERE id_kat=" . $data['id_kat']);
        $data['kat'] = mysqli_fetch_array($data1)['nama_kat'];
        return $data;
    }

    public function getIdMenu($kat)
    {
        $data = $this->db->runQuery("SELECT MAX(id_menu) as id FROM $this->tMenu WHERE id_kat=$kat");
        $data = mysqli_fetch_array($data);
        $data['id']++;
        if ($data['id'] == 1) {
            return $kat . '001';
        } else {
            return $data['id'];
        }
    }

    public function createMenu($id, $kat, $name, $desc, $price, $link)
    {
        $this->db->runQuery("INSERT INTO $this->tMenu (id_menu, id_kat, nama_menu, desc_menu, harga, link_gambar) VALUES"
            . "($id, $kat, '$name', '$desc', $price, '$link')");
    }

    public function updateMenu($id, $kat, $name, $desc, $price, $link)
    {
        $this->db->runQuery("UPDATE $this->tMenu SET id_kat=$kat, nama_menu='$name', desc_menu='$desc', harga=$price, link_gambar='$link' "
            . "WHERE id_menu=$id");
    }

    public function deleteItem($id)
    {
        $this->db->runQuery("DELETE FROM $this->tMenu WHERE id_menu=$id");
        $this->db->runQuery("DELETE FROM $this->tOrder WHERE id_menu=$id");
    }

    public function orderMenu($idAcc, $idMenu, $qty)
    {
        date_default_timezone_set("Asia/Jakarta");
        $generateID = $idAcc . "_" . date("ymD_His");
        $this->db->runQuery("INSERT INTO $this->tOrder (id_pemesanan, id_acc, id_menu, tgl_pemesanan, qty_pemesanan, status_pemesanan) VALUES"
            . "('$generateID', $idAcc, $idMenu, NOW(), $qty, 0)");
    }

    public function createKat($nama)
    {
        $this->db->runQuery("INSERT INTO $this->tKat (nama_kat) VALUES"
            . "('$nama')");
    }

    public function showKat($id)
    {
        $data = $this->db->runQuery("SELECT * FROM $this->tKat WHERE "
            . "id_kat = $id");
        return mysqli_fetch_array($data);
    }

    public function editKategori($id, $nama)
    {
        $this->db->runQuery("UPDATE $this->tKat SET nama_kat = '$nama' WHERE "
            . "id_kat = $id");
    }

    public function getMenuByKet($id)
    {
        $query = $this->db->runQuery("SELECT id_menu FROM $this->tMenu WHERE id_kat = $id");
        $data = [];
        $i = 0;
        while ($v = mysqli_fetch_array($query)) {
            $data[$i] = $v;
            $i++;
        }
        return $data;
    }

    public function deleteKategori($id)
    {
        $this->db->runQuery("DELETE FROM $this->tMenu WHERE id_kat=$id");
        $this->db->runQuery("DELETE FROM $this->tKat WHERE id_kat=$id");
        foreach ($this->getMenuByKet($id) as $data) {
            $this->db->runQuery("DELETE FROM $this->tOrder WHERE id_menu=" . $data['id_menu']);
        }
    }
}