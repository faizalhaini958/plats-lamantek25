@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="d-sm-flex align-items-center justify-content-between py-3">
    <h5 class=" mb-0 text-gray-800 pl-3">{{ __('Add New Staff') }} <a class="btn btn-primary btn-rounded btn-sm" href="{{route('admin.staff.index')}}"><i class="fas fa-arrow-left"></i> {{ __('Back') }}</a></h5>
    <ol class="breadcrumb m-0 py-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.staff.index') }}">{{ __('Manage Team') }}</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.staff.create')}}">{{ __('Add New Team') }}</a></li>
    </ol>
    </div>
</div>

<div class="row justify-content-center mt-3">
  <div class="col-md-10">
    <!-- Form Basic -->
    <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">{{ __('Add New Team Form') }}</h6>
      </div>

      <div class="card-body">
        
        <form class="geniusform" action="{{route('admin.staff.store')}}" method="POST" enctype="multipart/form-data">

            @include('includes.admin.form-both')

            {{ csrf_field() }}


            <div class="form-group" id="set-picture">
                <label>{{ __('Set Picture') }} </label>
                <div class="wrapper-image-preview">
                    <div class="box">
                        <div class="back-preview-image" style="background-image: url({{ asset('assets/images/placeholder.jpg') }});"></div>
                        <div class="upload-options">
                            <label class="img-upload-label" for="img-upload"> <i class="fas fa-camera"></i> {{ __('Upload Picture') }} </label>
                            <input id="img-upload" type="file" class="image-upload" name="photo" accept="image/*">
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="inp-name">{{ __('Name') }}</label>
                <input type="text" class="form-control" id="inp-name" name="name"  placeholder="{{ __('Enter Name') }}" value="" required>
            </div>

   	        <div class="form-group">
                <label for="inp-name">{{ __('Username') }}</label>
                <input type="text" class="form-control" id="inp-name" name="username"  placeholder="{{ __('Enter Username') }}" value="" required>
            </div>

            <div class="form-group">
                <label for="inp-email">{{ __('Email') }}</label>
                <input type="email" class="form-control" id="inp-email" name="email"  placeholder="{{ __('Enter Email') }}" value="" required>
            </div>

            <div class="form-group">
                <label for="inp-phone">{{ __('Phone') }}</label>
                <input type="text" class="form-control" id="inp-phone" name="phone"  placeholder="{{ __('Enter Phone') }}" value="" required>
			      </div>

            <div class="form-group">
              <label for="inp-pass">{{ __('Password') }}</label>
              <input type="password" class="form-control" id="inp-pass" name="password"  placeholder="{{ __('Enter Password') }}" value="" required>
            </div>


            <div class="form-group">
              <label for="inp-name">{{ __('Select Role') }}</label>

              <select class="form-control mb-3" name="role_id">
                <option value="">{{ __('Select Role') }}</option>
                  @foreach(DB::table('roles')->get() as $data)
                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                  @endforeach
              </select>
            </div>


            <button type="submit" id="submit-btn" class="btn btn-primary w-100">{{ __('Submit') }}</button>
        </form>
      </div>
    </div>
  </div>

</div>
@endsection


@section('scripts')


@endsection
