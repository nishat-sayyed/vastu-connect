@extends('base')

@section('title', 'New Agent')

@section('pagecss')
    <!-- bootstrap file input -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.5.1/css/fileinput.min.css" media="all"
          rel="stylesheet" type="text/css"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.5.2/themes/explorer-fas/theme.css"
          crossorigin="anonymous">
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
                            <h2 class="content-header-title float-left mb-0">New Agent</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Agents</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="#">New Agent</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- // Basic Floating Label Form section start -->
                <section id="floating-label-layouts">
                    <div class="row match-height">
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add new agent</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form" method="post" enctype="multipart/form-data"
                                              action="{{ route('admin.agent.store') }}">
                                            @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-label-group position-relative has-icon-left">
                                                            <input type="file" id="image"
                                                                   class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}"
                                                                   name="image" placeholder="Profile Picture" required>
                                                            <div class="form-control-position">
                                                                <i class="feather icon-image"></i>
                                                            </div>
                                                            <label for="image">Profile Picture</label>
                                                            @error('image')
                                                            <div class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('image') }}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-label-group position-relative has-icon-left">
                                                            <input type="text" id="name"
                                                                   class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                                                   name="name" placeholder="Name"
                                                                   value="{{ old('name') }}" required>
                                                            <div class="form-control-position">
                                                                <i class="feather icon-user"></i>
                                                            </div>
                                                            <label for="name">Name</label>
                                                            @error('name')
                                                            <div class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('name') }}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-label-group position-relative has-icon-left">
                                                            <input type="email" id="email"
                                                                   class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                                                   name="email" placeholder="Email" value="{{ old('email') }}" required>
                                                            <div class="form-control-position">
                                                                <i class="feather icon-mail"></i>
                                                            </div>
                                                            <label for="email">Email</label>
                                                            @error('email')
                                                            <div class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-label-group position-relative has-icon-left">
                                                            <input type="tel" id="mobile_no"
                                                                   class="form-control {{ $errors->has('mobile_no') ? 'is-invalid' : '' }}"
                                                                   name="mobile_no" placeholder="Mobile" value="{{ old('mobile_no') }}" required>
                                                            <div class="form-control-position">
                                                                <i class="feather icon-smartphone"></i>
                                                            </div>
                                                            <label for="mobile_no">Mobile</label>
                                                            @error('mobile_no')
                                                            <div class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('mobile_no') }}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-label-group position-relative has-icon-left">
                                                            <input type="password" id="password"
                                                                   class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                                                   name="password" placeholder="Password" required>
                                                            <div class="form-control-position">
                                                                <i class="feather icon-lock"></i>
                                                            </div>
                                                            <label for="password">Password</label>
                                                            @error('password')
                                                            <div class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-label-group position-relative has-icon-left">
                                                            <input type="password" id="password_confirmation"
                                                                   class="form-control" name="password_confirmation"
                                                                   placeholder="Confirm Password" required>
                                                            <div class="form-control-position">
                                                                <i class="feather icon-lock"></i>
                                                            </div>
                                                            <label for="password_confirmation">Confirm Password</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary mr-1 mb-1">Submit
                                                        </button>
                                                        <button type="reset" class="btn btn-outline-warning mr-1 mb-1">
                                                            Reset
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic Floating Label Form section end -->

            </div>
        </div>
    </div>
@endsection

@section('pagescript')
    <!-- bootstrap file input -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.5.1/js/fileinput.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.5.2/themes/explorer-fas/theme.js"></script>
@endsection

@section('script')
    <script>
        $("#image").fileinput({
            theme: 'fas',
            initialPreviewShowDelete: true,
            showUpload: false
        });
    </script>
@endsection
