<div class="headerbck">
<div class="content">
    <div class="visible">
        <p>
            Like a
        </p>
        <ul class="ul">
            <li>Hike</li>
            <li>Walk</li>
            <li>Family</li>
        </ul>
    </div>
</div>
</div>
<ul>
    <?php foreach ($products as $product) : ?>
        <li>
            <a href="/product?id=<?= $product['ID']; ?>">
                <span><?= $product['name'] ?></span>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
<a href="/add">Ajoutez une base de données</a>
