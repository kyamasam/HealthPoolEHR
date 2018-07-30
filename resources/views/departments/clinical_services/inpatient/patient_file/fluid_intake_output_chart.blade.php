@extends('layouts.master')
@section('content')
    <!-- Title & Breadcrumbs-->
<div class="row page-titles">
	<div class="col-md-12 align-self-center">
		<h4 class="theme-cl">Anaesthetic Record</h4>
	</div>
</div>
<!-- Title & Breadcrumbs-->

<div class="row">
	<div class="col-sm-12 col-md-12">
		<div class="card">
			<div class="card-header">
				<h4>Anaesthetic Record</h4>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table id="datatable" class="table table-striped">
						<thead>
						<tr>
							<td>OP/IP Number</td>
							<td>Ward/Clinic</td>
							<td>Date</td>
							<td>Operation</td>
							<td>Anaesthetists</td>
							<td>Surgeons</td>
							<td>Type of Pre-medication</td>
							<td>Time Given</td>
							<td>Effect</td>
							<td>Weight</td>
							<td>Height</td>

						</tr>
						</thead>
						<tbody>
						<tr>
						@if(isset($fluid_in_out_charts_table))
							@foreach($fluid_in_out_charts_table as $fluid_in_out_charts_tabl)
								<tr>
									<td>{{ $fluid_in_out_charts_tabl->op_ip_number}}</td>
									<td>{{ $fluid_in_out_charts_tabl->ward_clinic}}</td>
									<td>{{ $fluid_in_out_charts_tabl->date}}</td>
									<td>{{ $fluid_in_out_charts_tabl->operation}}</td>
									<td>{{ $fluid_in_out_charts_tabl->anaesthetists}}</td>
									<td>{{ $fluid_in_out_charts_tabl->surgeons}}</td>
									<td>{{ $fluid_in_out_charts_tabl->type_of_premedication}}</td>
									<td>{{ $fluid_in_out_charts_tabl->time_given}}</td>
									<td>{{ $fluid_in_out_charts_tabl->effect}}</td>
									<td>{{ $fluid_in_out_charts_tabl->weight}}</td>
									<td>{{ $fluid_in_out_charts_tabl->height}}</td>
								</tr>
						@endforeach
						@endif
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

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Add anaesthetic record</h4>
						</div>
						<div class="modal-body">

							<div class="col-md-12">
								<div class="card">

									<div class="container-fluid">
										<form action="{{ route('fluid_in_out_chart_post') }}" enctype="multipart/form-data" method="post">
											{!! csrf_field() !!}
											<h4>Anaesthetic Record</h4>
											<div class="form-row">
												<div class="form-group col">
													<label for="op_ip_number">OP/IP Number</label>
													<input type="number" name="op_ip_number" id="op_ip_number" class="form-control" placeholder="" >
												</div>
												<div class="form-group col">
													<label for="ward_clinic">Ward/Clinic</label>
													<input type="text" name="ward_clinic" id="ward_clinic" class="form-control" placeholder="" >
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col-md-6">
													<label for="date">Date</label>
													<input type="date" name="date" id="date" class="form-control" placeholder="">
												</div>
												<div class="form-group col-md-6">
													<label for="operation">Operation</label>
													<input type="text"
														   name="operation" id="operation" class="form-control" placeholder="" >
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col">
													<label for="anaesthetists">Anaesthetists</label>
													<select class="form-control" name="anaesthetists" id="anaesthetists">
														<option>Anaesthetist A</option>
														<option>Anaesthetist B</option>
														<option>Anaesthetist C</option>
													</select>
												</div>
												<div class="form-group col">
													<label for="surgeons">Surgeons</label>
													<select class="form-control" name="surgeons" id="surgeons">
														<option>Surgeon A</option>
														<option>Surgeon B</option>
														<option>Surgeon C</option>
													</select>
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col">
													<label for="type_of_premedication">Type of Pre-medication</label>
													<textarea class="form-control" name="type_of_premedication" id="type_of_premedication" rows="2"></textarea>
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col">
													<label for="time_given">Time Given</label>
													<input type="time"
														   name="time_given" id="time_given" class="form-control" placeholder="" >
												</div>
												<div class="form-group col">
													<label for="effect">Effect</label>
													<textarea class="form-control" name="effect" id="effect" rows="1"></textarea>
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col">
													<label for="weight">Weight</label>
													<input type="number"
														   name="weight" id="weight" class="form-control" placeholder="" >
												</div>
												<div class="form-group col">
													<label for="height">Height</label>
													<input type="number"
														   name="height" id="height" class="form-control" placeholder="" >
												</div>
											</div>
											<div class="form-row">
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
		</div>
	</div>
</div>
@endsection