<?php

class Order_model
{
    private $tPemesanan = 'pemesanan';
    private $tAkun = 'akun';
    private $tMenu = 'menu';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPemesanan()
    {
        $query = $this->db->runQuery(
            "SELECT pm.id_pemesanan, ac.acc_email, mn.nama_menu, DATE_FORMAT(pm.tgl_pemesanan, '%d %M %Y') as tgl_pemesanan, pm.qty_pemesanan, pm.qty_pemesanan * mn.harga as totalHarga, pm.status_pemesanan FROM " .
            "$this->tPemesanan pm, $this->tAkun ac, $this->tMenu mn WHERE " .
            "ac.id_acc = pm.id_acc && mn.id_menu = pm.id_menu"
        );

        $data = [];
        $i = 0;
        while ($v = mysqli_fetch_array($query)) {
            $data[$i] = $v;
            $i++;
        }
        return $data;
    }

    public function getHistoryPemesanan($id)
    {
        $query = $this->db->runQuery(
            "SELECT pm.id_pemesanan, ac.acc_email, mn.nama_menu, DATE_FORMAT(pm.tgl_pemesanan, '%d %M %Y') as tgl_pemesanan, pm.qty_pemesanan, pm.qty_pemesanan * mn.harga as totalHarga, pm.status_pemesanan FROM " .
            "$this->tPemesanan pm, $this->tAkun ac, $this->tMenu mn WHERE " .
            "ac.id_acc = pm.id_acc && mn.id_menu = pm.id_menu && pm.id_acc = $id"
        );

        $data = [];
        $i = 0;
        while ($v = mysqli_fetch_array($query)) {
            $data[$i] = $v;
            $i++;
        }
        return $data;
    }

    public function confirmPemesanan($id)
    {
        $this->db->runQuery("UPDATE $this->tPemesanan set status_pemesanan = 1 WHERE id_pemesanan = '$id'");
    }

    public function cancelPemesanan($id)
    {
        $this->db->runQuery("UPDATE $this->tPemesanan set status_pemesanan = -1 WHERE id_pemesanan = '$id'");
    }

}