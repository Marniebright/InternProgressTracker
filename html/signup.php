<?php include("header.php"); ?>

<div class="page-header" id="content">
	<div class="container" id="content">
		<div class="col-lg-3"></div>
		<div class="col-lg-6" align="center">
			<img src="images/alt.png" class="img-responsive">
			<div class="row" id="content">
				<div class="col-lg-4">
					<a href="#student_signup" class="btn btn-info" role="button"><h4>I am a Student.</h4></a>
				</div>
				<div class="col-lg-2"></div>
				<div class="col-lg-4">
					<a href="#prof_signup" class="btn btn-primary" role="button"><h4>I am a Professor.</h4></a>
				</div>
				<div class="col-lg-2"></div>
			</div>
		</div>
		<div class="col-lg-3"></div>
	</div>
</div>
	
<section class="no-margin" id="student_signup">	
	<div class="row">
		<h2 align="center"> Student Sign Up </h2>
		<div class="col-lg-2"></div>
		<div class="col-lg-4">
			<form role="form">
				<div class="form-group">
					<label for="studno"> Student No.: </label>
					<input type="number" class="form-control" id="studno">
				</div>
				<div class="form-group">
					<label for="fname"> Firstname: </label>
					<input type="text" class="form-control" id="fname">
				</div>
		
				<div class="form-group">
					<label for="lname"> Lastname: </label>
					<input type="text" class="form-control" id="lname">
				</div>
				<div class="form-group">
					<label for="course"> Course: </label>
					<input type="text" class="form-control" id="course">
				</div>
				<div class="form-group">
					<label for="college"> College: </label>
					<input type="text" class="form-control" id="college">
				</div>
				<div class="form-group">
					<label for="contact_no"> Contact no.: </label>
					<input type="number" class="form-control" id="contact_no">
				</div>
				<div class="form-group">
					<label for="email"> NEU Email: </label>
					<input type="text" class="form-control" id="email" placeholder="fmlastname@neu.edu.ph">
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<label for="start_date">Password: </label>
							<input type="password"  class="form-control" id="pwd">
						</div>
					</div>
					<div class="col-lg-2"></div>	<div class="col-lg-6">
						<div class="form-group">
							<label for="start_date">Confirm Password: </label>
							<input type="password"  class="form-control" id="rpwd">
						</div>
					</div>
				</div>
			</form>
		</div>
		<div class="col-lg-4">
			<form role="form" id="company">
				<div class="form-group">
					<label for="company_name"> Company Name: </label>
					<input type="text" class="form-control" id="company_name">
				</div>
				<div class="form-group">
					<label for="company_address"> Company Address: </label>
					<input type="text" class="form-control" id="company_address">
				</div>
				<div class="form-group">
					<label for="company_address"> Department Assigned: </label>
					<input type="text" class="form-control" id="company_address">
				</div>
				<div class="form-group">
					<label for="contact_person">Contact Person: </label>
					<input type="text" class="form-control" id="contact_person">
				</div>
				<div class="form-group">
					<label for="cp_contact_no"> Contact Person's Contact no.: </label>
					<input type="number" class="form-control" id="cp_contact_no">
				</div>
				<div class="form-group">
					<label for="cp_email"> Contact Person's Email: </label>
					<input type="text" class="form-control" id="cp_email">
				</div>
				<div class="row">
					<div class="col-lg-12">
						<label for="training_period"> Training Period: </label>
					</div>
					<div class="col-lg-5">
						<div class="form-group">	
							<input type="date"  class="form-control" id="start_date">
						</div>
					</div>
					<div class="col-lg-2" align="center"><h4>to</h4></div>	
					<div class="col-lg-5">
						<div class="form-group">
							<input type="date"  class="form-control" id="end_date">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="hours">Total OJT Hours Required: </label>						
					<input type="number"  class="form-control" id="start_date">
				</div>
				</div>
			</form>
		<div class="col-lg-2"></div>	
	</div>
	<div class="row">
		<div class="col-lg-12" align="center">
			<button type="submit" class="btn btn-primary"><h4>Save</h4></button>
		</div>
</div>
</section>


	
<section class="no-margin" id="prof_signup">	
	<div class="row">
	<h2 align="center"> Faculty Sign Up </h2>
		<div class="col-lg-4"></div>
		<div class="col-lg-4">
			<form role="form" id="faculty">
				<div class="form-group">
					<label for="empno"> Faculty ID No.: </label>
					<input type="number" class="form-control" id="empno">
				</div>
				<div class="form-group">
					<label for="fname"> Firstname: </label>
					<input type="text" class="form-control" id="fname">
				</div>
				<div class="form-group">
					<label for="lname"> Lastname: </label>
					<input type="text" class="form-control" id="lname">
				</div>
				<div class="form-group">
					<label for="program"> Program Supervised: </label>
					<input type="text" class="form-control" id="program">
				</div>
			</form>
		</div>
		<div class="col-lg-4"></div>
	</div>
	<div class="row">
		<div class="col-lg-12" align="center">
			<button type="submit" class="btn btn-primary"><h4>Save</h4></button>
		</div>
	</div>
</section>

<?php include("footer.php"); ?>