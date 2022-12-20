<h2>Save a Hike</h2>

<form action="save" method="post">
    <div>
        <label for="name">Name :</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="distance">Distance:</label>
        <input type="text" name="distance">
    </div>
    <div>
        <label for="duration">Duration:</label>
        <input type="text" name="duration">
    </div>
    <div>
        <label for="elevation_gain">Altitude:</label>
        <input type="text" name="elevation_gain" />
    </div>
    <div>
        <label for="description">Description: </label>
        <textarea name="description"></textarea>
    </div>
    <button type="submit">Save !</button>
</form>