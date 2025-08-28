<form method="POST" action="{{ route('check-proximity') }}">
    @csrf
    <input type="text" name="lat" placeholder="Latitude" required>
    <input type="text" name="lng" placeholder="Longitude" required>
    <input type="text" name="radius" placeholder="Radius" value="250">
    <button type="submit">Check Proximity</button>
</form>
