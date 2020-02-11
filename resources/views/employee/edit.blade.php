@extends('base')

@section('title', 'Edit Agent')

@section('pagecss')
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
                            <h2 class="content-header-title float-left mb-0">Edit Agent</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('admin.agent.index') }}">Agents</a>
                                    </li>
                                    <li class="breadcrumb-item active">Edit Agent</li>
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
                                    <h4 class="card-title">Edit agent</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form" method="post" enctype="multipart/form-data"
                                              action="{{ route('admin.agent.update', $agent->id) }}">
                                            @csrf
                                            @method('put')
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-label-group position-relative has-icon-left">
                                                            <input type="text" id="name"
                                                                   class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                                                   name="name" placeholder="Name"
                                                                   value="{{ $agent->name }}" required>
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
                                                                   name="email" placeholder="Email" value="{{ $agent->email }}" required>
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
                                                                   name="mobile_no" placeholder="Mobile" value="{{ $agent->mobile_no }}" required>
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
                                                            <input type="tel" id="commission"
                                                                   class="form-control {{ $errors->has('mobile_no') ? 'is-invalid' : '' }}"
                                                                   name="commission" placeholder="Commission" value="{{ $agent->commission  }}" required>
                                                            <div class="form-control-position">
                                                                <i class="feather icon-credit-card"></i>
                                                            </div>
                                                            <label for="commission">Commission</label>
                                                            @error('commission')
                                                            <div class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('commission') }}</strong>
                                                            </div>
                                                            @enderror
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
@endsection

@section('script')
    <script>

    </script>
@endsection
