<ul>
    <?php foreach ($products as $product) : ?>
        <li>
            <a href="/product?code=<?= $product['name']; ?>">
                <span><?= $product['name'] ?></span>
            </a>
        </li>
    <?php endforeach; ?>
</ul>