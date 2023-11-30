<div class="wrapper" style="align-items: stretch; padding-left: 20%; padding-right: 20%;">
    <h2 class="mb-5" style="text-align: center;margin-top: 50px;">
        FORM INPUT MENU
    </h2>
    <form action="<?= BASE_URL; ?>/menu/processTambah" method="post">
        <div class="mb-1">
            <label for="exampleFormControlInput1" class="form-label">Nama Menu</label>
            <input type="text" class="form-control" name="namaMenu" id="exampleFormControlInput1"
                placeholder="Masukkan Nama Menu" autocomplete="off" required>
        </div>
        <div class="mb-4">
            <label for="exampleFormControlTextarea4" class="form-label">Deskripsi Menu</label>
            <textarea class="form-control" name="descMenu" id="exampleFormControlTextarea4" rows="3"
                required></textarea>
        </div>
        <div class="mb-1">
            <label for="exampleFormControlInput2" class="form-label">Kategori</label>
            <select id="exampleFormControlInput2" name="katMenu" class="form-select" required>
                <option disabled>Pilih Kategori</option>
                <?php
                foreach ($data as $v) {
                    ?>
                    <option value="<?= $v[0]; ?>">
                        <?= $v[1]; ?>
                    </option>
                    <?php
                }
                ?>
            </select>
        </div>
        <div class="mb-1">
            <label for="exampleFormControlInput3" class="form-label">Harga Satuan (Rp.)</label>
            <input type="number" class="form-control" name="hargaMenu" id="exampleFormControlInput3"
                placeholder="Masukkan Harga" min="1" required>
        </div>
        <div class="mb-1">
            <label for="exampleFormControlInput4" class="form-label">Link Gambar</label>
            <input type="text" class="form-control" name="linkGambar" id="exampleFormControlInput4"
                placeholder="Masukkan Link Gambar" autocomplete="off" required>
        </div>
        <button type="submit" class="btn btn-success" style="margin-bottom: 10px;">TAMBAH DATA</button>
    </form>
</div>