<link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/extensions/toastr.css') }}">
<script src="{{ asset('vendors/js/extensions/toastr.min.js') }}"></script>


@if ($message = Session::get('success'))
    <script>
        toastr.success('{{ $message }}', 'Success!', { "showMethod": "slideDown", "hideMethod": "slideUp", timeOut: 2000 });
    </script>
@endif
@if ($message = Session::get('error'))
    <script>
        toastr.error('{{ $message }}', 'Error!', { "showMethod": "slideDown", "hideMethod": "slideUp", timeOut: 2000 });
    </script>
@endif
@if ($message = Session::get('info'))
    <script>
        toastr.info('{{ $message }}', 'Info!', { "showMethod": "slideDown", "hideMethod": "slideUp", timeOut: 2000 });
    </script>
@endif
@if ($message = Session::get('warning'))
    <script>
        toastr.warning('{{ $message }}', 'Warning!', { "showMethod": "slideDown", "hideMethod": "slideUp", timeOut: 2000 });
    </script>
@endif
