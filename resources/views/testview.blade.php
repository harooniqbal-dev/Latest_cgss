<!DOCTYPE html>
<html>
<head>
	<title>
		Test view
	</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="jumbotron">
			<div class="line">
				<a href="test" class="btn btn-primary">Add Data</a>
			</div>
		    <form>
		    	<table class="table table-bordered">
		    		<thead class="thead-dark">
		    			<tr>
		    				<th>Id </th>
		    				<th>Name </th>
		    				<th>email </th>
		    				<th>post </th>
		    				<th>Image </th>
		    			</tr>
		    		</thead>
		    		@foreach ($sargodas as $item)
		    		<tr>
		    			<td>{{ $item ->id }} </td>
		    			<td>{{ $item ->name }} </td>
		    			<td>{{ $item ->email}} </td>
		    			<td>{{ $item ->post}} </td>
		    			<td><img src="{{ asset('upload/alumni/'.$item->image)}}" height="50px" width="50px"></td>
		    		</tr>
		    		@endforeach
		    	</table>
		    </form>
			
		</div>
		
	</div>

</body>
</html>