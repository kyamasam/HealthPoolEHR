@extends('layouts.master')
@section('content')
    <!-- Title &
    Breadcrumbs-->
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <h4 class="theme-cl">CBE RESULTS</h4>
        </div>
    </div>
    <!-- Title & Breadcrumbs-->
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>CBE RESULTS</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered table-responsive">
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
<div class="col-md-12">
    <div class="card">
        <form >
            <div class="col-m-3 offset-md-12">
                <H1 class="mt-20 ">
                    CBE RESULTS DOCUMENTATION FORM
                </H1>
                <div class="form-group">
                    <label>Pt name:</label>
                    <input type="text" name="pt_name"   class="form-control"  aria-describedby="" placeholder="">
                </div>
                <div class="form-group">
                    <label>ID#:</label>
                    <input type="text" name="id"   class="form-control"  aria-describedby="" placeholder="">
                </div>
                <div class="form-group">
                    <label>DOB:</label>
                    <input type="date" name="dob"   class="form-control"  aria-describedby="" placeholder="">
                </div>
                <h2></h2>
                <table class="table table-bordered">

                    <thead>
                    <tr>
                        <th>purpose of visit</th>
                        <th> <label>Date of lact CBE:</label>
                            <input type="date" name="date_of_lact"   class="form-control"  aria-describedby="" placeholder=""></th>
                        <th>breast cancer history</th>

                    </tr>

                    </thead>
                    <tbody>
                    <tr>

                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label" name="annual_screening" >
                                <label class="form-check-label">annual screening</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label" name="" >
                                <label class="form-check-label">normal </label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <label class="form-check-label">Patient age of Dx</label>
                                <input type="text" class="form-check-label" value="age" name="patient_age_dx">
                                <input type="checkbox" class="form-check-label" value="dx" name="patient_age_dx">
                                <label class="form-check-label">N/A</label>
                            </div>
                        </td>
                    </tr>
                    <tr>

                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label" name="">
                                <label class="form-check-label">new problem</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label" name="">
                                <label class="form-check-label">abnormal </label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <label class="form-check-label">mother age of Dx</label>
                                <input type="text" class="form-check-label" name="">
                                <input type="checkbox" class="form-check-label" name="">
                                <label class="form-check-label">N/A</label>
                            </div>
                        </td>
                    </tr>
                    <tr>

                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label" name="">
                                <label class="form-check-label">recall</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label" name="">
                                <label class="form-check-label">unknown </label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <label class="form-check-label">sister(s) age of Dx</label>
                                <input type="text" class="form-check-label" name="">
                                <input type="checkbox" class="form-check-label" name="">
                                <label class="form-check-label">N/A</label>
                            </div>
                        </td>
                    </tr>
                    </tr>
                    <tr>

                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label" name="">
                                <label class="form-check-label">short term F/U</label>
                                <input type="text" class="form-check-label" name="">
                                <label class="form-check-label">mos</label>
                            </div>
                        </td>
                        <td>

                        </td>
                        <td>
                            <div class="form-check">
                                <label class="form-check-label">daughter(s) age of Dx</label>
                                <input type="text" class="form-check-label" name="">
                                <input type="checkbox" class="form-check-label" name="">
                                <label class="form-check-label">N/A</label>
                            </div>
                        </td>
                    </tr>
                    <tr>

                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label" name="">
                                <label class="form-check-label">other</label>
                                <input type="text" class="form-check-label" name="">
                            </div>
                        </td>
                        <td>

                        </td>
                        <td>
                            <div class="form-check">
                                <label class="form-check-label">aunt(s) age of Dx</label>
                                <input type="text" class="form-check-label" name="">
                                <input type="checkbox" class="form-check-label" name="">
                                <label class="form-check-label">N/A</label>
                            </div>
                        </td>
                    </tr>
                    <tr>

                        <td>

                        </td>
                        <td>

                        </td>
                        <td>
                            <div class="form-check">
                                <label class="form-check-label">male relative(s) age of Dx</label>
                                <input type="text" class="form-check-label" name="">
                                <input type="checkbox" class="form-check-label" name="">
                                <label class="form-check-label">N/A</label>
                            </div>
                        </td>
                    </tr>


                    </tbody>
                </table>

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>patient concerns</th>
                        <th> R</th>
                        <th> L</th>
                        <th> Cyclic</th>
                        <th>Date pt found</th>
                        <th> Related Breat History</th>
                    </tr>

                    </thead>
                    <tbody>
                    <tr>

                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label" name="">
                                <label class="form-check-label">none</label>
                            </div>
                        </td>


                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label" name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label" name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label" name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="date" class="form-check-label" name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <label class="form-check-label">last mammogram</label>
                                <input type="text" class="form-check-label" name="">
                                <label class="form-check-label">(mo/yr)</label>

                            </div>
                        </td>
                    </tr>
                    <tr>

                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label" name="">
                                <label class="form-check-label">Lump</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label" name="">
                            </div>
                        </td>

                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label" name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label" name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="date" class="form-check-label" name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <label class="form-check-label">last menstrual period</label>
                                <input type="text" class="form-check-label" name="">
                                <label class="form-check-label">(mo/yr)</label>
                            </div>
                        </td>
                    </tr>
                    <tr>

                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label" name="">
                                <label class="form-check-label">Nipple discharge</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label" name="">
                            </div>
                        </td>


                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label" name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label" name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="date" class="form-check-label" name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <label class="form-check-label">#Breats byopsy(s):</label>
                                <input type="checkbox" class="form-check-label" name="">
                                <label class="form-check-label">0</label>
                                <input type="checkbox" class="form-check-label" name="">
                                <label class="form-check-label">1-2</label>
                                <input type="checkbox" class="form-check-label" name="">

                            </div>
                        </td>
                    </tr>

                    <tr>

                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label" name="">
                                <label class="form-check-label">Nipple skin retraction</label>
                            </div>
                        </td>


                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label" name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label" name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label" name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="date" class="form-check-label" name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <label class="form-check-label"> dates:</label>
                                <input type="dates" class="form-check-label" name="">
                            </div>
                        </td>
                    </tr>

                    </tr>
                    <tr>

                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label" name="">
                                <label class="form-check-label">Erythema /swelling</label>
                            </div>
                        </td>


                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="date" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <label class="form-check-label">#years HRT use or more:</label>
                                <input type="checkbox" class="form-check-label"name="">
                                <label class="form-check-label">0</label>
                                <input type="checkbox" class="form-check-label"name="">
                                <label class="form-check-label">1-2</label>
                                <input type="checkbox" class="form-check-label"name="">
                                <label class="form-check-label">3yrs or more</label>
                            </div>
                        </td>
                    </tr>
                    <tr>

                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                                <label class="form-check-label">Rash/scaling</label>
                            </div>
                        </td>


                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="date" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <label class="form-check-label"> last used</label>
                                <input type="dates" class="form-check-label"name="">
                            </div>
                        </td>
                    </tr>
                    <tr>

                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                                <label class="form-check-label">Breast pain</label>
                            </div>
                        </td>


                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="date" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                                <label class="form-check-label"> augmentation</label>
                                <input type="dates" class="form-check-label"name="">
                            </div>
                        </td>
                    </tr>
                    <tr>

                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                                <label class="form-check-label">Other</label>
                                <input type="text" class="form-check-label"name="">
                            </div>
                        </td>


                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="date" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                                <label class="form-check-label"> reduction</label>
                                <input type="dates" class="form-check-label"name="">
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <h2>PHYSICAL EXAM </h2>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Breast findings </th>
                        <th> R</th>
                        <th> L</th>
                        <th> Deapth of pressure </th>
                        <th>O clock</th>
                        <th>Distance from nipple</th>
                    </tr>

                    </thead>
                    <tbody>
                    <tr>

                        <td>
                            <div class="form-check">

                                <label class="form-check-label">none</label>
                                <input type="checkbox" class="form-check-label"name="">
                            </div>
                        </td>


                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="text" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="text" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">

                                <input type="text" class="form-check-label"name="">


                            </div>
                        </td>
                    </tr>
                    <tr>

                        <td>
                            <div class="form-check">

                                <label class="form-check-label">fine modularity</label>
                                <input type="checkbox" class="form-check-label"name="">
                            </div>
                        </td>


                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="text" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="text" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">

                                <input type="text" class="form-check-label"name="">


                            </div>
                        </td>
                    </tr>
                    <tr>

                        <td>
                            <div class="form-check">

                                <label class="form-check-label">Dense nodularity</label>
                                <input type="checkbox" class="form-check-label"name="">
                            </div>
                        </td>


                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="text" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="text" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">

                                <input type="text" class="form-check-label"name="">


                            </div>
                        </td>
                    </tr>
                    <tr>

                        <td>
                            <div class="form-check">

                                <label class="form-check-label">skin edema</label>
                                <input type="checkbox" class="form-check-label"name="">
                            </div>
                        </td>


                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="text" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="text" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">

                                <input type="text" class="form-check-label"name="">


                            </div>
                        </td>
                    </tr>
                    <tr>

                        <td>
                            <div class="form-check">

                                <label class="form-check-label">Nipple/areolar charge</label>
                                <input type="checkbox" class="form-check-label"name="">
                            </div>
                        </td>


                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="text" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="text" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">

                                <input type="text" class="form-check-label"name="">


                            </div>
                        </td>
                    </tr>
                    <tr>

                        <td>
                            <div class="form-check">

                                <label class="form-check-label">Tenderness</label>
                                <input type="checkbox" class="form-check-label"name="">
                            </div>
                        </td>


                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="text" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="text" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">

                                <input type="text" class="form-check-label"name="">


                            </div>
                        </td>
                    </tr>
                    <tr>

                        <td>
                            <div class="form-check">

                                <label class="form-check-label">nipple discharge</label>
                                <input type="checkbox" class="form-check-label"name="">
                            </div>
                        </td>


                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="text" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="text" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">

                                <input type="text" class="form-check-label"name="">


                            </div>
                        </td>
                    </tr>
                    <tr>

                        <td>
                            <div class="form-check">

                                <label class="form-check-label">mass</label>
                                <input type="checkbox" class="form-check-label"name="">
                            </div>
                        </td>


                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="text" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="text" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">

                                <input type="text" class="form-check-label"name="">


                            </div>
                        </td>
                    </tr>
                    <tr>

                        <td>
                            <div class="form-check">

                                <label class="form-check-label">none</label>
                                <input type="checkbox" class="form-check-label"name="">
                            </div>
                        </td>


                        <td>
                            <div class="form-check">
                                <label class="form-check-label">yes</label>
                                <input type="checkbox" class="form-check-label"name="">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <label class="form-check-label">no</label>
                                <input type="checkbox" class="form-check-label"name="">
                            </div>
                        </td>

                    </tr>
                    </tbody>
                </table>
                <h2>Discrete mass</h2>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Lymph nodes </th>
                        <th>Axiliary</th>
                        <th>clavicular</th>


                    </tr>

                    </thead>

                    <tbody>
                    <tr>

                        <td>
                            <div class="form-check">

                                <label class="form-check-label">WNL</label>
                            </div>
                        </td>


                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                                <label class="form-check-label"> R</label>
                                <input type="checkbox" class="form-check-label"name="">
                                <label class="form-check-label">L</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                                <label class="form-check-label">supra R</label>
                                <input type="checkbox" class="form-check-label"name="">
                                <label class="form-check-label">supra L</label>
                                <input type="checkbox" class="form-check-label"name="">
                                <label class="form-check-label">Infra R</label>
                                <input type="checkbox" class="form-check-label"name="">
                                <label class="form-check-label">Infra L</label>
                            </div>
                        </td>

                    </tr>
                    <tr>

                        <td>
                            <div class="form-check">

                                <label class="form-check-label">Enlarged</label>
                            </div>
                        </td>


                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                                <label class="form-check-label"> R</label>
                                <input type="checkbox" class="form-check-label"name="">
                                <label class="form-check-label"> L</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                                <label class="form-check-label">supra R</label>
                                <input type="checkbox" class="form-check-label"name="">
                                <label class="form-check-label">supra L</label>
                                <input type="checkbox" class="form-check-label"name="">
                                <label class="form-check-label">Infra R</label>
                                <input type="checkbox" class="form-check-label"name="">
                                <label class="form-check-label">Infra L</label>
                            </div>
                        </td>

                    </tr>
                    <tr>

                        <td>
                            <div class="form-check">

                                <label class="form-check-label">Fixed</label>
                            </div>
                        </td>


                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                                <label class="form-check-label"> R</label>
                                <input type="checkbox" class="form-check-label"name="">
                                <label class="form-check-label"> L</label>
                            </div>
                        </td>
                        <td>

                        </td>

                    </tr>
                    <tr>

                        <td>
                            <div class="form-check">

                                <label class="form-check-label">Mobile</label>
                            </div>
                        </td>


                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                                <label class="form-check-label"> R</label>
                                <input type="checkbox" class="form-check-label"name="">
                                <label class="form-check-label"> L</label>
                            </div>
                        </td>
                        <td>

                        </td>

                    </tr>

                    </tbody>
                </table>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>CBE result date <input type="date" class="form-check-label"name=""></th>
                        <th>Imaging referral date<input type="checkbox" class="form-check-label"name=""></th>
                        <th>patient education</th>


                    </tr>

                    </thead>

                    <tbody>
                    <tr>

                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                                <label class="form-check-label">normal</label>
                            </div>
                        </td>


                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                                <label class="form-check-label">screening imaging</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                                <label class="form-check-label">importance of annual screen</label>
                            </div>
                        </td>

                    </tr>
                    <tr>

                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                                <label class="form-check-label">benign finding</label>
                            </div>
                        </td>


                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                                <label class="form-check-label">diagnostic imaging</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                                <label class="form-check-label">referral follow up</label>
                            </div>
                        </td>

                    </tr>
                    <tr>

                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                                <label class="form-check-label">anormality:suspicioous for cancer</label>
                            </div>
                        </td>


                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                                <label class="form-check-label">ultrsound(only)</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                                <label class="form-check-label">breast self examination</label>
                            </div>
                        </td>

                    </tr>
                    <tr>

                        <td>

                        </td>


                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                                <label class="form-check-label">other</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-label"name="">
                                <label class="form-check-label">other</label>
                            </div>
                        </td>

                    </tr>

                    </tbody>
                </table>
                <h3>overall summary</h3>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>clinician name for CBE</label>
                        <input type="text" class="form-control"name="">
                    </div>
                    <div class="form-group col-md-6">
                        <label>date:</label>
                        <input type="date" class="form-control"name="">
                    </div>
                </div>
                <h3>case management</h3>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>referral for risk assesment counseling</label>
                        <input type="date" class="form-control"name="">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Radiology/imaging workup</label>
                        <input type="date" class="form-control"name="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>CBE & imaging discondant</label>
                        <input type="date" class="form-control"name="">
                    </div>
                    <div class="form-group col-md-6">
                        <label>surgical consult</label>
                        <input type="date" class="form-control"name="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Patient notified of mammogram results</label>
                        <input type="date" class="form-control"name="">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Return for CBE in 1 2 3 mos</label>
                        <input type="date" class="form-control"name="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Patient informed and referred</label>
                        <input type="date" class="form-control"name="">
                    </div>
                    <div class="form-group col-md-6">
                        <label>return for cbe in 6 months</label>
                        <input type="date" class="form-control"name="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Referral for risk assesment counselling</label>
                        <input type="date" class="form-control"name="">
                    </div>
                    <div class="form-group col-md-6">
                        <label>return in one year for annual CBE</label>
                        <input type="date" class="form-control">
                    </div>
                </div>
                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label>other</label>
                        <input type="date" class="form-control"name="">
                    </div>
                </div>
                <h3>final diagnosis</h3>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label >date</label>
                        <input type="date" class="form-control"name="">
                    </div>
                    <div class="form-group col-md-6">
                        <label >diagnosis</label>
                        <input type="textF" class="form-control"name="">
                    </div>


                </div>
@endsection
