<form method="POST" action="{{ route('check-proximity') }}" class="p-4 border rounded shadow-sm bg-light">
    @csrf

    <div class="mb-3">
        <label for="lat" class="form-label">Latitude</label>
        <input type="number" step="any" name="lat" id="lat" class="form-control" placeholder="Enter latitude" required>
    </div>

    <div class="mb-3">
        <label for="lng" class="form-label">Longitude</label>
        <input type="number" step="any" name="lng" id="lng" class="form-control" placeholder="Enter longitude" required>
    </div>

    <div class="mb-3">
        <label for="radius" class="form-label">Radius (meters)</label>
        <input type="number" name="radius" id="radius" class="form-control" value="250" min="0">
    </div>

    <button type="submit" class="btn btn-primary w-100">Check Proximity</button>
</form>