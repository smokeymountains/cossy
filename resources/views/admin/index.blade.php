@extends('layouts.admin')

@section('content')
 		<!-- BEGIN #content -->
		<div id="content" class="app-content">
			<!-- BEGIN breadcrumb -->
			<ol class="breadcrumb float-xl-end">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item active">Dashboard</li>
			</ol>
			<!-- END breadcrumb -->
			<!-- BEGIN page-header -->
			<h1 class="page-header">Admin <small>Analytics</small></h1>
			<!-- END page-header -->
			
			<!-- BEGIN row -->
			<div class="row">
				<!-- BEGIN col-3 -->
				<div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-blue">
						<div class="stats-icon"><i class="fa fa-desktop"></i></div>
						<div class="stats-info">
							<h4>TOTAL VISITORS</h4>
							<p></p>	
						</div>
						<div class="stats-link">
							
						</div>
					</div>
				</div>
				<!-- END col-3 -->
				<!-- BEGIN col-3 -->
				<div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-info">
						<div class="stats-icon"><i class="fa fa-link"></i></div>
						<div class="stats-info">
							<h4>BOUNCE RATE</h4>
							<p></p>	
						</div>
						<div class="stats-link">
							
						</div>
					</div>
				</div>
				<!-- END col-3 -->
				<!-- BEGIN col-3 -->
				<div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-orange">
						<div class="stats-icon"><i class="fa fa-users"></i></div>
						<div class="stats-info">
							<h4>UNIQUE VISITORS</h4>
							<p></p>	
						</div>
						<div class="stats-link">
							
						</div>
					</div>
				</div>
				<!-- END col-3 -->
				<!-- BEGIN col-3 -->
				<div class="col-xl-3 col-md-6">
					<div class="widget widget-stats bg-red">
						<div class="stats-icon"><i class="fa fa-clock"></i></div>
						<div class="stats-info">
							<h4>AVG TIME ON SITE</h4>
							<p></p>	
						</div>
						<div class="stats-link">
							
						</div>
					</div>
				</div>
				<!-- END col-3 -->
			</div>
			<!-- END row -->
			
			<!-- BEGIN row -->
			<div class="row">
				<!-- BEGIN col-8 -->
				<div class="col-xl-8">
					<!-- BEGIN panel -->
					<div class="panel panel-inverse" data-sortable-id="index-1">
						<div class="panel-heading">
							<h4 class="panel-title">Website Analytics (Last 7 Days)</h4>
							
						</div>
						<div class="panel-body pe-1">
							<div id="interactive-chart" class="h-300px"></div>
						</div>
					</div>
					<!-- END panel -->
					
					<!-- BEGIN panel -->
					<div class="panel panel-inverse bg-gray-800" data-sortable-id="index-9">
						<div class="panel-heading">
							<h4 class="panel-title">World Visitors</h4>

						</div>
						<div class="panel-body p-0">
							<div id="world-map" class="h-300px" data-theme="transparent"></div>
						</div>
					</div>
					<!-- END panel -->
					

				</div>
				<!-- END col-8 -->
				<!-- BEGIN col-4 -->
				<div class="col-xl-4">
					<!-- BEGIN panel -->
					<div class="panel panel-inverse" data-sortable-id="index-6">
						<div class="panel-heading">
							<h4 class="panel-title">Analytics Details</h4>
							
						</div>
						<div class="table-responsive">
							<table class="table table-panel align-middle mb-0">
								<thead>
									<tr>	
										<th>Source</th>
										<th>Total</th>
										<th>Trend</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td nowrap><label class="badge bg-danger">Unique Visitor</label></td>
										<td> <span class="text-success"><i class="fa fa-arrow-up"></i></span></td>
										<td><div id="sparkline-unique-visitor"></div></td>
									</tr>
									<tr>
										<td nowrap><label class="badge bg-warning">Bounce Rate</label></td>
										<td></td>
										<td><div id="sparkline-bounce-rate"></div></td>
									</tr>
									<tr>
										<td nowrap><label class="badge bg-success">Total Page Views</label></td>
										<td></td>
										<td><div id="sparkline-total-page-views"></div></td>
									</tr>
									<tr>
										<td nowrap><label class="badge bg-blue">Avg Time On Site</label></td>
										<td></td>
										<td><div id="sparkline-avg-time-on-site"></div></td>
									</tr>
									<tr>
										<td nowrap><label class="badge bg-default text-gray-900">% New Visits</label></td>
										<td></td>
										<td><div id="sparkline-new-visits"></div></td>
									</tr>
									<tr>
										<td nowrap><label class="badge bg-gray-900">Return Visitors</label></td>
										<td></td>
										<td><div id="sparkline-return-visitors"></div></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<!-- END panel -->
					
					<!-- BEGIN panel -->
					<div class="panel panel-inverse" data-sortable-id="index-7">
						<div class="panel-heading">
							<h4 class="panel-title">Visitors User Agent</h4>
							
						</div>
						<div class="panel-body">
							<div id="donut-chart" class="h-300px"></div>
						</div>
					</div>
					<!-- END panel -->
					
					
					


				</div>
				<!-- END col-4 -->
			</div>
			<!-- END row -->
		</div>
		<!-- END #content -->
    @endsection
