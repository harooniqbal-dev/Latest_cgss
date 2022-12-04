@extends('adminlte::page')
@section('content')
<div >
	<div class="my" style="display: none;">
		<form action="{{route('updatemar')}}" method="post">
				@csrf
			<div class="form-group">
				<label>Enter text below </label>
				<textarea name="editor1">{{$data->Description}}</textarea>
                
			</div>
			<div class="form-group">
				<label for="class_type2" class="dropdown">	Enable/ Disable </label>
			</div>

			<select id="class_type2" name="marquee" class="dropup-menu form-control">
			<option value="1">Enable</option>
			<option value="0">Disable</option>
		
			</select>
			<button type="submit">Update</button>
		</form>
		
	
	
	<br>	
	
		
	</div>
	
	<div class="table-responsive ">
		<table class="table table-striped table-sm">
		<thead>
			<th>id</th>
			<th>Active</th>
			<th>Change </th>
		</thead>
		<tbody>
			<tr>
				<td>{{$data->id}}</td>
				<td >
					@if($data->Active== 1)
					Enabled
					@endif
					@if($data->Active == 0)
					Disbled
					@endif
				</td>
				<td><button id="show">
					Click
				</button></td>


			</tr>
		</tbody>
	</table>
	</div>
	
	
	
</div>
@endsection
@section('js')
<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor1',{
    	
    } );
    
    
</script>
<script type="text/javascript">
	$(document).ready(function () {
		$('#show').click(function() {
      $('.my').toggle("slide");
   
      
    });
	});
</script>
@endsection

