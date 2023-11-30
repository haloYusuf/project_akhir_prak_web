<div class="container">
    <table class="table-primary">
        <thead>
            <tr class="table-primary" style="background-color: white;backdrop-filter: blur(0px);">
                <th>Requester</th>
                <th>Menu Name</th>
                <th>Qty</th>
                <th>Total Price</th>
                <th>Order Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data as $v) {
                ?>
                <tr>
                    <td>
                        <?= $v['acc_email']; ?>
                    </td>
                    <td>
                        <?= $v['nama_menu']; ?>
                    </td>
                    <td>
                        <?= $v['qty_pemesanan']; ?>
                    </td>
                    <td>Rp.
                        <?= $v['totalHarga']; ?>
                    </td>
                    <td>
                        <?= $v['tgl_pemesanan']; ?>
                    </td>
                    <td>
                        <?php
                        if ($v['status_pemesanan'] == 0) {
                            ?>
                            <div class="menu-icons" style="justify-content: center;">
                                <a href="<?= BASE_URL ?>/confirmorder/confirm/<?= $v['id_pemesanan']; ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                        class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                </a>
                                <a href="<?= BASE_URL ?>/confirmorder/cancel/<?= $v['id_pemesanan']; ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                        class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z" />
                                    </svg>
                                </a>
                            </div>
                            <?php
                        } else if ($v['status_pemesanan'] == 1) {
                            echo "Order on proccess.";
                        } else {
                            echo "Order canceled.";
                        }
                        ?>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>