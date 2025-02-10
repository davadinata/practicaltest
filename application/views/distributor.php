<div class="container">
    <table>
        <thead class="thead-dark">
            <tr>
                <th>Distributor Name</th>
                <th>City</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dis as $d): ?>
                <tr>
                    <td><?= $d['distributor_name']; ?></td>
                    <td><?= $d['city']; ?></td>
                    <td><a href="<?= base_url('distributor') ?>">[edit]</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="<?= base_url('distributor/add') ?>">[Add]</a>
</div>