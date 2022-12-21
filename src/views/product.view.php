<h1><?= $product['name'] ?></h1>

<h2>Distance: <?= $product['distance'] ?></h2>
<h2>Durée : <?= $product['duration'] ?></h2>
<h2>Altitude : <?= $product['elevation_gain'] ?></h2>
<h2>Description</h2>
<p><?= $product['description'] ?></p>
<form action="remove" method="post">
    <label for="id">Remove this Hike</label>
    <input type="checkbox" name="id" value=<?= $product['ID'] ?> />
    <button type="submit">Are you sure ?</button>
</form>