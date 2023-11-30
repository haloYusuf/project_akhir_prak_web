<div class="wrapper" style="align-items: stretch; padding-left: 20%; padding-right: 20%;">
    <h2 class="mb-5" style="text-align: center;margin-top: 50px;">
        FORM EDIT MENU
    </h2>
    <form action="<?= BASE_URL; ?>/menu/processEdit" method="post">
        <div class="mb-1">
            <label for="exampleFormControlInput1" class="form-label">Nama Menu</label>
            <input type="text" class="form-control" name="namaMenu" id="exampleFormControlInput1"
                placeholder="Masukkan Nama Menu" value="<?= $data['nama_menu']; ?>" required>

            <input type="hidden" class="form-control" name="idMenu" placeholder="Masukkan Nama Menu"
                value="<?= $data['id_menu']; ?>"  autocomplete="off" required>
        </div>
        <div class="mb-4">
            <label for="exampleFormControlTextarea4" class="form-label">Deskripsi Menu</label>
            <textarea class="form-control" name="descMenu" id="exampleFormControlTextarea4" rows="3"
                required><?= $data['desc_menu']; ?></textarea>
        </div>
        <div class="mb-1">
            <label for="exampleFormControlInput2" class="form-label">Kategori</label>
            <select id="exampleFormControlInput2" name="katMenu" class="form-select" required>
                <option disabled>Pilih Kategori</option>
                <?php
                foreach ($data['listKeterangan'] as $v) {
                    ?>
                    <option value="<?= $v[0]; ?>" <?php if ($v[0] == $data['id_kat']) {
                          echo 'selected';
                      } ?>>
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
                placeholder="Masukkan Harga" min="1" value="<?= $data['harga']; ?>" required>
        </div>
        <div class="mb-1">
            <label for="exampleFormControlInput4" class="form-label">Link Gambar</label>
            <input type="text" class="form-control" name="linkGambar" id="exampleFormControlInput4"
                placeholder="Masukkan Link Gambar" value="<?= $data['link_gambar']; ?>" autocomplete="off" required>
        </div>
        <button type="submit" class="btn btn-success" style="margin-bottom: 10px;">EDIT DATA</button>
    </form>
</div>