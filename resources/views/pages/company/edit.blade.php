@extends('admin.layouts.main')

@section('title', 'Profil Perusahaan')

@section('main')
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Profil Perusahaan</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="#">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Profil Perusahaan</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Profil Perusahaan</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('companies.update', $company->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-6 col-12">
                                            <label>Nama Perusahaan</label>
                                            <input type="text" name="name" class="form-control"
                                                value="{{ $company->name }}">
                                        </div>
                                        <div class="form-group col-md-6 col-12">
                                            <label>Alamat Perusahaan</label>
                                            <input type="text" name="address" class="form-control"
                                                value="{{ $company->address }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 col-12">
                                            <label>Email Perusahaan</label>
                                            <input type="email" name="email" class="form-control"
                                                value="{{ $company->email }}">
                                        </div>
                                        <div class="form-group col-md-6 col-12">
                                            <label>Radius KM</label>
                                            <input type="number" step="0.01" name="radius_km" class="form-control"
                                                value="{{ $company->radius_km }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 col-12">
                                            <label>Latitude</label>
                                            <input type="text" name="latitude" class="form-control"
                                                value="{{ $company->latitude }}">
                                        </div>
                                        <div class="form-group col-md-6 col-12">
                                            <label>Longitude</label>
                                            <input type="text" name="longitude" class="form-control"
                                                value="{{ $company->longitude }}">
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="form-group col-md-6 col-12">
                                            <label>Waktu Masuk</label>
                                            <input type="time" name="time_in" class="form-control"
                                                value="{{ $company->time_in }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-left">
                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('style')
<link rel="stylesheet" href="{{ asset('stisla/dist/assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('stisla/dist/assets/modules/fontawesome/css/all.min.css') }}">
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('stisla/dist/assets/modules/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('stisla/dist/assets/modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('stisla/dist/assets/modules/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('stisla/dist/assets/modules/jquery-selectric/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('stisla/dist/assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('stisla/dist/assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('stisla/dist/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('stisla/dist/assets/css/components.css') }}">
@endpush
@push('script')
<script src="{{ asset('stisla/dist/assets/modules/jquery.min.js') }}"></script>
<script src="{{ asset('stisla/dist/assets/modules/popper.js') }}"></script>
<script src="{{ asset('stisla/dist/assets/modules/tooltip.js') }}"></script>
<script src="{{ asset('stisla/dist/assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('stisla/dist/assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('stisla/dist/assets/modules/moment.min.js') }}"></script>
<script src="{{ asset('stisla/dist/assets/js/stisla.js') }}"></script>
<!-- JS Libraies -->
<script src="{{ asset('stisla/dist/assets/modules/cleave-js/dist/cleave.min.js') }}"></script>
<script src="{{ asset('stisla/dist/assets/modules/cleave-js/dist/addons/cleave-phone.us.js') }}"></script>
<script src="{{ asset('stisla/dist/assets/modules/jquery-pwstrength/jquery.pwstrength.min.js') }}"></script>
<script src="{{ asset('stisla/dist/assets/modules/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('stisla/dist/assets/modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ asset('stisla/dist/assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ asset('stisla/dist/assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
<script src="{{ asset('stisla/dist/assets/modules/select2/dist/js/select2.full.min.js') }}"></script>
<script src="{{ asset('stisla/dist/assets/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>
<!-- Page Specific JS File -->
<script src="{{ asset('stisla/dist/assets/js/page/forms-advanced-forms.js') }}"></script>
<!-- Template JS File -->
<script src="{{ asset('stisla/dist/assets/js/scripts.js') }}"></script>
<script src="{{ asset('stisla/dist/assets/js/custom.js') }}"></script>

@endpush
@endsection
