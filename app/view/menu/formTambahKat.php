<div class="wrapper" style="align-items: stretch; padding-left: 20%; padding-right: 20%;">
    <h2 class="mb-5" style="text-align: center;margin-top: 50px;">
        FORM INPUT KATEGORI
    </h2>
    <form action="<?= BASE_URL; ?>/menu/processTambahKat" method="post">
        <div class="mb-1">
            <label for="exampleFormControlInput1" class="form-label">NamaKategori</label>
            <input type="text" class="form-control" name="namaKat" id="exampleFormControlInput1"
                placeholder="Masukkan Nama Kategori" autocomplete="off" required>
        </div>
        <button type="submit" class="btn btn-success" style="margin-bottom: 10px;">TAMBAH KATEGORI</button>
    </form>
</div>