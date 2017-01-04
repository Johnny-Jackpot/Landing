<?php
require(ROOT . '/views/layouts/admin/header.php');
?>
<h4 style="text-align: center;">Orders</h4>

<br/>

<?php if (count($orders)): ?> 
    <table class="table-bordered table-striped table">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Client</th>
                <th>E-Mail</th>
                <th>Phone</th>
                <th>Date</th>
                <th>Status</th>
            </tr>
        </thead>

        <?php foreach ($orders as $order): ?>
            <tr>
                <td><?php echo $order['order_id'] ?></td>
                <td><?php echo $order['client'] ?></td>
                <td><?php echo $order['e-mail'] ?></td>
                <td><?php echo $order['phone'] ?></td>
                <td><?php echo $order['date'] ?></td>
                <td>
                    <select data-order-id="<?php echo $order['order_id']; ?>"
                        class="
                        <?php
                            switch ($order['status']) {
                                case '1':
                                    echo 'status-payed';
                                    break;
                                case '2':
                                    echo 'status-active';
                                    break;
                                case '3':
                                    echo 'status-cancelled';
                                    break;
                            }
                        ?>
                    ">
                        <option value="1" class="status-payed"
                            <?php 
                                if ($order['status'] == '1') echo 'selected';
                            ?>
                        >Payed</option>
                        <option value="2" class="status-active"
                            <?php 
                                if ($order['status'] == '2') echo 'selected';
                            ?>
                        >Active</option>
                        <option value="3" class="status-cancelled"
                            <?php 
                                if ($order['status'] == '3') echo 'selected';
                            ?>
                        >Cancelled</option>                        
                    </select>
                </td>                
            </tr>
        <?php endforeach; ?>

    </table>
<?php endif; ?>

<?php
require(ROOT . '/views/layouts/admin/footer.php');