<?php include_once('connectDB.php');?>
<head>
	<link rel = 'stylesheet' href = 'font-awesome-4.7.0/font-awesome.min.css'/>
	<link rel = 'stylesheet' href = 'css/bootstrap.min.css'/>
	<link rel = 'stylesheet' href ='css/custom.css'/>
</head>
<body>
	<div class ='container' style = 'margin-top:25px' >
		<div class ='card col-md-12'>
			<div class ='card-block'>
			<div class ='form-group'>
				<div class ='col-md-4'>
			<label>Sort By</label>
				<select class ='form-control'>
				<option value ='Newest'>Newest</option>
					<option value ='Oldest'>Oldest</option>
					<option value ='alphabetically'>Alphabetically</option>
					<option value 'residents'>Resident First</option>
					<option value ='regulars'>Regular First</option>
				</select>
					</div>
			</div>
			<div class ='card-block' align ='center'>
				<table class = 'table   table-hover table-bordered' >
					<thead  style ='border-bottom:none'>
						<th style = 'font-weight: 500'>Student Number</th>
						<th style = 'font-weight: 500'>First Name</th>
						<th style = 'font-weight: 500'>Last Name</th>
						<th style = 'font-weight: 500'>Birthday</th>
						<th style ='font-weight:500'>Type</th>
						<th style = 'font-weight: 500'>Action</th>
					</thead>

					<tbody>
						<tr>
							<td>20150144222</td>
							<td>Juan</td>
							<td>Dela Cruz</td>
							<td>December 20 1999</td>
							<td>Regular</td>
							<td><a href = 'edit.php' class ='btn btn-primary btn-fill'>Edit</a>&nbsp;&nbsp; <a href ='delete.php' class ='btn btn-danger btn-fill'>Delete</a>&nbsp;&nbsp;<a href = "#"class ='btn btn-success btn-fill'>View</a></td>
						</tr>
						<tr>
							<td>20150144222</td>
							<td>Christian Joseph</td>
							<td>Vargas</td>
							<td>December 20 1999</td>
							<td>Resident</td>
							<td><a href = 'edit.php' class ='btn btn-primary btn-fill'>Edit</a>&nbsp;&nbsp; <a href ='delete.php' class ='btn btn-danger btn-fill'>Delete</a>&nbsp;&nbsp;<a href = "#"class ='btn btn-success btn-fill'>View</a></td>
						</tr>
						<tr>
							<td>20150144222</td>
							<td>Jeremiah</td>
							<td>Punzalan</td>
							<td>December 20 1999</td>
							<td>Resident</td>
							<td><a href = 'edit.php' class ='btn btn-primary btn-fill'>Edit</a>&nbsp;&nbsp; <a href ='delete.php' class ='btn btn-danger btn-fill'>Delete</a>&nbsp;&nbsp;<a href = "#"class ='btn btn-success btn-fill'>View</a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
			</div>
	</div>
</body>