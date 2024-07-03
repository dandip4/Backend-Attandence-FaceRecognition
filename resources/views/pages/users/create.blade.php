@extends('admin.layouts.main')

@section('title', 'Tambah User')

@section('main')
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Tambah User</h4>
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
                        <a href="#">Tables</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Tambah User</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Tambah User</h4>
                                <a href="" class="btn btn-primary btn-round ml-auto">
                                    Kembali
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form name="form-create" id="form-create" action="{{ route('users.store') }}" method="POST" class="needs-validation" enctype="multipart/form-data" novalidate>
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" class="form-control" id="name" placeholder="name" required>
                                            <div class="invalid-feedback">
                                                name wajib diisi.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                                            <div class="invalid-feedback">
                                                Email wajib diisi.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                                            <div class="invalid-feedback">
                                                Password wajib diisi.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" name="phone" class="form-control" id="phone" placeholder="phone" required>
                                            <div class="invalid-feedback">
                                                phone wajib diisi.
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="role" value="2" class="form-control" id="role">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </div>
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
