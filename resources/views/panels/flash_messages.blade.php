<link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/extensions/toastr.css') }}">
<script src="{{ asset('vendors/js/extensions/toastr.min.js') }}"></script>


@if ($message = Session::get('success'))
    <script>
        toastr.success('{{ $message }}', 'Success!', { "showMethod": "slideDown", "hideMethod": "slideUp", timeOut: 2000 });
    </script>
@endif
