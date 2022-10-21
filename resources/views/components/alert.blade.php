@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <div>{{ session()->get('success') }}</div> <button type="button" class="btn-close" data-bs-dismiss="alert"
            aria-label="Close"></button>
    </div>
@endif
@if (session()->has('error'))
    <div class="alert alert-danger alert-dismissible" role="alert">
        <div>{{ session()->get('error') }}</div> <button type="button" class="btn-close" data-bs-dismiss="alert"
            aria-label="Close"></button>
    </div>
@endif


@if (session()->has('success-info'))
    <script>
        $.notify("{{ session()->get('success-info') }}", "success");
    </script>
@endif
