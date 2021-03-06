<?php include("header.php"); ?>

	<section class="page-header" id="content">
		<div class="row">
			<div class="col-lg-12">
				<h2 align="center"> Accomplishment Report </h2>
			</div>
		</div>
	</section>
	
	<div class="container">
		<div class="table-responsive">
			<table class="table-condensed">
				<thead align="center">
					<tr>
						<th class="col-lg-2"><center>Date</center></th>
						<th class="col-lg-2"><center>Time-in</center></th>
						<th class="col-lg-2"><center>Time-out</center></th>
						<th class="col-lg-4"><center>Tasks</center></th>
						<th class="col-lg-2"><center>Actions</center></th>
					</tr>
				</thead>
				<tbody>
					<tr align="center">
						<form class="form">
							<td class="col-lg-2">
								<div class="form-group">
									<input type="date" class="form-control" id="date">
								</div>
							</td>
						</form>
						<form class="form">
							<td class="col-lg-2">
								<div class="form-group">
									<input type="time" class="form-control" id="time-in">
								</div>
							</td>
						</form>
						<form class="form">
							<td class="col-lg-2">
								<div class="form-group">
									<input type="time" class="form-control" id="time-out">
								</div>
							</td>
						</form>
						<form class="form">
							<td class="col-lg-4">
								<div class="form-group">
									<input type="text" class="form-control" id="tasks">
								</div>
							</td>
						</form>
							<td class="col-lg-2">
								<button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></button>
								<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
							</td>
						</tr>
						<tr align="center">
						<form class="form">
							<td class="col-lg-2">
								<div class="form-group">
									<input type="date" class="form-control" id="date">
								</div>
							</td>
						</form>
						<form class="form">
							<td class="col-lg-2">
								<div class="form-group">
									<input type="time" class="form-control" id="time-in">
								</div>
							</td>
						</form>
						<form class="form">
							<td class="col-lg-2">
								<div class="form-group">
									<input type="time" class="form-control" id="time-out">
								</div>
							</td>
						</form>
						<form class="form">
							<td class="col-lg-4">
								<div class="form-group">
									<input type="text" class="form-control" id="tasks">
								</div>
							</td>
						</form>
							<td class="col-lg-2">
								<button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></button>
								<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
							</td>
						</tr>
						<tr align="center">
						<form class="form">
							<td class="col-lg-2">
								<div class="form-group">
									<input type="date" class="form-control" id="date">
								</div>
							</td>
						</form>
						<form class="form">
							<td class="col-lg-2">
								<div class="form-group">
									<input type="time" class="form-control" id="time-in">
								</div>
							</td>
						</form>
						<form class="form">
							<td class="col-lg-2">
								<div class="form-group">
									<input type="time" class="form-control" id="time-out">
								</div>
							</td>
						</form>
						<form class="form">
							<td class="col-lg-4">
								<div class="form-group">
									<input type="text" class="form-control" id="tasks">
								</div>
							</td>
						</form>
							<td class="col-lg-2">
								<button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></button>
								<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
							</td>
						</tr>
					<!-- insert row -->
				</tbody>
			</table>
		</div>
	</div>
	
	<div class="row" id="content" align="right">
		<div class="col-lg-12">
			<button type="submit" class="btn btn-primary"><h4><span class="glyphicon glyphicon-plus"></span> Insert Row</h4></button>
			<button type="submit" class="btn btn-success"><h4><span class="glyphicon glyphicon-save"></span> Save</h4></button>
		</div>
	</div>

<?php include("footer.php"); ?>