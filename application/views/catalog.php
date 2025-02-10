<div class="container">
    <table>
        <thead class="thead-dark">
            <tr>
                <th>Bean</th>
                <th>Description</th>
                <th>Price/Unit</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($beans as $bean): ?>
                <tr>
                    <td><?= $bean['name']; ?></td>
                    <td><?= $bean['description']; ?></td>
                    <td>$<?= $bean['price']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>