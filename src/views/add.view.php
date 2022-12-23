<div class="bck_add">
    <div class="bckblur_add"></div>
    <div class="form_add">
        <h2 class="title_add">REGISTER</h2>
        <p class="p_add">Enter your credentials</p>
        <form action="add" method="post">
            <div>
                <input type="text" name="name" id="name_add_input" placeholder="Name of the Hike" required>
            </div>
            <div>
                <input type="text" name="distance" id="distance_add_input" placeholder="Distance of the Hike" required>
            </div>
            <div>
                <input type="text" name="duration" id="duration_add_input" placeholder="Duration of the Hike" required> 
            </div>
            <div>
                <input type="text" name="elevation_gain" id="elevation_add_input" placeholder="Elevation of the Hike" required />
            </div>
            <div>
                <textarea name="description" id="description_add_input"  placeholder="Description of the Hike" required></textarea>
            </div>
            <button type="submit" id="submit_add">Save !</button>
        </form>
    </div>
</div>