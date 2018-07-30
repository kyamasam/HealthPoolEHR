@extends('layouts.master')

@section('content')
    <!-- Title & Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">Public Health</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->
    <!--Row-->
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card" >
                <div class="card-block">
                    <a href="{{route('comprehensive_care_centre')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Comprehensive Care Centre - CCC</a>
                    <a href="{{route('counselling')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Counselling Department</a>
                    <a href="{{route('malaria_surveillance')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Malaria Surveillance Department</a>
                    <a href="{{route('mother_and_child_health_clinic')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Mother and Child Health Clinic</a>
                    <a href="{{route('vaccines')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Vaccines</a>
                    <a href="{{route('voluntary_counselling_and_testing')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Voluntary Counselling and Testing VCT</a>
                    <a href="{{route('youth_friendly_clinic')}}" class="btn btn-lg btn-primary" style="margin: 5px;">Youth Friendly Clinic</a>
                    <a href="{{route('cancertreatment_home')}}" class="btn btn-lg btn-primary" style="margin: 5px;">MOH cancer registry</a>
                </div>
            </div>
        </div>
    </div>
@endsection
