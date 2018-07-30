@extends('layouts.master')
@section('content')

<div class="card"> 
        <div class="card-header">
            <h4>BILLING INFORMATION REPORT</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>NAME OF PERSON RESPONSIBLE FOR BILL</th>
                        <th>ADDRESS</th>
                        <th>PHONE NUMBER</th>
                        <th>OCCUPATION</th>
                        <th>EMPLOYER</th>
                        <th>EMPLOYER'S ADDRESS</th>
                        <th>EMPLOYER'S PHONE NO</th>
                        <th>CONTRIBUTER'S RELATIONSHIP TO PATIENT</th>
                        <th>PLEASE INDICATE PRIMARY INSURANCE</th>
                        <th>DEPOSIT PAID</th>
                        <th>PAYMENT METHOD</th>
                        <th>RECEIPT NUMBER</th>
                        <th>PREVIOUS ACCOUNT BALANCE</th>
                        <th>CUSTOMER TYPE</th>
                        <th>PATIENT/GUARDIAN SIGNATURE</th>
                        <th>DATE</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($billing))
                        @foreach($billing as $billing)
                            <tr>
                                <td>{{ $billing->name_of_person_responsible_for_bill}}</td>
                                <td>{{ $billing->address}}</td>
                                <td>{{ $billing->phone_number}}</td>
                                <td>{{ $billing->occupational}}</td>
                                <td>{{ $billing->employer}}</td>
                                <td>{{ $billing->employers_address}}</td>
                                <td>{{ $billing->employers_phone_no}}</td>
                                <td>{{ $billing->contributers_relationship_to_patient}}</td>
                                <td>{{ $billing->primary_insurance}}</td>
                                <td>{{ $billing->deposit_paid}}</td>
                                <td>{{ $billing->payment_method}}</td>
                                <td>{{ $billing->receipt_number}}</td>
                                <td>{{ $billing->previous_account_balance}}</td>
                                <td>{{ $billing->customer_type}}</td>
                                <td>{{ $billing->patient_guardian_signature}}</td>
                                <td>{{ $billing->date}}</td>
                            </tr>
                        @endforeach
                    @endif

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
                        <h4 class="modal-title">Add Billing Information</h4>
                    </div>
                    <div class="modal-body">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="container">

                                    <div class="row page-titles">
                                        <div class="col-md-12 align-self-center text-center">
                                            <h4 class="theme-cl">BILLING APPLICATION FORM</h4>
                                        </div>
                                    </div>

                                        <div class="col-m-3 offset-md-2">
                                          <H3 class="mt-20 ">
                                            BILLING INFORMATION
                                          </H3>
                                            <form action="{{ route('billing_post') }}" method="post" >
                                                {!! csrf_field() !!}

                                                <div class="form-group row ">
                                                        <label for="staticEmail" class=" col-form-label">NAME OF PERSON RESPONSIBLE FOR BILL:</label>
                                                         <div class="">
                                                            <input type="text" name="name_of_person_responsible_for_bill" class="form-control" placeholder="">
                                                        </div>
                                                </div>


                                                <div class="form-group row  ">
                                                        <label for="staticEmail" class="  col-form-label">ADDRESS(if different):</label>
                                                         <div class=" ">
                                                        <input type="text" name="address" class="form-control" placeholder="">
                                                 </div>
                                                </div>
                                                 <div class="form-group row ">
                                                        <label for="staticEmail" class="  col-form-label">PHONE NUMBER:</label>
                                                         <div class=" ">
                                                        <input type="number" name="phone_number" class="form-control" placeholder="">
                                                </div>
                                                 </div>
                                                <div class="form-group row ">
                                                        <label for="staticEmail" class="  col-form-label">OCCUPATION:</label>
                                                         <div class=" ">
                                                        <input type="text" name="occupational" class="form-control" placeholder="">
                                                </div>
                                                </div>

                                                <div class="form-group row ">
                                                        <label for="staticEmail" class="  col-form-label">EMPLOYER:</label>
                                                         <div class=" ">
                                                        <input type="text" name="employer" class="form-control" placeholder="">
                                                </div>
                                                </div>
                                                <div class="form-group row ">
                                                        <label for="staticEmail" class="  col-form-label">EMPLOYER'S ADDRESS:</label>
                                                         <div class=" ">
                                                        <input type="text" name="employers_address" class="form-control" placeholder="">
                                                </div>
                                                </div>
                                                <div class="form-group row ">
                                                        <label for="staticEmail" class="  col-form-label">EMPLOYER'S PHONE NO:</label>
                                                         <div class=" ">
                                                        <input type="number" name="employers_phone_no" class="form-control" placeholder="">
                                                </div>
                                                </div>
                                                <div class="form-group row ">
                                                        <label for="staticEmail" class="  col-form-label">CONTRIBUTER'S RELATIONSHIP TO PATIENT:</label>
                                                         <div class=" ">
                                                        <input type="text" name="contributers_relationship_to_patient" class="form-control" placeholder="">
                                                </div>
                                                </div>
                                                <div class="form-group row ">
                                                        <label for="staticEmail" class="  col-form-label">PLEASE INDICATE PRIMARY INSURANCE:</label>
                                                         <div class=" ">
                                                        <input type="text" name="primary_insurance" class="form-control" placeholder="">
                                                </div>
                                                </div>



                                                <div class="form-group row ">
                                                        <label for="staticEmail" class="  col-form-label">DEPOSIT PAID Ksh.:</label>
                                                         <div class=" ">
                                                        <input type="number" name="deposit_paid" class="form-control" placeholder="">
                                                </div>
                                                </div>
                                                <div class="form-group row ">
                                                        <label for="staticEmail" class="  col-form-label">PAYMENT METHOD:</label>
                                                         <div class=" ">
                                                        <input type="text" name="payment_method" class="form-control" placeholder="">
                                                </div>
                                                </div>
                                                <div class="form-group row ">
                                                        <label for="staticEmail" class="  col-form-label">RECEIPT NUMBER(if any):</label>
                                                         <div class=" ">
                                                        <input type="text" name="receipt_number" class="form-control" placeholder="">
                                                </div>
                                                </div>
                                                <div class="form-group row ">
                                                        <label for="staticEmail" class="  col-form-label">PREVIOUS ACCOUNT BALANCE:</label>
                                                         <div class=" ">
                                                        <input type="number" name="previous_account_balance" class="form-control" placeholder="">
                                                </div>
                                                </div>
                                                <div class="form-group row ">
                                                        <label for="staticEmail" class="col-form-label">CUSTOMER TYPE:</label>
                                                        <div class=" ">
                                                            <input type="radio" name="customer_type" value="prepaid">Prepaid<br>
                                                            <input type="radio" name="customer_type" value="postpaid">Prepaid<br>
                                                        </div>
                                                </div>



                                                <div class="form-group row ">
                                                        <label for="staticEmail" class="  col-form-label">PATIENT/GUARDIAN SIGNATURE:</label>
                                                         <div class=" ">
                                                            <input type="text" name="patient_guardian_signature" class="form-control" placeholder="">
                                                        </div>
                                                </div>
                                                <div class="form-group row ">
                                                        <label for="staticEmail" class="  col-form-label">DATE:</label>
                                                         <div class=" ">
                                                        <input type="date" name="date" class="form-control" placeholder="">
                                                </div>
                                                </div>

                                                <input type="submit" class="btn btn-info" data-toggle="modal" value="Save">

                                            </form>
                                        </div>
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