<ul>
    <?php foreach ($products as $product) : ?>
        <li>
            <a href="/product?name=<?= $product['name']; ?>">
                <span><?= $product['name'] ?></span>
            </a>
        </li>
    <?php endforeach; ?>
</ul>