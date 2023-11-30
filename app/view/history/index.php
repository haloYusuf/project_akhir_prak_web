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
                            echo "Waiting confirmation.";
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