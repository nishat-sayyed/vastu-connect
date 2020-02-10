@extends('base')

@section('title', $agent->name)

@section('pagecss')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/extensions/sweetalert2.min.css') }}">
@endsection


@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- page users view start -->
                <section class="page-users-view">
                    <div class="row">
                        <!-- account start -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Account</div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="users-view-image">
                                            <img width="150px" height="130px" src="{{ asset($agent->image->url) }}" class="users-avatar-shadow rounded mb-2 pr-2 ml-1" alt="avatar">
                                        </div>
                                        <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                                            <table>
                                                <tr>
                                                    <td class="font-weight-bold">Name</td>
                                                    <td>{{ $agent->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Email</td>
                                                    <td>{{ $agent->email }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Mobile</td>
                                                    <td>{{ $agent->mobile_no }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-5">
                                            <table class="ml-0 ml-sm-0 ml-lg-0">
                                                <tr>
                                                    <td class="font-weight-bold">Status</td>
                                                    <td>Active</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Role</td>
                                                    <td>Agent</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Commission</td>
                                                    <td>{{ $agent->commission }}%</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-12">
                                            <a href="{{ route('admin.agent.edit', $agent->id) }}" class="btn btn-primary mr-1"><i class="feather icon-edit-1"></i> Edit</a>
                                            <button id="confirm-delete" class="btn btn-outline-danger"><i class="feather icon-trash-2"></i> Delete</button>
                                            <form id="delete-form" action="{{ route('admin.agent.destroy', $agent->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- account end -->
                        <!-- information start -->
                        <div class="col-md-6 col-12 ">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title mb-2">Information</div>
                                </div>
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td class="font-weight-bold">Birth Date </td>
                                            <td>28 January 1998
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Mobile</td>
                                            <td>+65958951757</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Website</td>
                                            <td>https://rowboat.com/insititious/Angelo
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Languages</td>
                                            <td>English, Arabic
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Gender</td>
                                            <td>female</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Contact</td>
                                            <td>email, message, phone
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- information start -->
                        <!-- social links end -->
                        <div class="col-md-6 col-12 ">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title mb-2">Social Links</div>
                                </div>
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td class="font-weight-bold">Twitter</td>
                                            <td>https://twitter.com/adoptionism744
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Facebook</td>
                                            <td>https://www.facebook.com/adoptionism664
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Instagram</td>
                                            <td>https://www.instagram.com/adopt-ionism744/
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Github</td>
                                            <td>https://github.com/madop818
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">CodePen</td>
                                            <td>https://codepen.io/adoptism243
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Slack</td>
                                            <td>@adoptionism744
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- social links end -->
                    </div>
                </section>
                <!-- page users view end -->

            </div>
        </div>
    </div>
@endsection

@section('pagescript')
    <script src="{{ asset('vendors/js/extensions/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('vendors/js/extensions/polyfill.min.js') }}"></script>
@endsection

@section('script')
    <script>
        $('#confirm-delete').on('click', function () {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                confirmButtonClass: 'btn btn-primary',
                cancelButtonClass: 'btn btn-danger ml-1',
                buttonsStyling: false,
            }).then(function (result) {
                if (result.value) {
                    $('#delete-form').submit();
                }
            })
        });
    </script>
@endsection
