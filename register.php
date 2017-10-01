<?php include_once('connectDB.php');?>
<head>
	<link rel = 'stylesheet' href = 'font-awesome-4.7.0/font-awesome.min.css'/>
	<link rel = 'stylesheet' href = 'css/bootstrap.min.css'/>
	<link rel = 'stylesheet' href ='css/custom.css'/>
</head>
<body>
	<div class ='container' style = 'margin-top:25px' >
		<div class ='card col-md-8 offset-2'>
			<div class ='card-block'>
				<h4 class ='card-header' style = 'background-color: #ffc31f;color:#ffffff'>Personal Information</h4>
				<hr/>
				<form method ='post' data-toggle ='validator' id ='submit-form' role ='form'>
					<div class ='form-group'>
						<label>Student Number<sup>*</sup></label>
						<input type = 'text' class ='form-control' name = 'studentNumber' pattern = '[0-9]+' maxlength = '11' REQUIRED/>
						<div class="help-block with-errors"></div>
					</div>
					<div class ='row'>
						<div class ='col-md-5'>
							<div class = 'form-group'>
								<label>First Name <sup>*</sup></label>
								<input type = 'text' class ='form-control' name ='fname' pattern = '[a-zA-Z]+'  REQUIRED/>
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class ='col-md-5'>
							<div class = 'form-group'>
								<label>Last Name <sup>*</sup></label>
								<input type = 'text' class ='form-control' name ='lname' pattern = '[a-zA-Z]+' REQUIRED/>
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class ='col-md-2'>
							<div class = 'form-group'>
								<label>Age <sup>*</sup></label>
								<input type = 'text' class ='form-control' name ='lname' maxlength = '2' pattern = '[0-9]+' REQUIRED/>
								<div class="help-block with-errors"></div>
							</div>
						</div>
					</div>
					<div class ='row'>
						<div class ='col-md-6'>
							<div class ='form-group'>
								<label>Degree Program</label>
								<select class ='form-control'>
									<option value = '1'>1st Year</option>
									<option value = '2'>2nd Year</option>
									<option value = '3'>3rd Year</option>
									<option value = '4'>4th Year</option>
								</select>
							</div>
						</div>
						<div class ='col-md-6'>
							<div class ='form-group'>
								<label>Year</label>
								<select class ='form-control'>
									<option value ='BSIT'>BSIT</option>
									<option value = 'BSCS'>BSCS</option>
									<option value = 'BSEMC-DA'>BSEMC-DA</option>
									<option value ='BSEMC-GD'>BSEMC-GD</option>
								</select>
							</div>
						</div>
					</div>
					<label>Birthday <sup>*</sup></label>
					<div class = 'row'>
						<div class ='col-md-4'>
							<div class ='form-group'>
								<select class ='form-control' id = 'month'>
									<?php $months = array('January', 'Februrary','March', 'April', 'May','June','July','August','September','October','November','December');
									foreach($months as $m)
										echo "<option value = '{$m}'>{$m}</option>"; ?>
								</select>
							</div>
						</div>
						<div class ='col-md-4'>
							<div class ='form-group'>
								<input type = 'text' name = 'day' class ='form-control' pattern = '[0-9]{2}' placeholder ='Day' REQUIRED/>
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class ='col-md-4'>
							<div class ='form-group'>
								<input type  ='text' name ='year' class ='form-control' pattern ='[0-9]{4}' placeholder ='Year' REQUIRED/>
								<div class="help-block with-errors"></div>
							</div>
						</div>
					</div>
					<h4 class ='card-header' style = 'background-color: #ffc31f;color:#ffffff'>Details</h4>
					<hr/>
					<div class ='form-group'>
						<label>Are you applying for</label><br/>
						<select class ='form-control' onchange ="displaySkills">
							<option value ='resident'>Resident Member</option>
							<option value = 'regular'>Regular Member</option>
						</select>
					</div>
					<div class ='form-group'>
						<label>Why do you want to join?</label>
						<textarea name = 'wants' rows = '5' cols = '6' class ='form-control'></textarea>
					</div>
					<div class ='form-group'>
						<label>Reasons for not joining</label>
						<textarea name = 'donts' rows = '5' cols ='6' class ='form-control' remove></textarea>
					</div>
					<h4 class ='card-header' style = 'background-color: #ffc31f;color:#ffffff'>Skills</h4>
					<hr/>
					<div class ='form-group'>
						<label>Programming skills<p class ='category'>(HTML,Java etc)</p></label>
						<textarea name ='pskills' rows = '5' class ='form-control'></textarea>
						<label>Software<p class ='category'>(Photoshop, After effects, Visual studio..)</p></label>
						<textarea name ='pskills' rows = '5' class ='form-control'></textarea>
						<label>Skills</label>
						<textarea name ='pskills' rows = '5' class ='form-control'></textarea>
					</div>
					<button type ='submit' class ='btn btn-primary btn-fill btn-block' style ='background-color: #ffc31f; border-color:#d8d800'>Submit</button>

					<hr/>
				</form>
			</div>
		</div>
	</div>
</body>
<script src = 'jquery/jquery-3.2.1.min.js' ></script>
<script src ='js/validator.js'></script>
<script src ='js/bootstrap.min.js'></script>
