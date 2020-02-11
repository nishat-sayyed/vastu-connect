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
                                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('admin.agent.index') }}">Agents</a>
                                    </li>
                                    <li class="breadcrumb-item active">New Agent</li>
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
                        <form class="form" method="post" enctype="multipart/form-data"
                              action="{{ route('admin.agent.store') }}">
                            @csrf
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Add new agent</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="form-body">
                                                <div class="row">
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
                                                            <textarea id="address"
                                                                      class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}"
                                                                      name="address" placeholder="Address"
                                                                      required>{{ old('address') }}</textarea>
                                                            <div class="form-control-position">
                                                                <i class="feather icon-user"></i>
                                                            </div>
                                                            <label for="address">Address</label>
                                                            @error('address')
                                                            <div class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('address') }}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-label-group position-relative has-icon-left">
                                                            <input type="text" id="wing"
                                                                   class="form-control {{ $errors->has('wing') ? 'is-invalid' : '' }}"
                                                                   name="wing" placeholder="Wing"
                                                                   value="{{ old('wing') }}" required>
                                                            <div class="form-control-position">
                                                                <i class="feather icon-user"></i>
                                                            </div>
                                                            <label for="wing">Wing</label>
                                                            @error('wing')
                                                            <div class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('wing') }}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-label-group position-relative has-icon-left">
                                                            <input type="text" id="room_no"
                                                                   class="form-control {{ $errors->has('room_no') ? 'is-invalid' : '' }}"
                                                                   name="room_no" placeholder="Room no"
                                                                   value="{{ old('room_no') }}" required>
                                                            <div class="form-control-position">
                                                                <i class="feather icon-user"></i>
                                                            </div>
                                                            <label for="room_no">Room no</label>
                                                            @error('room_no')
                                                            <div class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('room_no') }}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-label-group position-relative has-icon-left">
                                                            <input type="text" id="floor"
                                                                   class="form-control {{ $errors->has('floor') ? 'is-invalid' : '' }}"
                                                                   name="floor" placeholder="Floor"
                                                                   value="{{ old('floor') }}" required>
                                                            <div class="form-control-position">
                                                                <i class="feather icon-user"></i>
                                                            </div>
                                                            <label for="floor">Floor</label>
                                                            @error('floor')
                                                            <div class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('floor') }}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-label-group position-relative has-icon-left">
                                                            <input type="text" id="city"
                                                                   class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}"
                                                                   name="city" placeholder="City"
                                                                   value="{{ old('city') }}" required>
                                                            <div class="form-control-position">
                                                                <i class="feather icon-user"></i>
                                                            </div>
                                                            <label for="city">City</label>
                                                            @error('city')
                                                            <div class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('city') }}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-label-group position-relative has-icon-left">
                                                            <input type="text" id="state"
                                                                   class="form-control {{ $errors->has('state') ? 'is-invalid' : '' }}"
                                                                   name="state" placeholder="State"
                                                                   value="{{ old('state') }}" required>
                                                            <div class="form-control-position">
                                                                <i class="feather icon-user"></i>
                                                            </div>
                                                            <label for="state">State</label>
                                                            @error('state')
                                                            <div class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('state') }}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-label-group position-relative has-icon-left">
                                                            <input type="text" id="location"
                                                                   class="form-control {{ $errors->has('location') ? 'is-invalid' : '' }}"
                                                                   name="location" placeholder="Location"
                                                                   value="{{ old('location') }}" required>
                                                            <div class="form-control-position">
                                                                <i class="feather icon-user"></i>
                                                            </div>
                                                            <label for="location">Location</label>
                                                            @error('location')
                                                            <div class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('location') }}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-label-group position-relative has-icon-left">
                                                            <input type="number" id="pincode"
                                                                   class="form-control {{ $errors->has('pincode') ? 'is-invalid' : '' }}"
                                                                   name="pincode" placeholder="Pincode"
                                                                   value="{{ old('pincode') }}" required>
                                                            <div class="form-control-position">
                                                                <i class="feather icon-user"></i>
                                                            </div>
                                                            <label for="pincode">Pincode</label>
                                                            @error('pincode')
                                                            <div class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('pincode') }}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-label-group position-relative has-icon-left">
                                                            <input type="number" id="sqft"
                                                                   class="form-control {{ $errors->has('sqft') ? 'is-invalid' : '' }}"
                                                                   name="sqft" placeholder="Square feet"
                                                                   value="{{ old('sqft') }}" required>
                                                            <div class="form-control-position">
                                                                <i class="feather icon-user"></i>
                                                            </div>
                                                            <label for="sqft">Square feet</label>
                                                            @error('sqft')
                                                            <div class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('sqft') }}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-label-group position-relative has-icon-left">
                                                            <input type="number" id="price"
                                                                   class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}"
                                                                   name="price" placeholder="Price"
                                                                   value="{{ old('price') }}" required>
                                                            <div class="form-control-position">
                                                                <i class="feather icon-user"></i>
                                                            </div>
                                                            <label for="price">Price</label>
                                                            @error('price')
                                                            <div class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('price') }}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-label-group position-relative has-icon-left">
                                                            <input type="number" id="bhk"
                                                                   class="form-control {{ $errors->has('bhk') ? 'is-invalid' : '' }}"
                                                                   name="bhk" placeholder="No of BHK"
                                                                   value="{{ old('bhk') }}" required>
                                                            <div class="form-control-position">
                                                                <i class="feather icon-user"></i>
                                                            </div>
                                                            <label for="bhk">No of BHK</label>
                                                            @error('bhk')
                                                            <div class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('bhk') }}</strong>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-label-group position-relative has-icon-left">
                                                            <select id="status"
                                                                    class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}"
                                                                    name="status">
                                                                <option value="Ready to move">Ready to move</option>
                                                                <option value="Under construction">Under construction
                                                                </option>
                                                            </select>
                                                            <div class="form-control-position">
                                                                <i class="feather icon-user"></i>
                                                            </div>
                                                            <label for="status">Status</label>
                                                            @error('status')
                                                            <div class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('status') }}</strong>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 pull-right">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Upload Images</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="form-body">
                                                <div class="row">
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
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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
