<div class="single_container">
<div class="bckblur_single"></div>
    <div class="single_hike">
        <div class="single_logo">
            <span class="material-symbols-outlined blue">
                hiking
            </span>
        </div>
        <div class="single_title">
            <h2><?= $product['name'] ?></h2>
        </div>
        
        <div class="single_info">
            <div class="distance_single">
                <span class="material-symbols-outlined infosingle">
                    label_important
                </span>
                <?= $product['distance'] ?>km
            </div>
            <div class="duration_single">
                <span class="material-symbols-outlined infosingle">
                    schedule
                </span> 
                <?= $product['duration'] ?> 
            </div>
            <div class="elevation_single"> 
                <span class="material-symbols-outlined infosingle">
                    trending_up
                </span>
                <?= $product['elevation_gain'] ?>m 
            </div>
        </div>
        <p class="description_single"><?= $product['description'] ?> </p>
        <form action="remove" method="post">
    <label for="id">Remove this Hike</label>
    <input type="checkbox" name="id" value=<?= $product['ID'] ?> />
    <button type="submit">Are you sure ?</button>
</form>
    </div>
</div>    
