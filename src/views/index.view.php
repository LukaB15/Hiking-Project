<ul>
    <?php foreach ($products as $product) : ?>
        <li>
            <a href="/product?name=<?= $product['name']; ?>">
                <span><?= $product['name'] ?></span>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
<a href="/add">Ajoutez une base de données</a>