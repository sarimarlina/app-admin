@extends('dashboard.layouts.main')

@section('container')
    <div class="row d-flex justify-content-center">
        <div class="col-lg-8 align-items-center text-center">
            <img src="sb-admin/img/undraw_profile_2.svg" width="20%" class="mb-3">
            <h3>{{ auth()->user()->name }}</h3>
        </div>
    </div>
@endsection