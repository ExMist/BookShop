<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <h4>Список заказов для пользователя <?php echo $user['name'];?> </h4>
            <br/>
            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID заказа</th>
                    <th>Имя покупателя</th>
                    <th>Телефон покупателя</th>
                    <th>Дата оформления</th>
                    <th>Статус</th>
                    <th></th>
                </tr>
                <?php foreach ($ordersList as $order): ?>
                    <tr>
                        <td>
                            <a href="/cabinet/order/view/<?php echo $order['id']; ?>">
                                <?php echo $order['id']; ?>
                            </a>
                        </td>
                        <td><?php echo $order['user_name']; ?></td>
                        <td><?php echo $order['user_phone']; ?></td>
                        <td><?php echo $order['date']; ?></td>
                        <td><?php echo Order::getStatusText($order['status']); ?></td>
                        <td><a href="/cabinet/order/view/<?php echo $order['id']; ?>" title="Смотреть"><i class="fa fa-eye"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>