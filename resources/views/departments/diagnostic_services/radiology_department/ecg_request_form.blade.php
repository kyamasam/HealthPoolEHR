@extends('layouts.master')

@section('content')
<div class="card"> 
        <div class="card-header">
            <h4>BTU</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>PATIENT NAME</th>
                        <th>UNIT NUMBER</th>
                        <th>AGE</th>
                        <th>WARD CLINIC</th>
                        <th>BED NO</th>
                        <th>SEX</th>
                        <th>PREVIOUS ECG</th>
                        <th>REPORT TO BE SENT TO</th>
                        <th>MEDICATION</th>
                        <th>DIGOXIN/DIURETICS/OTHERS</th>
                        <th>RELEVANT HISTORY</th>
                        <th>DATE</th>
                        <th>SIGNED BY</th>
                        <th> PRINTED</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>data </td>
                        <td>data1 </td>
                        <td>data </td>
                        <td>data </td>
                        <td>data </td>
                        <td>data </td>
                        <td>data </td>
                         <td>data </td>
                        <td>data1 </td>
                        <td>data </td>
                        <td>data </td>
                        <td>data </td>
                        <td>data </td>
                        <td>data </td>
                    </tr>
                    <tr>
                        <td>data </td>
                        <td>data2 </td>
                        <td>data </td>
                        <td>data </td>
                        <td>data </td>
                        <td>data </td>
                        <td>data </td>
                         <td>data </td>
                        <td>data2 </td>
                        <td>data </td>
                        <td>data </td>
                        <td>data </td>
                        <td>data </td>
                        <td>data </td>
                    </tr>
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
                        <h4 class="modal-title">Add cheque record</h4>
                    </div>
                    <div class="modal-body">

                        <div class="col-md-12">
                            <div class="card">
<div class="row page-titles">
    <div class="col-md-12 align-self-center text-center">
        <h4 class="theme-cl">E.C.G REQUEST FORM</h4>
    </div>
</div>
<div class="col-md-12">
    <div class="card">
        <div class="container-fluid">
            <h1 class="text-center"></h1>
            <br>
            <!-- <h2 class="text-center">E.C.G REQUEST FORM</h2> -->
            <form>
                <div class="form-row">
                    <div class="form-group col-md-9">
                        <label for="">Patient Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Unit Number</label>
                        <input type="number" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="">Age</label>
                        <input type="number" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Ward Clinic</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Bed</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="">Sex</label>
                        <select class="custom-select">
                            <option>Sex...</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <div class="form-group col-md-5">
                            <label for="">Previous E.C.G</label>
                        </div>
                        <div class="form-group col-md-3">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="PreviousECG" value="Yes">Yes<br>
                                <input type="radio" class="form-check-input" name="PreviousECG" value="No">No
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="">Report to be sent to:</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Medication</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    
                    <div class="form-group col-md-3">
                            <label for="">Digoxin / Diuretics / Others</label>
                    </div>
                    <div class="form-group col-md-3">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="Digoxin" value="Yes">Yes<br>
                            <input type="radio" class="form-check-input" name="Digoxin" value="No">No
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Relevant history and clinical findings and provisional diagnosis</label>
                    <textarea class="form-control"></textarea>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="">Date</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Signed</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Printed</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> 
      <div class="content">
                        <input type="submit" value="Save" class="btn btn-info" />
                    
                </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection