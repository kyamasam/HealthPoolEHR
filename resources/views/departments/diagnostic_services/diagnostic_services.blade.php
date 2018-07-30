@extends('layouts.master')

@section('content')
<!-- Title & Breadcrumbs-->
<div class="row page-titles">
    <div class="col-md-12 align-self-center text-center">
        <h4 class="theme-cl">Labaratory Department</h4>
    </div>
</div>
<!-- Title & Breadcrumbs-->

<div class="row">
    <div class="col-lg-12 col-lg-6">
        <div class="card">
            <div class="card-body text-center">
                <div class="button-group">
                    <a href="{{ route('generallabrequestform') }}" class="btn waves-effect waves-light btn-primary">General Lab Request</a>
                    <a href="{{ route('moh240') }}" class="btn waves-effect waves-light btn-primary">MOH 240</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row page-titles">
    <div class="col-md-12 align-self-center text-center">
        <h4 class="theme-cl">Radiology Department</h4>
    </div>
</div>
<!-- Title & Breadcrumbs-->

<div class="row">
    <div class="col-lg-12 col-lg-6">
        <div class="card">
            <div class="card-body text-center">
                <div class="button-group">
                    <a href="{{ route('ecgrequestform') }}" class="btn waves-effect waves-light btn-primary">ECG Request Form</a>
                    <a href="{{ route('moh209') }}" class="btn waves-effect waves-light btn-primary">MOH 209</a>
                    <a href="{{ route('radiologyrequestform') }}" class="btn waves-effect waves-light btn-primary">Radiology Request Form</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
