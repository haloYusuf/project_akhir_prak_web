<?php

class Menu extends Controller
{
    private $template = ["css" => "style.css"];
    public function index()
    {
        $this->template["title"] = "Menu";
        $data = $this->model('Menu_model')->showMenu();
        $this->view('template/header', $this->template);
        $this->view('menu/index', $data);
        $this->view('template/footer');
    }

    public function tambahMenu()
    {
        if (isset($_SESSION['access']) && $_SESSION['access'] == 1) {
            $data = $this->model('Menu_model')->getKategori();
            $this->template["title"] = "Tambah Menu";
            $this->view('template/header', $this->template);
            $this->view('menu/formTambahMenu', $data);
            $this->view('template/footer');
        } else {
            header('Location: ' . BASE_URL . '/menu');
        }
    }

    public function processTambah()
    {
        if (isset($_SESSION['access']) && $_SESSION['access'] == 1) {
            $nama = $_POST['namaMenu'];
            $kat = $_POST['katMenu'];
            $harga = $_POST['hargaMenu'];
            $desc = $_POST['descMenu'];
            $link = $_POST['linkGambar'];
            $id = $this->model('Menu_model')->getIdMenu($kat);
            $this->model('Menu_model')->createMenu($id, $kat, $nama, $desc, $harga, $link);

        }
        header('Location: ' . BASE_URL . '/menu');
    }

    public function detail($id)
    {
        if (isset($_SESSION['user'])) {
            $this->template["title"] = "Detail Menu";
            $data = $this->model('Menu_model')->getDetail($id);
            $this->view('template/header', $this->template);
            $this->view('menu/detail', $data);
            $this->view('template/footer');
        } else {
            header('Location: ' . BASE_URL . '/login');
        }
    }
    public function edit($id)
    {
        if (isset($_SESSION['access']) && $_SESSION['access'] == 1) {
            $data = $this->model('Menu_model')->getMenu($id);
            $data['listKeterangan'] = $this->model('Menu_model')->getKategori();
            $this->template["title"] = "Edit Menu";
            $this->view('template/header', $this->template);
            $this->view('menu/formEditMenu', $data);
            $this->view('template/footer');
        } else {
            header('Location: ' . BASE_URL . '/menu');
        }
    }

    public function processEdit()
    {
        if (isset($_SESSION['access']) && $_SESSION['access'] == 1) {
            $nama = $_POST['namaMenu'];
            $kat = $_POST['katMenu'];
            $harga = $_POST['hargaMenu'];
            $desc = $_POST['descMenu'];
            $id = $_POST['idMenu'];
            $link = $_POST['linkGambar'];
            $this->model('Menu_model')->updateMenu($id, $kat, $nama, $desc, $harga, $link);
        }
        header('Location: ' . BASE_URL . '/menu');
    }

    public function delete($id)
    {
        if (isset($_SESSION['access']) && $_SESSION['access'] == 1) {
            $data = $this->model('Menu_model')->deleteItem($id);
        }
        header('Location: ' . BASE_URL . '/menu');
    }

    public function order()
    {
        if (isset($_SESSION['user'])) {
            $id_menu = $_POST['idMenu'];
            $id_user = $_SESSION['user_id'];
            $qty = $_POST['qty'];
            $data = $this->model('Menu_model')->orderMenu($id_user, $id_menu, $qty);
        }
        header('Location: ' . BASE_URL . '/menu');
    }

    public function tambahKat()
    {
        if (isset($_SESSION['access']) && $_SESSION['access'] == 1) {
            $this->template["title"] = "Tambah Kategori";
            $this->view('template/header', $this->template);
            $this->view('menu/formTambahKat');
            $this->view('template/footer');
        } else {
            header('Location: ' . BASE_URL . '/menu');
        }
    }

    public function processTambahKat()
    {
        if (isset($_SESSION['access']) && $_SESSION['access'] == 1) {
            $nama = $_POST['namaKat'];
            $this->model('Menu_model')->createKat($nama);

        }
        header('Location: ' . BASE_URL . '/menu');
    }

    public function editKat($id)
    {
        if (isset($_SESSION['access']) && $_SESSION['access'] == 1) {
            $data = $this->model('Menu_model')->showKat($id);
            $this->template["title"] = "Edit Kategori";
            $this->view('template/header', $this->template);
            $this->view('menu/formEditKat', $data);
            $this->view('template/footer');
        } else {
            header('Location: ' . BASE_URL . '/menu');
        }
    }

    public function processEditKat()
    {
        if (isset($_SESSION['access']) && $_SESSION['access'] == 1) {
            $nama = $_POST['namaKat'];
            $id = $_POST['idKat'];
            $this->model('Menu_model')->editKategori($id, $nama);
        }
        header('Location: ' . BASE_URL . '/menu');
    }

    public function deleteKat($id)
    {
        if (isset($_SESSION['access']) && $_SESSION['access'] == 1) {
            $data = $this->model('Menu_model')->deleteKategori($id);
        }
        header('Location: ' . BASE_URL . '/menu');
    }
}