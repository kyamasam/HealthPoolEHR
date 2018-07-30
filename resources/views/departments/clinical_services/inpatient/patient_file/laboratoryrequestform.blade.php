@extends('layouts.master')
@section('content')
    <!-- Title & Breadcrumbs-->
<div class="row page-titles">
	<div class="col-md-12 align-self-center">
		<h4 class="theme-cl">Laboratory Request Form</h4>
	</div>
</div>
<!-- Title & Breadcrumbs-->

<div class="row">
	<div class="col-sm-12 col-md-12">
		<div class="card">
			<div class="card-header">
				<h4>Laboratory Request Form</h4>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table id="datatable" class="table table-striped table-bordered table-responsive">
						<thead>
						<tr>
							<th>PATIENT NAME</th>
							<th>IP NUMBER</th>
							<th>DATE</th>
							<th>AGE</th>
							<th>WARD</th>
							<th>BED NUMBER</th>
							<th>SEX</th>
							<th>DATE</th>
							<th>IP NUMBER</th>
							<th>PATIENT NAME</th>
							<th>CELL</th>
							<th>LOCATION</th>
							<th>AGE</th>
							<th>WEIGHT</th>
							<th>SEX</th>
							<th>CLINICAL NOTES</th>
							<th>REFFERING DOCTOR</th>
							<th>BRANCH</th>
							<th>SIGNATURE</th>
							<th>CELL2</th>
							<th>TECHNOLOGISTS</th>
							<th>TIME</th>
							<th>TIME OF SPECIMEN</th>
							<th>ACCOUNTS</th>
						</tr>
						</thead>
						<tbody>
						@if(isset($laboratoryrequestform_results))
							@foreach($laboratoryrequestform_results as $laboratoryrequestform_result)
								<tr>
									<td>{{ $laboratoryrequestform_result->bio_patient_name}}</td>
									<td>{{ $laboratoryrequestform_result->bio_ip_no}}</td>
									<td>{{ $laboratoryrequestform_result->bio_date}}</td>
									<td>{{ $laboratoryrequestform_result->bio_age}}</td>
									<td>{{ $laboratoryrequestform_result->bio_ward}}</td>
									<td>{{ $laboratoryrequestform_result->bio_bed_number}}</td>
									<td>{{ $laboratoryrequestform_result->bio_sex}}</td>
									<td>{{ $laboratoryrequestform_result->date}}</td>
									<td>{{ $laboratoryrequestform_result->ipnumber}}</td>
									<td>{{ $laboratoryrequestform_result->patient}}</td>
									<td>{{ $laboratoryrequestform_result->cell}}</td>
									<td>{{ $laboratoryrequestform_result->location}}</td>
									<td>{{ $laboratoryrequestform_result->age}}</td>
									<td>{{ $laboratoryrequestform_result->weight}}</td>
									<td>{{ $laboratoryrequestform_result->sex}}</td>
									<td>{{ $laboratoryrequestform_result->clinicalnotes}}</td>
									<td>{{ $laboratoryrequestform_result->refferingdoctor}}</td>
									<td>{{ $laboratoryrequestform_result->branch}}</td>
									<td>{{ $laboratoryrequestform_result->signature}}</td>
									<td>{{ $laboratoryrequestform_result->cellb}}</td>
									<td>{{ $laboratoryrequestform_result->technologists}}</td>
									<td>{{ $laboratoryrequestform_result->time}}</td>
									<td>{{ $laboratoryrequestform_result->timeofspecimen}}</td>
									<td>{{ $laboratoryrequestform_result->accounts}}</td>
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
							<h4 class="modal-title">Add Laboratory record</h4>
						</div>
						<div class="modal-body">

							<div class="col-md-12">
								<div class="card">
									<div class="container">
										<form action="{{route('laboratoryrequestform_post')}}" method="post" >{!! csrf_field() !!}
												<div class="offset-md-6">
													<div class="row">
														<div class="col-md-3">
															<p>PATIENTS NAME:</p>
														</div>
														<div class="col-md-9">
															<input type=" text" name="bio_patient_name" class="form-control" placeholder="click to enter patients name"></td>
														</div>
													</div>
													<div class="row">
														<div class="col-md-3">
															<p>IP NUMBER:</p>
														</div>
														<div class="col-md-9">
															<input type=" text" name="bio_ip_no" class="form-control" placeholder="click to enter IP number"></td>
														</div>
													</div>
													<div class="row">
														<div class="col-md-3">
															<p>DATE:</p>
														</div>
														<div class="col-md-9">
															<input type="date" name="bio_date" class="form-control" placeholder="click to enter date">
														</div>
													</div>
													<div class="row">
														<div class="col-md-3">
															<p>AGE:</p>
														</div>
														<div class="col-md-9">
															<input type="number" name="bio_age" class="form-control" placeholder="click to enter age">
														</div>
													</div>
													<div class="row">
														<div class="col-md-3">
															<p>WARD:</p>
														</div>
														<div class="col-md-9">
															<input type="text" name="bio_ward" class="form-control" placeholder="click to enter ward number">
														</div>
													</div>
													<div class="row">
														<div class="col-md-3">
															<p>BED NUMBER:</p>
														</div>
														<div class="col-md-9">
															<input type="text" name="bio_bed_number" class="form-control" placeholder="click to enter bed number">
														</div>
													</div>
													<div class="row">
														<div class="col-md-3">
															<p>SEX:</p>
														</div>
														<div class="col-md-9">
															<select class="form-control" name="bio_sex" id="sex">
																<option value="male">--Choose sex--</option>
																<option value="male">Male</option>
																<option value="female">Female</option>
															</select>
														</div>
													</div>
												</div>
											<div class="col-m-3 offset-md-2">
												<H3 class="mt-20 ">
													LABORATORY REQUEST FORM
												</H3>
											</div>
											<div class="row">
												<div class="col-md-9">
													<label for="staticEmail" class="col-sm-3 col-form-label">DATE:</label>
													<div class="col-sm-12">
														<input type="date" name="date" class="form-control" placeholder="">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-11">
													<label for="staticEmail" class="col-sm-3 col-form-label ">IP/OPD No:</label>
													<div class="col-sm-12">
														<input type="	datetime" name="ipnumber" class="form-control" placeholder="">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-11">
													<label for="inputPassword" class="col-sm-3 col-form-label">PATIENT:</label>
													<div class="col-sm-12">
														<input type="text" name="patient" class="form-control" id="inputPassword" placeholder="Patient">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-11">
													<label for="inputPassword" class="col-sm-3 col-form-label">CELL:</label>
													<div class="col-sm-12">
														<input type="text" name="cell" class="form-control" id="inputPassword" placeholder="Cell:">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-11">
													<label for="inputPassword" class="col-sm-3 col-form-label">LOCATION:</label>
													<div class="col-sm-12">
														<input type="text" name="location" class="form-control" id="inputPassword" placeholder="Location:">
													</div>
												</div>
											</div>
											<div class="row ">
												<div class="col-md-11">
													<label for="staticEmail" class="col-sm-3 col-form-label ">AGE:</label>
													<div class="col-sm-12">
														<input type="number" name="age" class="form-control" placeholder="">
													</div>
												</div>
											</div>
											<div class="row ">
												<div class="col-md-11">
													<label for="staticEmail" class="col-sm-3 col-form-label">WEIGHT:</label>
													<div class="col-sm-12">
														<input type="number" name="weight" class="form-control" placeholder="">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-11">
													<label for="staticEmail" class="col-sm-3 col-form-label ">SEX:</label>
													<div class="col-md-12">
														<select class="form-control" name="sex" id="sex">
															<option value="">--Choose sex--</option>
															<option value="male">Male</option>
															<option value="female">Female</option>
														</select>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-11">
													<label for="inputPassword" class="col-sm-3 col-form-label">CLINICAL INFORMATION</label>
													<div class="col-sm-12">
														<textarea  name="clinicalnotes" class="form-control" id="" ></textarea>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-11">
													<label for="inputPassword" class="col-sm-3 col-form-label">REFERRING DOCTOR</label>
													<div class="col-sm-12">
														<input type="text" name="refferingdoctor" class="form-control" id="inputPassword" placeholder="Referring Doctor">
													</div>
												</div>
											</div>
											<div class="row ">
												<div class="col-md-11">
													<label for="staticEmail" class="col-sm-3 col-form-label">BRANCH:</label>
													<div class="col-sm-12">
														<input type="text" name="branch" class="form-control" placeholder="">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-11">
													<label for="inputPassword" class=" col-form-label">Signature</label>
													<div class="col-sm-8">
														<input type="text" name="signature" class="form-control" id="inputPassword" placeholder="Signature">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-11">
													<label for="inputPassword" class="col-sm-3 col-form-label">CELL:</label>
													<div class="col-sm-12">
														<input type="text" name="cellb" class="form-control" id="inputPassword" placeholder="Cell:">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-11">
													<label for="inputPassword" class="col-sm-3 col-form-label">TECHNOLOGISTS:</label>
													<div class="col-sm-12">
														<input type="text" name="technologists" class="form-control" id="inputPassword" placeholder="Signature">
													</div>
												</div>
											</div>
											<div class="row ">
												<div class="col-md-11">
													<label for="staticEmail" class="col-sm-3 col-form-label ">TIME:</label>
													<div class="col-sm-12">
														<input type="time" name="time" class="form-control" placeholder="">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-11">
													<label for="inputPassword" class="col-sm-3 col-form-label">Time Of Specimen Collection:</label>
													<div class="col-sm-12">
														<input type="time" name="timeofspecimen" class="form-control" id="inputPassword" placeholder="Cell:">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-11">
													<label for="inputPassword" class=" col-form-label">Accounts (Please Tick):</label>
													<div class="col-sm-12">
														<div class="form-group">
															<div class="form-check form-check-inline  col-form-label">
																<input class="form-check-input" type="radio" name="accounts" id="inlineRadio1" value="option1">
																<label class="form-check-label" for="inlineRadio1">Patient</label>
															</div>
															<div class="form-check form-check-inline  col-form-label">
																<input class="form-check-input" type="radio" name="accounts" id="inlineRadio2" value="option2">
																<label class="form-check-label" for="inlineRadio2">Company</label>
															</div>
															<div class="form-check form-check-inline  col-form-label">
																<input class="form-check-input" type="radio" name="accounts" id="inlineRadio2" value="option2">
																<label class="form-check-label" for="inlineRadio2">Doctor</label>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="form-group">
												<button type="submit" class="btn btn-primary">Submit</button>
											</div>
										</form>
										<!--form here--->
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
<!-- end container -->
@endsection






