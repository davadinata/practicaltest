<div class="container mt-5 text-center">
    <h2 class="fw-bold">Bean of the Day</h2>
    <?php foreach ($name as $nm) : ?>
        <p><?= $nm['name']; ?></p>
</div>
<div class="container text-center mt-5">
    <h2 class="fw-bold">Price</h2>
    <p>$<?= $nm['price']; ?></p>
</div>
<div class="container text-center mt-5">
    <h2 class="fw-bold">Description</h2>
    <p><?= $nm['description']; ?></p>
<?php endforeach; ?>
</div>