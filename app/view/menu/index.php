<div class="menu">
    <?php
    if (isset($_SESSION['access']) && $_SESSION['access'] == 1) {
        ?>
        <button onclick="location.href='<?= BASE_URL; ?>/menu/tambahMenu'" class="btn btn-primary add-menu-button"
            type="button">
            + Add Menu
        </button>
        <button onclick="location.href='<?= BASE_URL; ?>/menu/tambahKat'" class="btn btn-primary add-menu-button"
            type="button" style="max-width: 200px;">
            + Add Keterangan
        </button>
        <?php
    }
    ?>
    <?php
    foreach ($data as $kat) {
        ?>
        <div class="button-container">
            <button class="btn btn-primary menu-button-<?= $kat[0]; ?>" type="button" data-toggle="collapse"
                data-target="#appetizers-menu-<?= $kat[0]; ?>" aria-expanded="false"
                aria-controls="appetizers-menu-<?= $kat[0]; ?>">

                <?php
                if (isset($_SESSION['access']) && $_SESSION['access'] == 1) {
                    ?>
                    <a href="<?= BASE_URL; ?>/menu/editKat/<?= $kat[0]; ?>" style="text-decoration: none;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-pencil-fill" viewBox="0 0 16 16">
                            <path
                                d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                        </svg>
                    </a>
                    <a href="<?= BASE_URL; ?>/menu/deleteKat/<?= $kat[0]; ?>" style="text-decoration: none;"
                        onclick="return confirm('Yakin ingin menghapus Kategori <?= $kat[1]; ?>? (Ini akan menghapus semua menu yang menggunakan kategori <?= $kat[1]; ?> termasuk data dalam table pemesanan)')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-trash-fill" viewBox="0 0 16 16">
                            <path
                                d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
                        </svg>
                    </a>
                    <?php
                }
                ?>
                <?= $kat[1]; ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-chevron-down" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                </svg>
            </button>
        </div>

        <div class="collapse" id="appetizers-menu-<?= $kat[0]; ?>">
            <div class="menu-grid">
                <?php
                foreach ($kat[3] as $menu) {
                    ?>
                    <div class="menu-item">
                        <a style="text-decoration: none; padding: 0;" href="<?= BASE_URL; ?>/menu/detail/<?= $menu[0]; ?>">
                            <img class="menu-pic" src="<?= $menu[5]; ?>" />
                            <div class="menu-info">
                                <div>
                                    <h4 class="menu-name">
                                        <?= $menu[2]; ?>
                                    </h4>
                                    <h5 class="menu-price">
                                        Rp.
                                        <?= $menu[4]; ?>
                                    </h5>
                                </div>
                                <p class="menu-desc">
                                    <?= $menu[3]; ?>
                                </p>
                            </div>
                        </a>
                        <?php
                        if (isset($_SESSION['access']) && $_SESSION['access'] == 1) {
                            ?>
                            <div style="display: block;margin: 15px;">
                                <div class="menu-icons">
                                    <a href="<?= BASE_URL; ?>/menu/edit/<?= $menu[0]; ?>" style="text-decoration: none;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                            class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                        </svg>
                                    </a>
                                    <a href="<?= BASE_URL; ?>/menu/delete/<?= $menu[0]; ?>" style="text-decoration: none;"
                                        onclick="return confirm('Yakin ingin menghapus menu <?= $menu[2]; ?>?')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                            class="bi bi-trash-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        <br>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <?php
    }
    ?>

</div>