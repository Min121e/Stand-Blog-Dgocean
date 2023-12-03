@if (session('success'))
    <div class="parent-div">
        <div class="alert alert-success text-center rounded-none" style="margin-right: -13px">{{ session('success') }}</div>
    </div>
@endif