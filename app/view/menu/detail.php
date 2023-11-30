<div class="card">
    <div class="row justify-content-center">
        <div class="col-md-8 cart">
            <div class="title">
                <div class="row">
                    <div class="col">
                        <h4><b>Detail Menu</b></h4>
                    </div>
                    <div class="col align-self-center text-right text-muted">
                        <?= $data['kat']; ?>
                    </div>
                </div>
            </div>
            <div class="row border-top border-bottom">
                <form action="<?= BASE_URL; ?>/menu/order/" method="post">
                    <div class="row main align-items-center">
                        <img class="menu-picc" src="<?= BASE_URL; ?>/img/rendang.jpg" />
                        <h3>
                            <?= $data['nama_menu']; ?>
                        </h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span>( 250 )</span>
                        </div>
                        <p>
                            <?= $data['desc_menu']; ?>
                        </p>
                        <?php
                        if ($_SESSION['access'] == 0) {
                            ?>
                            <div class="col">
                                <div class="jml mr-5">
                                    <input type="number" name="qty" id="qtyBox" min="1" max="100" name="qty" required />
                                    <input type="hidden" name="idMenu" value="<?= $data['id_menu']; ?>" />
                                </div>
                            </div>
                            <?php
                        }
                        ?>

                        <div class="col"><span>Rp.
                                <?= $data['harga']; ?> (Satuan)
                            </span></div>
                    </div>

                    <?php
                    if ($_SESSION['access'] == 0) {
                        ?>
                        <button type="submit" class="btn link-button button-style bg-navbar-custom text-color">
                            Order
                        </button>
                        <?php
                    }
                    ?>
                </form>

                <div class="back-to-shop">
                    <a href="<?= BASE_URL; ?>/menu">&leftarrow;</a><span class="text-muted">Back to shop</span>
                </div>

            </div>
        </div>
    </div>
</div>