<!DOCTYPE html>
<html>
<head>
	<title>
		Alumni CRUD
	</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div class="jumbotron">
		<h2>Stacked form</h2>
		<form action="{{route('addimage')}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="form-group">
				<label>Name</label>
				<input type="text" class="form-control" name="name" placeholder="Enter Your Name">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" placeholder="Enter password" name="email">
			</div>
			<div class="form-group">
				<label>Post</label>
				<input type="text" class="form-control" name="post" placeholder="Enter your Post">
				
			</div>
			<div class="input-group">
				<div class="custome-file">
					<input type="file" name="image" class="custome-file-input">
					<label class="custome-file-label"></label>
					
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Save Data</button>
		</form>
	</div>
</body>
</html>