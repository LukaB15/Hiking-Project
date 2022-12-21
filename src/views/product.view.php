<div class="single_container">
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
                <span class="material-symbols-outlined">
                    label_important
                </span>
                <?= $product['distance'] ?>km
            </div>
            <div class="duration_single">
                <span class="material-symbols-outlined">
                    schedule
                </span> 
                <?= $product['duration'] ?> 
            </div>
            <div class="elevation_single"> 
                <span class="material-symbols-outlined">
                    trending_up
                </span>
                <?= $product['elevation_gain'] ?>m 
            </div>
        </div>
        <p class="description_single"><?= $product['description'] ?> </p>
    </div>
</div>    