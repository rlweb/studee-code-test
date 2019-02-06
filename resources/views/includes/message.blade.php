@if ($message = session('success'))
    <div class="alert alert-success">
        <strong>{{ $message }}</strong>
    </div>
@endif
@if ($message = session('warning'))
    <div class="alert alert-warning">
        <strong>{{ $message }}</strong>
    </div>
@endif
