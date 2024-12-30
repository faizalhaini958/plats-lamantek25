@extends('layouts.admin')

@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4 py-3">
        <h1 class="h3 mb-0 text-gray-800">{{ __('Dashboard') }}</h1>
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a></li>
        </ol>
    </div>

    @if(Session::has('cache'))
        <div class="alert alert-success validation">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h3 class="text-center">{{ Session::get("cache") }}</h3>
        </div>
    @endif

  <div class="row mb-3">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1">{{ __('Jumlah Daftar') }}</div>
                        <div class="h6 mb-0 mt-2 font-weight-bold text-gray-800">{{ count($directories) }} </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-fw fa-newspaper fa-2x text-success"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1">{{ __('Senarai Terbit') }}</div>
                        <div class="h6 mb-0 mt-2 font-weight-bold text-gray-800">{{ count($directories) }} </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-success"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1">{{ __('Dalam Proses') }}</div>
                        <div class="h6 mb-0 mt-2 font-weight-bold text-gray-800">{{ count($directories) }} </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-success"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1">{{ __('Kategori') }}</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{count($directories)}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x text-success"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1">{{ __('Lokasi') }}</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($directories) }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x text-success"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1">{{ __('Artikel') }}</div>
                        <div class="h6 mb-0 mt-2 font-weight-bold text-gray-800">{{ count($directories) }} </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-fw fa-newspaper fa-2x text-success"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1">{{ __('Pasukan') }}</div>
                        <div class="h6 mb-0 mt-2 font-weight-bold text-gray-800">{{ count($directories) }} </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-2x text-success"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1">{{ __('Pesanan Mesej') }}</div>
                        <div class="h6 mb-0 mt-2 font-weight-bold text-gray-800">{{ count($directories) }} </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-success"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

  </div>  

  <!--Row-->

  <div class="row mb-3">
    <div class="col-xl-12 col-lg-12 mb-4">
      <div class="card">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">@lang('Senarai Peniaga Baru Daftar')</h6>
        </div>
        @if (count($users)>0)

          <div class="table-responsive table--mobile-lg">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th>@lang('Bil')</th>
                  <th>@lang('Nama')</th>
                  <th>@lang('Emel')</th>
                  <th>@lang('Status')</th>
                  <th>@lang('Tindakan')</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $key=>$data)
                  <tr>
                    <td data-label="@lang('Bil')">{{ $loop->iteration}}</td>
                    <td data-label="@lang('Nama')">{{ $data->name }}</td>
                    <td data-label="@lang('Emel')">{{ $data->email }}</td>
                    <td data-label="@lang('Status')"><span class="badge badge-{{ $data->is_banned == 0 ? 'success' : 'danger'}}">{{ $data->is_banned == 0 ? 'activated' : 'deactivated'}}</span></td>
                    <td data-label="@lang('Tindakan')"><a href="{{ route('admin-user-show',$data->id) }}" class="btn btn-sm btn-primary">@lang('Lihat')</a></td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="card-footer"></div>
          @else
            <p class="text-center">@lang('Tiada maklumat')</p>
        @endif
      </div>
    </div>
  </div>

@endsection

@section('scripts')

@endsection
