@php
    $withinRange = $data['within_range'];
    $distance = number_format($data['distance'], 2);
@endphp

<div class="alert alert-{{ $withinRange ? 'success' : 'danger' }} d-flex align-items-center gap-3 shadow-sm fade show" role="alert">
    <i class="bi {{ $withinRange ? 'bi-check-circle-fill text-success' : 'bi-x-circle-fill text-danger' }} fs-4"></i>
    <div>
        <strong>{{ $withinRange ? 'Delivery is within range' : 'Delivery is out of range' }}</strong><br>
        <span class="small text-muted">Distance: {{ $distance }} meters</span>
    </div>
</div>