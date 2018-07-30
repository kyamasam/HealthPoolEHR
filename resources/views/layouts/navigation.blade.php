
<nav class="navbar navbar-expand-lg bb-1 navbar-light bg-white fixed-top" id="mainNav">

    <!-- Start Header -->
    <header class="header-logo bg-white bb-1 br-1">
        <a class="nav-link text-center mr-lg-3 hidden-xs" id="sidenavToggler"><i class="ti-align-left"></i></a>
        <a class="gredient-cl navbar-brand" href="{{route('home')}}">Healthpool EHR</a>
    </header>

    <!-- End Header -->

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="ti-align-left"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">

        <!-- =============== Start Side Menu ============== -->
        <div class="navbar-side">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                <!-- Start Finance-->
                @if(str_contains(Request::url(),'patient_profile'))
                                         @else
                <li class="nav-item {{ str_contains(Request::url(),route('home')) ==true? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link " href="{{ route('home') }}">
                        <i class="i-cl-2 fa fa-fw fa-home"></i>
                        <span class="nav-link-text">Home</span>
                    </a>
                </li>
                @endif
                <!--start patient profile-->






                @if(str_contains(Request::url(),route('home')))

                    <li class="nav-item {!! str_contains(Request::url(),route('administration_home')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('administration_home')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-fw fa-shield i-cl-8"></i>
                            <span class="nav-link-text">Administration</span>
                        </a>
                    </li>

                    <li class="nav-item {!! str_contains(Request::url(),route('clinicalservices_home')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('clinicalservices_home')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-fw fa-h-square i-cl-3"></i>
                            <span class="nav-link-text">Clinical Services</span>
                        </a>
                    </li>

                    <li class="nav-item {!! str_contains(Request::url(),route('diagnosticservices')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('diagnosticservices')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-fw fa-stethoscope i-cl-5"></i>
                            <span class="nav-link-text">Diagnostic Services</span>
                        </a>
                    </li>

                    <li class="nav-item {!! str_contains(Request::url(),route('public_health_home')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('public_health_home')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-fw fa-hospital-o i-cl-4"></i>
                            <span class="nav-link-text">Public Health</span>
                        </a>
                    </li>

                    <li class="nav-item {!! str_contains(Request::url(),route('pharmaceuticalservices')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('pharmaceuticalservices')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-fw fa-medkit i-cl-7"></i>
                            <span class="nav-link-text">Pharmaceutical Services</span>
                        </a>
                    </li>

                    <li class="nav-item {!! str_contains(Request::url(),route('stores_home')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('stores_home')}}" data-parent="#exampleAccordion" >
                            <i class="fa  fa-bars i-cl-7"></i>
                            <span class="nav-link-text">Stores</span>
                        </a>
                    </li>

                    <li class="nav-item {!! str_contains(Request::url(),route('finance_home')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('finance_home')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-bank i-cl-2"></i>
                            <span class="nav-link-text">Finance</span>
                        </a>
                    </li>

                    <li class="nav-item {!! str_contains(Request::url(),route('farewellparlour')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('farewellparlour')}}" data-parent="#exampleAccordion" >

                            <i class="fa fa-fw fa-bed i-cl-6"></i>
                            <span class="nav-link-text">Farewell Pallor</span>
                        </a>
                    </li>

                @endif

                @if(str_contains(Request::url(),'finance'))
                    <li class="nav-item {!! str_contains(Request::url(),route('finance_accounting')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('finance_accounting')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-bank i-cl-2"></i>
                            <span class="nav-link-text">Accounting</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('finance_banking')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('finance_banking')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-bank i-cl-2"></i>
                            <span class="nav-link-text">Banking</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('finance_sales')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('finance_sales')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-dollar i-cl-3"></i>
                            <span class="nav-link-text">Sales</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('finance_employees')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('finance_employees')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-user i-cl-4"></i>
                            <span class="nav-link-text">Employees</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('finance_invoice')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('finance_invoice')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-print i-cl-5"></i>
                            <span class="nav-link-text">Invoice</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('finance_insurance')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('finance_insurance')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-money i-cl-6"></i>
                            <span class="nav-link-text">Insurance</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('finance_billing')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('finance_billing')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-dollar i-cl-7"></i>
                            <span class="nav-link-text">Billing</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('finance_expenses')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('finance_expenses')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-dollar i-cl-8"></i>
                            <span class="nav-link-text">Expenses</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('finance_budgets')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('finance_budgets')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-money i-cl-8"></i>
                            <span class="nav-link-text">Budgets</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('finance_taxes')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('finance_taxes')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-bank i-cl-2"></i>
                            <span class="nav-link-text">Taxes</span>
                        </a>
                    </li>
                @endif
                <!-- End Finance -->
                <!-- Start Public Health-->

                @if(str_contains(Request::url(),'publichealth'))
                    <li class="nav-item {!! str_contains(Request::url(),route('blood_donation_unit')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('blood_donation_unit')}}"  >
                            <i class="i-cl-2 fa fa-fw fa-plus-square "></i>
                            <span class="nav-link-text">Blood Donation Unit</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('comprehensive_care_centre')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('comprehensive_care_centre')}}"  >
                            <i class="i-cl-2 fa fa-fw fa-plus-square "></i>
                            <span class="nav-link-text">Comprehensive Care </span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('counselling')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('counselling')}}" data-parent="#exampleAccordion" >
                            <i class="fa-fw fa fa-heart i-cl-3"></i>
                            <span class="nav-link-text">Counselling Department</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('malaria_surveillance')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('malaria_surveillance')}}" data-parent="#exampleAccordion" >
                            <i class="fa-fw fa fa-heartbeat i-cl-4"></i>
                            <span class="nav-link-text">Malaria Surveillance</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('mother_and_child_health_clinic')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('mother_and_child_health_clinic')}}" data-parent="#exampleAccordion" >
                            <i class="fa-fw fa fa-heart i-cl-5"></i>
                            <span class="nav-link-text">Mother and Child</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('vaccines')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('vaccines')}}" data-parent="#exampleAccordion" >
                            <i class="fa-fw fa fa-plus-square i-cl-6"></i>
                            <span class="nav-link-text">Vaccines</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('voluntary_counselling_and_testing')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('voluntary_counselling_and_testing')}}" data-parent="#exampleAccordion" >
                            <i class="fa-fw fa fa-stethoscope i-cl-7"></i>
                            <span class="nav-link-text">VCT</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('youth_friendly_clinic')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('youth_friendly_clinic')}}" data-parent="#exampleAccordion" >
                            <i class="fa-fw fa fa-medkit i-cl-8"></i>
                            <span class="nav-link-text">Youth Friendly Clinic</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('cancertreatment_home')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('cancertreatment_home')}}" data-parent="#exampleAccordion" >
                            <i class="fa-fw fa fa-medkit i-cl-8"></i>
                            <span class="nav-link-text">MOH  cancer registry</span>
                        </a>
                    </li>
                @endif

                <!-- End Public Health -->

                <!-- Start Diagnostic Services-->
                @if(str_contains(Request::url(),'farewellparlour'))
                <!--End Diagnostic Services-->
                <!--Start Farewell Parlour-->
                <li class="nav-item {{ str_contains(Request::url(),route('farewellparlour')) == true? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link " href="{{ route('farewellparlour') }}">
                        <i class="i-cl-3 fa fa-fw fa-venus-mars"></i>
                        <span class="nav-link-text">Farewell Pallour</span>
                    </a>
                </li>
                <!--End Farewell Parlour-->
                @endif
                <!--Start Pharmaceutical Services-->
                @if(str_contains(Request::url(),route('pharmaceuticalservices')))
                    <li class="nav-item {!! str_contains(Request::url(),route('pharmacy_purchases')) == true?'active':'' !!}" data-toggle="tooltip" data-placement="right" title="Administration">
                        <a class="nav-link" href="{{route('pharmacy_purchases')}}" data-parent="#exampleAccordion">
                            <i class="fa fa-money i-cl-1"></i>
                            <span class="nav-link-text">Purchases</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('pharmacy_inventory')) == true?'active':'' !!}" data-toggle="tooltip" data-placement="right" title="Administration">
                        <a class="nav-link" href="{{route('pharmacy_inventory')}}" data-parent="#exampleAccordion">
                            <i class="fa fa-bars i-cl-1"></i>
                            <span class="nav-link-text">Inventory</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('pharmacy_withdrawal_form')) == true?'active':'' !!}" data-toggle="tooltip" data-placement="right" title="Administration">
                        <a class="nav-link" href="{{route('pharmacy_withdrawal_form')}}" data-parent="#exampleAccordion">
                            <i class="fa fa-money i-cl-1"></i>
                            <span class="nav-link-text">Pharmacy Withdrawal Form</span>
                        </a>
                    </li>
                @endif
                <!-- End Pharmaceutical Services -->
                <!--Start administration-->

                @if(Request::url()===route('administration_home'))
                    <li class="nav-item {!! str_contains(Request::url(),route('attendances')) == true?'active':'' !!}" data-toggle="tooltip" data-placement="right" title="Administration">
                        <a class="nav-link" href="{{route('attendances')}}" data-parent="#exampleAccordion">
                            <i class="fa fa-hospital-o i-cl-1"></i>
                            <span class="nav-link-text">Attendances</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('billing')) == true?'active':'' !!}" data-toggle="tooltip" data-placement="right" title="Administration">
                        <a class="nav-link" href="{{route('billing')}}" data-parent="#exampleAccordion">
                            <i class="fa fa-hospital-o i-cl-1"></i>
                            <span class="nav-link-text">Billing</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('official_use')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('official_use')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-plus-square i-cl-2"></i>
                            <span class="nav-link-text">Official Use</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('patient_information')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('patient_information')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-heart i-cl-3"></i>
                            <span class="nav-link-text">Patient Information</span>
                        </a>
                    </li>

                    <li class="nav-item {!! str_contains(Request::url(),route('employees')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('employees')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-user-md i-cl-3"></i>
                            <span class="nav-link-text">Employees</span>
                        </a>
                    </li>

                    <li class="nav-item {!! str_contains(Request::url(),route('recruitment')) == true?'active':'' !!}">
                        <a class="nav-link" href="{{route('recruitment')}}" data-parent="#exampleAccordion" >
                            <i class="fa fa-user-md i-cl-3"></i>
                            <span class="nav-link-text">Recruitment</span>
                        </a>
                    </li>



                @endif
                <!--end administration-->
                @if(str_contains(Request::url(),'patient_profile'))

                    <li class="nav-item {!! str_contains(Request::url(),route('patient_home')) == true?'active':'' !!}" data-toggle="tooltip" data-placement="right" title="home">
                        <a class="nav-link" href="{{route('patient_home')}}" data-parent="#exampleAccordion">
                            <i class="fa fa-home i-cl-1"></i>
                            <span class="nav-link-text">home</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('patient_appointments')) == true?'active':'' !!}" data-toggle="tooltip" data-placement="right" title="Appointments">
                        <a class="nav-link" href="{{route('patient_appointments')}}" data-parent="#exampleAccordion">
                            <i class="fa fa-calendar  i-cl-1"></i>
                            <span class="nav-link-text">appointments</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('patient_cards')) == true?'active':'' !!}" data-toggle="tooltip" data-placement="right" title="cards">
                        <a class="nav-link" href="{{route('patient_cards')}}" data-parent="#exampleAccordion">
                            <i class="fa fa-hospital-o i-cl-1"></i>
                            <span class="nav-link-text">cards</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('patient_booklets')) == true?'active':'' !!}" data-toggle="tooltip" data-placement="right" title="booklets">
                        <a class="nav-link" href="{{route('patient_booklets')}}" data-parent="#exampleAccordion">
                            <i class="fa fa-address-book i-cl-1"></i>
                            <span class="nav-link-text">booklets</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('patient_forms')) == true?'active':'' !!}" data-toggle="tooltip" data-placement="right" title="forms">
                        <a class="nav-link" href="{{route('patient_forms')}}" data-parent="#exampleAccordion">
                            <i class="fa fa-wpforms i-cl-1"></i>
                            <span class="nav-link-text">forms</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('emergency_services')) == true?'active':'' !!}" data-toggle="tooltip" data-placement="right" title="emergeency services">
                        <a class="nav-link" href="{{route('emergency_services')}}" data-parent="#exampleAccordion">
                            <i class="fa fa-ambulance i-cl-1"></i>
                            <span class="nav-link-text">emergency services</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('patient_homebased')) == true?'active':'' !!}" data-toggle="tooltip" data-placement="right" title="home based">
                        <a class="nav-link" href="{{route('patient_homebased')}}" data-parent="#exampleAccordion">
                            <i class="fa fa-h-square i-cl-1"></i>
                            <span class="nav-link-text">home based care</span>
                        </a>
                    </li>

                @endif
                <!--end patient profile-->
                <!--start stores-->


                @if(str_contains(Request::url(),'stores'))
                    <li class="nav-item {!! str_contains(Request::url(),route('stores_purchases')) == true?'active':'' !!}" data-toggle="tooltip" data-placement="right" title="Administration">
                        <a class="nav-link" href="{{route('stores_purchases')}}" data-parent="#exampleAccordion">
                            <i class="fa fa-money i-cl-1"></i>
                            <span class="nav-link-text">Purchases</span>
                        </a>
                    </li>
                    <li class="nav-item {!! str_contains(Request::url(),route('stores_inventory')) == true?'active':'' !!}" data-toggle="tooltip" data-placement="right" title="Administration">
                        <a class="nav-link" href="{{route('stores_inventory')}}" data-parent="#exampleAccordion">
                            <i class="fa fa-bars i-cl-1"></i>
                            <span class="nav-link-text">Inventory</span>
                        </a>
                    </li>
                @endif



                @if(str_contains(Request::url(),'clinical'))


                    {{--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Report">--}}
                        {{--<a class="nav-link" href=".">--}}
                            {{--<i class="ti i-cl-3 fa fa-arrow-left"></i>--}}
                            {{--<span class="nav-link-text">Go back</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}

                    @if(Request::url()===route('clinicalservices_home'))
                        <li class="nav-item {{ str_contains(Request::url() , route('clinicalservices_inpatient_home')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinicalservices_inpatient_home')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">Inpatient</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('clinicalservices_outpatient_home')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinicalservices_outpatient_home')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">Outpatient</span>
                            </a>
                        </li>
                    @endif
                    @if(Request::url() === route('clinicalservices_outpatient_home'))
                        <li class="nav-item {{ str_contains(Request::url() , route('clinicalservices_outpatient_doctorsoffice')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinicalservices_outpatient_doctorsoffice')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">doctors office</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('clinicalservices_outpatient_emergencydpt')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinicalservices_outpatient_emergencydpt')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">emergency department</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('clinicalservices_outpatient_orthoepedicdpt')) ? 'active' : 'clinicalservices_outpatient_orthoepedicdpt' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinicalservices_outpatient_orthoepedicdpt')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">orthoepedic department</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('clinicalservices_outpatient_nutritiondpt')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinicalservices_outpatient_nutritiondpt')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">nutrition department</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('clinicalservices_outpatient_occupationaldpt')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinicalservices_outpatient_occupationaldpt')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">occupational therapy department</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('clinicalservices_outpatient_physiotherapy')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinicalservices_outpatient_physiotherapy')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">physiotherapy</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('clinicalservices_outpatient_dental')) ? 'active' : 'clinicalservices_outpatient_dental' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinicalservices_outpatient_dental')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">dental service</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('clinicalservices_outpatient_outpatientclinic')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinicalservices_outpatient_outpatientclinic')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">outpatient clinic</span>
                            </a>
                        </li>
                    @endif
                    @if(Request::url() === route('clinicalservices_outpatient_emergencydpt'))
                        <li class="nav-item {{ str_contains(Request::url() , route('triage')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('triage')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">Triage</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('immunization_room')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('immunization_room')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">immunization room</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('injection_room')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('injection_room')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">injection room</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('minor_theatre')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('minor_theatre')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">minor theatre</span>
                            </a>
                        </li>

                    @endif
                    @if(Request::url() === route('clinicalservices_outpatient_outpatientclinic'))
                        <li class="nav-item {{ str_contains(Request::url() , route('wellbabyclinic')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('wellbabyclinic')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">well baby clinic</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('earnosethroat')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('earnosethroat')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">ear nose & throat</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('meadicaloutpatient')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('meadicaloutpatient')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">meadical outpatient</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('gynecology')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('gynecology')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">gynecology</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('pediatricoutpatient')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('pediatricoutpatient')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">pediatric outpatient</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('surgicaloutpatient')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('surgicaloutpatient')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">surgical outpatient</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('opthalmicclinic')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('opthalmicclinic')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">opthalmic clinic</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('tbclinic')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('tbclinic')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">tb clinic</span>
                            </a>
                        </li>

                    @endif
                    @if(Request::url() === route('clinicalservices_outpatient_doctorsoffice'))
                        <li class="nav-item {{ str_contains(Request::url() , route('doctorsoffice_administration')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('doctorsoffice_administration')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">administration</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('doctorsoffice_clinical')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('doctorsoffice_clinical')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">clinical</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('doctorsoffice_billing')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('doctorsoffice_billing')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">billing</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('doctorsoffice_patientprofile')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('doctorsoffice_patientprofile')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">patient profile</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('doctorsoffice_report')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('doctorsoffice_report')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">report</span>
                            </a>
                        </li>
                    @endif
                    @if(Request::url() === route('doctorsoffice_administration'))
                        <li class="nav-item {{ str_contains(Request::url() , route('doctors_administration_registration')) ? 'active' : 'doctors_administration_registration' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('doctors_administration_registration')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">registration</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('doctors_administration_scheduling')) ? 'active' : 'doctors_administration_scheduling' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('doctors_administration_scheduling')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">scheduling</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('doctors_administration_appointments')) ? 'active' : 'doctors_administration_appointments' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('doctors_administration_appointments')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">appointments</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('doctors_administration_attendance')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('doctors_administration_attendance')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">attendance</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('doctors_administration_alerts')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('doctors_administration_alerts')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">alerts</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('doctors_administration_reminders')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('doctors_administration_reminders')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">doctors_administration_reminders</span>
                            </a>
                        </li>
                    @endif
                    @if(Request::url() === route('doctorsoffice_clinical'))
                        <li class="nav-item {{ str_contains(Request::url() , route('clinical_consultationform')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinical_consultationform')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">consultation form</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('clinical_consultationrequestform')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinical_consultationrequestform')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">consultation request form</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('clinical_prescriptionform')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinical_prescriptionform')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">prescription form</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('clinical_radiologurequest')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinical_radiologurequest')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">radiology request form</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('clinical_radiologyreportsheet')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinical_radiologyreportsheet')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">radiology report sheet</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('clinical_labrequest')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinical_labrequest')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">laboratory request form</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('clinical_labreport')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinical_labreport')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">laboratory reports</span>
                            </a>
                        </li>


                    @endif
                    @if(Request::url() === route('doctorsoffice_billing'))
                        <li class="nav-item {{ str_contains(Request::url() , route('doctorsoffice_billling')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('doctorsoffice_billling')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">billing</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('doctorsoffice_invoicing')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('doctorsoffice_invoicing')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">invoicing</span>
                            </a>
                        </li>

                    @endif
                    @if(Request::url() === route('clinicalservices_inpatient_home'))
                        <li class="nav-item {{ str_contains(Request::url() , route('clinicalservices_ms_home')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinicalservices_ms_home')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">Medical Services</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('clinicalservices_ss_home')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinicalservices_ss_home')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">Surgical Services</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('clinicalservices_ps_home')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinicalservices_ps_home')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">Paediatric Services</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('clinicalservices_maternity_home')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinicalservices_maternity_home')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">Maternity Services</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('clinicalservices_ccs_home')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinicalservices_ccs_home')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">Critical Care Services</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('clinicalservices_ats_home')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinicalservices_ats_home')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">Anaesthesia Theatre Services</span>
                            </a>
                        </li>
                    @endif

                    @if(Request::url() === route('clinicalservices_ms_home'))
                        <li class="nav-item {{ str_contains(Request::url() , route('clinicalservices_ms_medical_ward')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinicalservices_ms_medical_ward')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">Medical Ward</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('clinicalservices_ms_renal_unit')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinicalservices_ms_renal_unit')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">Renal Unit</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('clinicalservices_ms_oncology_unit')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinicalservices_ms_oncology_unit')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">Oncology Unit</span>
                            </a>
                        </li>
                    @endif

                    @if(Request::url() === route('clinicalservices_ss_home'))
                        <li class="nav-item {{ str_contains(Request::url() , route('clinicalservices_ss_sw')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinicalservices_ss_sw')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">Surgical Ward</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('clinicalservices_ss_bu')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinicalservices_ss_bu')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">Burns Unit</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('clinicalservices_ss_ou')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinicalservices_ss_ou')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">Orthopaedic Ward</span>
                            </a>
                        </li>
                    @endif

                    @if(Request::url() === route('clinicalservices_ps_home'))
                        <li class="nav-item {{ str_contains(Request::url() , route('clinicalservices_ps_pw')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinicalservices_ps_pw')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">Paediatric Ward</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('clinicalservices_ps_nbu')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinicalservices_ps_nbu')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">New Born Unit (NBU)</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('clinicalservices_ps_nicu')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinicalservices_ps_nicu')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">Neonatal Intensive Care Unit (NICU)</span>
                            </a>
                        </li>
                    @endif

                    @if(Request::url() === route('clinicalservices_maternity_lw'))
                        <li class="nav-item {{ str_contains(Request::url() , route('clinicalservices_maternity_pdr')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinicalservices_maternity_pdr')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">Pre Delivery Room</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('clinicalservices_maternity_dr')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinicalservices_maternity_dr')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">Delivery Room</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('clinicalservices_maternity_podr')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinicalservices_maternity_podr')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">Post Delivery Room</span>
                            </a>
                        </li>
                    @endif

                    @if(Request::url() === route('clinicalservices_maternity_home'))
                        <li class="nav-item {{ str_contains(Request::url() , route('clinicalservices_maternity_lw')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinicalservices_maternity_lw')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">Labor Ward</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('clinicalservices_maternity_gw')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinicalservices_maternity_gw')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">Gynecology Ward</span>
                            </a>
                        </li>
                    @endif

                    @if(Request::url() === route('clinicalservices_ccs_home'))
                        <li class="nav-item {{ str_contains(Request::url() , route('clinicalservices_ccs_icu')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinicalservices_ccs_icu')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">Intensive Care Unit (I.C.U)</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('clinicalservices_ccs_hdu')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinicalservices_ccs_hdu')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">High Dependency Unit (H.D.U)</span>
                            </a>
                        </li>
                    @endif

                    @if(Request::url() === route('clinicalservices_ats_home'))
                        <li class="nav-item {{ str_contains(Request::url() , route('clinicalservices_ats_mt')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinicalservices_ats_mt')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">Maternity Theatre</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('clinicalservices_ats_opthamology')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinicalservices_ats_opthamology')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">Opthamology</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('clinicalservices_ats_cardiology')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinicalservices_ats_cardiology')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">Cardiology</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('clinicalservices_ats_ent')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinicalservices_ats_ent')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">ENT (Ear, Nose and Throat)</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('clinicalservices_ats_orthopaedics')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinicalservices_ats_orthopaedics')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">Orthopaedics</span>
                            </a>
                        </li>
                        <li class="nav-item {{ str_contains(Request::url() , route('clinicalservices_ats_general')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">
                            <a class="nav-link" href="{{ route('clinicalservices_ats_general')}}">
                                <i class="ti i-cl-11 fa fa-id-card-o"></i>
                                <span class="nav-link-text">General</span>
                            </a>
                        </li>
                    @endif

                    {{--<li class="nav-item {{ str_contains(Request::url() , route('surgical_home')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">--}}
                    {{--<a class="nav-link" href="{{ route('surgical_home')}}">--}}
                    {{--<i class="i-cl-4 fa fa-fw fa-location-arrow"></i>--}}
                    {{--<span class="nav-link-text">Surgical Services</span>--}}
                    {{--</a>--}}
                    {{--</li><li class="nav-item {{ str_contains(Request::url() , route('medical_home')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">--}}
                    {{--<a class="nav-link" href="{{ route('medical_home')}}">--}}
                    {{--<i class="i-cl-4 fa fa-fw fa-stethoscope"></i>--}}
                    {{--<span class="nav-link-text">Medical</span>--}}
                    {{--</a>--}}
                    {{--</li><li class="nav-item {{ str_contains(Request::url() , route('paediatric_home')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">--}}
                    {{--<a class="nav-link" href="{{ route('paediatric_home')}}">--}}
                    {{--<i class="i-cl-9 fa fa-fw fa-child"></i>--}}
                    {{--<span class="nav-link-text">Paediatric</span>--}}
                    {{--</a>--}}
                    {{--</li><li class="nav-item {{ str_contains(Request::url() , route('nutrition_home')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">--}}
                    {{--<a class="nav-link" href="{{ route('nutrition_home')}}">--}}
                    {{--<i class="fa fa-fw fa-spoon"></i>--}}
                    {{--<span class="nav-link-text"> Nutrition</span>--}}
                    {{--</a>--}}
                    {{--</li><li class="nav-item {{ str_contains(Request::url() , route('physiotherapy_home')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">--}}
                    {{--<a class="nav-link" href="{{ route('physiotherapy_home')}}">--}}
                    {{--<i class="i-cl-8 fa fa-fw fa-wheelchair"></i>--}}
                    {{--<span class="nav-link-text"> Physiotherapy</span>--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item {{ str_contains(Request::url() , route('ot_home')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">--}}
                    {{--<a class="nav-link" href="{{ route('ot_home')}}">--}}
                    {{--<i class="i-cl-1 fa fa-fw fa-support"></i>--}}
                    {{--<span class="nav-link-text">OT</span>--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item {{ str_contains(Request::url() , route('maternity_home')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">--}}
                    {{--<a class="nav-link" href="{{ route('maternity_home')}}">--}}
                    {{--<i class="i-cl-5 fa fa-fw fa-female"></i>--}}
                    {{--<span class="nav-link-text">Maternity</span>--}}
                    {{--</a>--}}
                    {{--</li>--}}


                    {{--<li class="nav-item {{ str_contains(Request::url() , route('patient_file_home')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">--}}
                        {{--<a class="nav-link" href="{{ route('patient_file_home')}}">--}}
                            {{--<i class="ti i-cl-11 fa fa-fw  fa-file-word-o"></i>--}}
                            {{--<span class="nav-link-text">Patient File</span>--}}
                        {{--</a>--}}
                    {{--<li class="nav-item {{ str_contains(Request::url() , route('patient_charge_sheet_home')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">--}}
                        {{--<a class="nav-link" href="{{ route('patient_charge_sheet_home')}}">--}}
                            {{--<i class="ti i-cl-11 fa fa-fw  fa-file-word-o"></i>--}}
                            {{--<span class="nav-link-text">Patient Charge Sheet</span>--}}
                        {{--</a>--}}
                    {{--<li class="nav-item {{ str_contains(Request::url() , route('registers')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">--}}
                        {{--<a class="nav-link" href="{{ route('registers')}}">--}}
                            {{--<i class="ti i-cl-11 fa fa-registered"></i>--}}
                            {{--<span class="nav-link-text">Registers</span>--}}
                        {{--</a>--}}
                    {{--<li class="nav-item {{ str_contains(Request::url() , route('summaryforms')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">--}}
                        {{--<a class="nav-link" href="{{ route('summaryforms')}}">--}}
                            {{--<i class="ti i-cl-11 fa fa-wpforms"></i>--}}
                            {{--<span class="nav-link-text">Summary Forms</span>--}}
                        {{--</a>--}}
                    {{--<li class="nav-item {{ str_contains(Request::url() , route('tallysheets')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">--}}
                        {{--<a class="nav-link" href="{{ route('tallysheets')}}">--}}
                            {{--<i class="ti i-cl-11 fa fa-plus-circle"></i>--}}
                            {{--<span class="nav-link-text">Tally Sheets</span>--}}
                        {{--</a>--}}
                    {{--<li class="nav-item {{ str_contains(Request::url() , route('indexcards')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">--}}
                        {{--<a class="nav-link" href="{{ route('indexcards')}}">--}}
                            {{--<i class="ti i-cl-11 fa fa-id-card-o"></i>--}}
                            {{--<span class="nav-link-text">Index Cards</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}


                    {{--<li class="nav-item {{ str_contains(Request::url() , route('outpatient_clinics')) ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Report">--}}
                    {{--<a class="nav-link" href="{{ route('outpatient_clinics')}}">--}}
                    {{--<i class="ti i-cl-10 fa fa-fw fa-hospital-o"></i>--}}
                    {{--<span class="nav-link-text">OutPatient</span>--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    <!-- End Clinical Services -->

                @endif

            </ul>
        </div>

        <!-- =============== End Side Menu ============== -->

        <!-- =============== Search Bar ============== -->
        <ul class="navbar-nav ml-left">
            <li class="nav-item">
                <form class="form-inline my-2 my-lg-0 mr-lg-2">
                    <div class="input-group">
						<span class="input-group-btn">
							<button class="btn btn-primary" type="button">
							  <i class="ti-search"></i>
							</button>
						</span>
                        <input class="form-control" type="text" placeholder="Type In TO Search">
                    </div>
                </form>
            </li>
        </ul>
        <div class="" style="margin-left: 20%;">
            <a class=" navbar-brand" href="{{route('home')}}" style="color: #0080ff">{{ Auth::user()->institution->name }}</a>
            <img src="{{ asset('uploads/logos/')}}/{{Auth::user()->institution->avatar }}" alt="user-img" height="50" class="img-circle">

        </div>
        <!-- =============== End Search Bar ============== -->

        <!-- =============== Header Rightside Menu ============== -->
        <ul class="navbar-nav ml-auto">

            <!-- Messages -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-3 a-topbar__nav a-nav" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="gredient-cl ti-email"></i>
                    <span class="a-nav__link-badge a-badge a-badge--pink">3</span>
                    <span class="hidden-lg hidden-md mrg-l-10">New Notification</span>
                </a>
                <div class="dropdown-menu animated flipInX" aria-labelledby="messagesDropdown">
                    <div class="dropdown-header text-center pink-bg">
                        <span class="a-dropdown__header-title">3 New</span>
                        <span class="a-dropdown__header-subtitle">User Messages</span>
                    </div>
                    <div class="ground-list ground-list-hove" id="message-box">
                        <div class="ground ground-single-list">
                            <a href="#">
                                <img class="ground-avatar" src="{{asset('assets/dist/img/user-1.jpg')}}" alt="...">
                                <span class="profile-status bg-online pull-right"></span>
                            </a>

                            <div class="ground-content">
                                <h6><a href="#">Maryam Amiri</a></h6>
                                <small class="text-fade">Co-Founder</small>
                            </div>

                            <div class="ground-right">
                                <span class="small">Online</span>
                            </div>
                        </div>

                        <div class="ground ground-single-list">
                            <a href="#">
                                <img class="ground-avatar" src="{{asset('assets/dist/img/user-2.jpg')}}" alt="...">
                                <span class="profile-status bg-offline pull-right"></span>
                            </a>

                            <div class="ground-content">
                                <h6><a href="#">Maryam Amiri</a></h6>
                                <small class="text-fade">Co-Founder</small>
                            </div>

                            <div class="ground-right">
                                <span class="small">10 Min Ago</span>
                            </div>
                        </div>

                        <div class="ground ground-single-list">
                            <a href="#">
                                <img class="ground-avatar" src="{{asset('assets/dist/img/user-3.jpg')}}" alt="...">
                                <span class="profile-status bg-working pull-right"></span>
                            </a>

                            <div class="ground-content">
                                <h6><a href="#">Maryam Amiri</a></h6>
                                <small class="text-fade">Co-Founder</small>
                            </div>

                            <div class="ground-right">
                                <span class="small">20 Min Ago</span>
                            </div>
                        </div>

                        <div class="ground ground-single-list">
                            <a href="#">
                                <img class="ground-avatar" src="{{asset('assets/dist/img/user-4.jpg')}}" alt="...">
                                <span class="profile-status bg-busy pull-right"></span>
                            </a>

                            <div class="ground-content">
                                <h6><a href="#">Maryam Amiri</a></h6>
                                <small class="text-fade">Co-Founder</small>
                            </div>

                            <div class="ground-right">
                                <span class="small">18 Min Ago</span>
                            </div>
                        </div>

                        <div class="ground ground-single-list">
                            <a href="#">
                                <img class="ground-avatar" src="{{asset('assets/dist/img/user-5.jpg')}}" alt="...">
                                <span class="profile-status bg-online pull-right"></span>
                            </a>

                            <div class="ground-content">
                                <h6><a href="#">Maryam Amiri</a></h6>
                                <small class="text-fade">Co-Founder</small>
                            </div>

                            <div class="ground-right">
                                <span class="small">Online</span>
                            </div>
                        </div>
                    </div>
                    <a class="dropdown-item view-all" href="#">View all Messages</a>
                </div>
            </li>
            <!-- End Messages -->

            <!-- Notification -->
            <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle mr-lg-3 a-topbar__nav a-nav" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="gredient-cl ti-bell"></i>
                    <span class="a-nav__link-badge a-badge a-badge--accent a-animate-blink">6</span>
                    <span class="hidden-lg hidden-md mrg-l-10">New Notification</span>
                </a>

                <div class="dropdown-menu animated flipInX" aria-labelledby="alertsDropdown">
                    <div class="dropdown-header text-center accent-bg">
                        <span class="a-dropdown__header-title">6 New</span>
                        <span class="a-dropdown__header-subtitle">User Notifications</span>
                    </div>

                    <div class="ground-list ground-list-hove" id="notification-box">
                        <div class="ground ground-single-list">
                            <a href="#">
                                <div class="btn-circle-40 btn-success"><i class="ti-calendar"></i></div>
                            </a>

                            <div class="ground-content">
                                <h6><a href="#">Maryam Amiri</a></h6>
                                <small class="text-fade">Check New Admin Dashboard..</small>
                                <span class="small">Just Now</span>
                            </div>
                        </div>

                        <div class="ground ground-single-list">
                            <a href="#">
                                <div class="btn-circle-40 btn-danger"><i class="ti-calendar"></i></div>
                            </a>

                            <div class="ground-content">
                                <h6><a href="#">Maryam Amiri</a></h6>
                                <small class="text-fade">You can Customize..</small>
                                <span class="small">02 Min Ago</span>
                            </div>
                        </div>

                        <div class="ground ground-single-list">
                            <a href="#">
                                <div class="btn-circle-40 btn-info"><i class="ti-calendar"></i></div>
                            </a>

                            <div class="ground-content">
                                <h6><a href="#">Maryam Amiri</a></h6>
                                <small class="text-fade">Need Responsive Business Tem...</small>
                                <span class="small">10 Min Ago</span>
                            </div>
                        </div>

                        <div class="ground ground-single-list">
                            <a href="#">
                                <div class="btn-circle-40 btn-warning"><i class="ti-calendar"></i></div>
                            </a>

                            <div class="ground-content">
                                <h6><a href="#">Maryam Amiri</a></h6>
                                <small class="text-fade">Next Meeting on Tuesday..</small>
                                <span class="small">15 Min Ago</span>
                            </div>
                        </div>

                        <div class="ground ground-single-list">
                            <a href="#">
                                <div class="btn-circle-40 btn-purple"><i class="ti-calendar"></i></div>
                            </a>

                            <div class="ground-content">
                                <h6><a href="#">Maryam Amiri</a></h6>
                                <small class="text-fade">You can Change Your Pass..</small>
                                <span class="small">18 Min Ago</span>
                            </div>
                        </div>
                    </div>
                    <a class="dropdown-item view-all" href="#">View all Notifications</a>
                </div>
            </li>
            <!-- End Notification -->


            <li class="nav-item dropdown">
                @guest
                    <!--show this if user is not loggd in-->
                <a class="nav-link dropdown-toggle mr-lg-0 user-img a-topbar__nav a-nav" id="userDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <b class="f-size-17">Account</b>
                </a>

                <ul class="dropdown-menu dropdown-user animated flipInX" aria-labelledby="userDropdown">
                    <li><a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    <li><a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                </ul>
                @else


                    <!--if user is logged in-->
                <a class="nav-link dropdown-toggle mr-lg-0 user-img a-topbar__nav a-nav" id="userDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('uploads//avatars/')}}/{{Auth::user()->avatar}}" alt="user-img" width="36" class="img-circle">
                    <b class="f-size-17">{{ Auth::user()->name }}</b>
                </a>
                <ul class="dropdown-menu dropdown-user animated flipInX" aria-labelledby="userDropdown">

                    <li class="dropdown-header">
                        <div class="header-user-pic">
                            <img src="{{ asset('uploads//avatars/')}}/{{Auth::user()->avatar}}" alt="user-img" width="36" class="img-circle">
                        </div>
                        <div class="header-user-det">
                            <span class="a-dropdown__header-title">{{ Auth::user()->name }}</span>
                            <span class="a-dropdown__header-subtitle">{{ Auth::user()->roles->role_name }}</span>
                        </div>
                    </li>
                    @if(Auth::user()->is_admin==1)
                        <li><a class="dropdown-item" href="{{ route('hospital_profile') }}"><i class="ti-settings"></i> Hospital Settings</a></li>
                    @endif
                    <li><a class="dropdown-item" href="{{ route('profile') }}"><i class="ti-user"></i> My Profile</a></li>
                    <li><a class="dropdown-item" href="#"><i class="ti-email"></i> Inbox</a></li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off"></i> {{ __('Logout') }}</a>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>

                    @endguest
                </ul>
            </li>
        </ul>
        <!-- =============== End Header Rightside Menu ============== -->
    </div>
</nav>
<!-- =====================================================
                    End Navigations
======================================================= -->
<div class="content-wrapper">