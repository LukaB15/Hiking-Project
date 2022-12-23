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
    <div class="custom-shape-divider-bottom-1671614848">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M1200,0H0V120H281.94C572.9,116.24,602.45,3.86,602.45,3.86h0S632,116.24,923,120h277Z" class="shape-fill"></path>
        </svg>
    </div>
</div>
<div class="Title_Welcome">
    <h2>Welcome to <br> Like A Hike</h2>
</div>
<div class="button_add">
    <a href="/add" class="add_link">Ajouter une randonnée</a>
</div>
<ul class="hike_list_ul">
    <?php foreach ($products as $product) : ?>
        <a class="hike_list" href="/product?id=<?= $product['ID']; ?>">
            <li class="hike_list_li">
                    <div class="logo">
                        <span class="material-symbols-outlined color">
                            footprint
                        </span>
                    </div>
                    <div class="info">
                        <span class="name"><?= $product['name'] ?></span>
                        <div class="little_info">
                            <span class="distance"><?= $product['distance'] ?>km</span>
                            <span class="duration"><?= $product['duration'] ?></span>
                            <span class="elevation"><?= $product['elevation_gain'] ?>m</span>
                        </div>
                        <span class="description"><?= $product['description'] ?></span>
                    </div>
            </li>
        </a>
    <?php endforeach; ?>
</ul>
<?php if(!empty ($_SESSION['user'])):?>
    <a href="/add">Ajoutez une base de données</a>
<?php endif ?>
