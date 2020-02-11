@extends('base')

@section('title', 'Your Agents')

@section('pagecss')
    <!-- bootstrap file input -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/tables/datatable/datatables.min.css') }}">

{{--    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/animate/animate.css') }}">--}}
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/extensions/sweetalert2.min.css') }}">--}}
@endsection


@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Your Agents</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="{{ route('admin.agent.index') }}">Agents</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Zero configuration table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Your added agents</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <a href="{{ route('admin.agent.create') }}" class="btn btn-success float-right">Add
                                            new agent</a>
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Agent Code</th>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Mobile no</th>
                                                    <th>Commission</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($agents as $agent)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td><strong><a
                                                                    href="{{ route('admin.agent.show', $agent->id) }}">{{ $agent->code }}</a></strong>
                                                        </td>
                                                        <td><img height="100px" width="100px"
                                                                 src="{{ asset($agent->image->url) }}"
                                                                 alt="Agent Image"></td>
                                                        <td>{{ $agent->name }}</td>
                                                        <td>{{ $agent->mobile_no }}</td>
                                                        <td>{{ $agent->commission }}%</td>
                                                        <td>
                                                            <a href="{{ route('admin.agent.show', $agent->id) }}"
                                                               class="btn btn-icon btn-icon rounded-circle btn-outline-primary mb-1">
                                                                <i class="feather icon-eye"></i></a>
                                                            <a href="{{ route('admin.agent.edit', $agent->id) }}"
                                                               class="btn btn-icon btn-icon rounded-circle btn-outline-warning mb-1">
                                                                <i class="feather icon-edit"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Agent Code</th>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Mobile no</th>
                                                    <th>Commission</th>
                                                    <th>Action</th>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Zero configuration table -->
            </div>
        </div>
    </div>
@endsection

@section('pagescript')
    <script src="{{ asset('vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>

{{--    <script src="{{ asset('vendors/js/extensions/sweetalert2.all.min.js') }}"></script>--}}
{{--    <script src="{{ asset('vendors/js/extensions/polyfill.min.js') }}"></script>--}}
@endsection

@section('script')
    <script>
        $('.zero-configuration').DataTable();
    </script>
@endsection
