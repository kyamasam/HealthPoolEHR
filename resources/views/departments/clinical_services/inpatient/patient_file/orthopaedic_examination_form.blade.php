@extends('layouts.master')
@section('content')
    <!-- Title &
    Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">ORTHOEPEDIC EXAMINATION</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>ORTHOEOEDIC EXAMINATION</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered">
                            <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="content">
                        <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Add more Items</button>
                        {{--<button class="btn btn-info" data-toggle="modal" data-target="#myModal">Print</button>--}}
                    </div>
                </div>
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-lg">

                        <!— Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Add  Information</h4>
                            </div>
                            <div class="container-fluid">
                                <h1 class="text-center">orthoepedic clinic</h1>
                                <form action="{{route('orthopaedic_examination_form_post')}}" method="post" >{!! csrf_field() !!}
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="">compalints</label>
                                            <input name="compalints" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">name</label>
                                            <input name="name" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">date</label>
                                            <input name="date" type="date" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">age</label>
                                            <input name="age" type="number" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">sex</label>
                                            <input name="sex" type="" class="form-control">
                                        </div>

                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="">height</label>
                                            <input name="height" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">weight</label>
                                            <input name="weight" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">temp</label>
                                            <input name="temp" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">pulse rate</label>
                                            <input name="pulse_rate" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">resp rate</label>
                                            <input name="resp_rate" type="text" class="form-control">
                                        </div>

                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="">major hand R or L</label>
                                            <input name="major_hand_r_or_l" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">blood pressure lying</label>
                                            <input name="blood_pressure_lying" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">standing</label>
                                            <input name="standing" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">diagnosis</label>
                                            <input name="diagnosis" type="text" class="form-control">
                                        </div>


                                    </div>
                                    <h2>patient standing</h2>
                                    <h3>appearance</h3>
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="">well nourished</label>
                                            <input name="well_nourished" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">diabiliated</label>
                                            <input name="diabiliated" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">fair</label>
                                            <input name="fair" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">disfigured</label>
                                            <input name="disfigured" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">poor</label>
                                            <input name="poor" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">obese</label>
                                            <input name="obese" type="text" class="form-control">
                                        </div>

                                    </div>
                                    <h2>spinal posture</h2>

                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="">Head tilt L N R</label>
                                            <input name="head_tilt_l_n_r" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">rotation L N R</label>
                                            <input name="rotation_l_n_r" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">Shoulder tilt L N R</label>
                                            <input name="shoulder_tilt_l_n_r" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">rotation L N R</label>
                                            <input name="rotation_l_n_r_1" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Hip tilt L N R</label>
                                            <input name="hip_tilt_l_n_r" type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">rotation L N R</label>
                                            <input name="rotation_l_n_r_2" type="text" class="form-control">
                                        </div>

                                    </div>
                                    <h2>reflexes</h2>
                                    <table class="table table-bordered">

                                        <thead>

                                        </thead>
                                        <tbody>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">biceps(c 5-6)</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="biceps_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="biceps_r" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">triceps(c 7-8)</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="triceps_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="triceps_r" type="text" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">radial(c 5-6)</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="radial_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="radial_r" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">patellar(1-4)</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="patellar_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="patellar_r" type="text" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">achelles(si)</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="achelles_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="achelles_r" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">dejerines dejerines</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="dejerines_dejerines_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="dejerines_dejerines_r" type="text" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">Bechtew's</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="Bechtew_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="Bechtew_r" type="text" class="form-check-label">
                                                </div>
                                            </td>


                                        </tr>

                                        </tbody>
                                    </table>
                                    <h2>tests</h2>
                                    <table class="table table-bordered">

                                        <thead>

                                        </thead>
                                        <tbody>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">adisons</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="adisons_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">wrights</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="wrights_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="wrights_r" type="text" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">allens(vascular)</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="allens_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="allens_r" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">bdens test</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="bdens_test_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="bdens_test_r" type="text" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">cervical compressions</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="cervical_compressions_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="cervical_compressions_r" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">jacksons compressions</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="jacksons_compressions_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="jacksons_compressions_r" type="text" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">rotation</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="rotation_l_3" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="rotation_r_3" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">cervical decompressions</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="cervical_decompressions_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="cervical_decompressions_r" type="text" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">George's test</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="George_test_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="George_test_r" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">arc of abduction</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="arc_of_abduction_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="arc_of_abduction_r" type="text" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">deltoid extension</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="deltoid_extension_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="deltoid_extension_r" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">wrist extension</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="wrist_wrist_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="wrist_wrist_r" type="text" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">wrist flexion</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="wrist_flexion_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="wrist_flexion_r" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">finger cud</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="finger_cud_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="finger_cud_r" type="text" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">finger spread</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="finger_spread_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="finger_spread_r" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">cold hands</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="cold_hands_l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="cold_hands_r" type="text" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>


                                        </tbody>
                                    </table>
                                    <h2>LUMBAR RANGE OF MOTION</h2>
                                    <table class="table table-bordered">

                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th> DEG</th>
                                            <th> PAIN</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">flexion(93)</label>

                                                    <input name="flexion_a" type="text" class="form-check-label">

                                                    <input name="flexion_b" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">extension()35</label>

                                                    <input name="extension_a" type="text" class="form-check-label">

                                                    <input name="extension_b" type="text" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">flexion(93)</label>

                                                    <input name="flexion_1_a" type="text" class="form-check-label">

                                                    <input name="flexion_1_b" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">extension(35)</label>

                                                    <input name="extension_1_a" type="text" class="form-check-label">

                                                    <input name="extension_1_b" type="text" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">right lateral(40)</label>

                                                    <input name="right_lateral_a" type="text" class="form-check-label">

                                                    <input name="right_lateral_b" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">left lateral(35)</label>

                                                    <input name="left_lateral_a" type="text" class="form-check-label">

                                                    <input name="left_lateral_b" type="text" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">right (35)</label>

                                                    <input name="right_a" type="text" class="form-check-label">

                                                    <input name="right_b" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">left(35)</label>

                                                    <input name="left_a" type="text" class="form-check-label">

                                                    <input name="left_b" type="text" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">adams sign</label>

                                                    <input name="adams_sign_a" type="text" class="form-check-label">

                                                    <input name="adams_sign_b" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">from front</label>

                                                    <input name="from_front_a" type="text" class="form-check-label">

                                                    <input name="from_front_b" type="text" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>
                                        </tbody>
                                    </table>
                                    <h2>PATIENT SEATED</h2>
                                    <table class="table table-bordered">


                                        <tbody>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">Dynamometer grip 1st</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="Dynamometer_grip_1a" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="Dynamometer_grip_1b" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">Dynamometer grip 2nd</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="Dynamometer_grip_2a" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="Dynamometer_grip_2b" type="text" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">Dynamometer grip 3rd</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="Dynamometer_grip_3a" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="Dynamometer_grip_3b" type="text" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>

                                        </tbody>
                                    </table>
                                    <h2>peripheral sensitivity test</h2>
                                    <table class="table table-bordered">


                                        <tbody>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">arms</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="arms_1l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="arms_1r" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">neck</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="neck_1l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="neck_1r" type="text" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">leg</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="leg_1l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="leg_1r" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">back</label>
                                                    <label class="form-check-label">L</label>
                                                    <input name="back_1l" type="text" class="form-check-label">
                                                    <label class="form-check-label">R</label>
                                                    <input name="back_1r" type="text" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">hypertensia</label>

                                                    <input name="hypertensia" type="text" class="form-check-label">

                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">paresthia</label>

                                                    <input name="paresthia" type="text" class="form-check-label">

                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">positional</label>

                                                    <input name="positional" type="text" class="form-check-label">

                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">anesthia</label>

                                                    <input name="anesthia" type="text" class="form-check-label">

                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">hypesthesia</label>

                                                    <input name="hypesthesia" type="text" class="form-check-label">

                                                </div>
                                            </td>


                                        </tr>
                                        </tbody>
                                    </table>
                                    <h2>NEOROLOGICAL</h2>
                                    <table class="table table-bordered">


                                        <tbody>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">ROMBERG</label>

                                                    <input name="ROMBERG" type="text" class="form-check-label">

                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">finger to nose</label>

                                                    <input name="finger_to_nose" ype="text" class="form-check-label">

                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">toe to shin</label>

                                                    <input name="toe_to_shin" type="text" class="form-check-label">

                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">finger to finger</label>

                                                    <input name="finger_to_finger" type="text" class="form-check-label">

                                                </div>
                                            </td>

                                        </tr>

                                        </tbody>
                                    </table>
                                    <h2>ORTHOEPEDIC TEST</h2>
                                    <table class="table table-bordered">


                                        <tbody>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">kEMPS</label>
                                                    <label class="form-check-label">R</label>
                                                    <input name="kEMPS_r" type="text" class="form-check-label">
                                                    <label class="form-check-label">L</label>
                                                    <input name="kEMPS_l" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">TRENDELENBERG</label>
                                                    <label class="form-check-label">R</label>
                                                    <input name="TRENDELENBERG_r" type="text" class="form-check-label">
                                                    <label class="form-check-label">L</label>
                                                    <input name="TRENDELENBERG_l" type="text" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">LEWINS TEST </label>
                                                    <label class="form-check-label">R</label>
                                                    <input name="LEWINS_test_r" type="text" class="form-check-label">
                                                    <label class="form-check-label">L</label>
                                                    <input name="LEWINS_test_l" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">MINORS SIGN</label>
                                                    <label class="form-check-label">R</label>
                                                    <input name="MINORS_SIGN_r" type="text" class="form-check-label">
                                                    <label class="form-check-label">L</label>
                                                    <input name="MINORS_SIGN_l" type="text" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>

                                        </tbody>
                                    </table>
                                    <h2>ORTHOEPEDIC TEST</h2>
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>AMBULATION</th>
                                            <th> GATE</th>

                                        </tr>

                                        </thead>

                                        <tbody>
                                        <tr>

                                            <td>
                                                <div class="form-check">

                                                    <input name="NORMAL_a" type="text" class="form-check-label">
                                                    <label class="form-check-label">NORMAL</label>

                                                </div>
                                            </td>
                                            <td>    <div class="form-check">
                                                    <input type="text" class="form-check-label">
                                                    <label name="NORMAL_b" class="form-check-label">NORMAL</label>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">

                                                    <input name="IMPAIRED_a" type="text" class="form-check-label">
                                                    <label class="form-check-label">IMPAIRED</label>

                                                </div>
                                            </td>
                                            <td>    <div class="form-check">
                                                    <input name="IMPAIRED_b" type="text" class="form-check-label">
                                                    <label class="form-check-label">VISUAL LIMP</label>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">

                                                    <input name="PAIN_a" type="text" class="form-check-label">
                                                    <label class="form-check-label">PAIN</label>

                                                </div>
                                            </td>
                                            <td>    <div class="form-check">
                                                    <input name="PAIN_b" type="text" class="form-check-label">
                                                    <label class="form-check-label">WALK TENSION</label>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">

                                                    <input name="NEED_ASSISTANCE" type="text" class="form-check-label">
                                                    <label class="form-check-label">NEED ASSISTANCE</label>

                                                </div>
                                            </td>
                                            <td>    <div class="form-check">
                                                    <input name="WALK_TOE" type="text" class="form-check-label">
                                                    <label class="form-check-label">WALK TOE</label>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">HEEL WALK</label>
                                                    <label class="form-check-label">R</label>
                                                    <input name="HEEL_WALK_r" type="text" class="form-check-label">
                                                    <label class="form-check-label">L</label>
                                                    <input name="HEEL_WALK_l" type="text" class="form-check-label">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">TOE WALK</label>
                                                    <label class="form-check-label">R</label>
                                                    <input name="TOE_WALK_r" type="text" class="form-check-label">
                                                    <label class="form-check-label">L</label>
                                                    <input name="TOE_WALK_l" type="text" class="form-check-label">
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="form-check">

                                                    <input name="BABY_WALK" type="text" class="form-check-label">
                                                    <label class="form-check-label">BABY WALK</label>

                                                </div>
                                            </td>


                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection