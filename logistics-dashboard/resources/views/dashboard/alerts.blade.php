@if($data['within_range'])
    <div class="alert alert-success">
        Delivery is within range ({{ $data['distance'] }} meters)
    </div>
@else
    <div class="alert alert-danger">
        Delivery is out of range ({{ $data['distance'] }} meters)
    </div>
@endif