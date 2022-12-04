@extends('adminlte::page')
@section('content')
  <div class="modal fade" id="editmodel" role="dialog">
  	<div class="modal-dialog">

  		<!-- Modal content-->
  		<div class="modal-content">
  			<div class="modal-header">
  				<h4 class="modal-title">Alumni Data Updation</h4>
  				<button type="button" class="close" data-dismiss="modal">
  					<span aria-hidden="true">&times;</span>
  				</button>

  			</div>
  			<form id="editform" action="/deleteealumni" method="post" enctype="multipart/form-data">
  				@csrf
  				{{method_field('PUT')}}
  				<div class="modal-body">


  					<div class="form-group">
  						<label>Name</label>
  						<input type="text" id="sname" class="form-control" name="name" placeholder="Enter Your Name">
  					</div>
  					
  					<div class="form-group">
  						<label>Desciption </label>
  						<input type="text" id="sdescrip" class="form-control" placeholder="Enter Description here" name="description">
  					</div>
            


  					<div class="input-group">
  						<div class="custome-file">
  							<input type="file" id="simage" name="image" class="custome-file-input">
  							<label class="custome-file-label"></label>

  						</div>


  					</div>

  				</div>
  				<div class="modal-footer">
  					<button type="submit" class="btn btn-primary">Save Data</button>

  					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  				</div>
  			</form>
  		</div>

  	</div>
  </div>

<!-- delete model -->
<div class="modal fade" id="deletemodel" role="dialog">
  	<div class="modal-dialog">

  		<!-- Modal content-->
  		<div class="modal-content">
  			<div class="modal-header">
  				<h4 class="modal-title">Alumni Entry Deletion</h4>
  				<button type="button" class="close" data-dismiss="modal">
  					<span aria-hidden="true">&times;</span>
  				</button>

  			</div>
  			<form id="deleteform" action="/updatealumni" method="post" enctype="multipart/form-data">
  				@csrf
  				{{method_field('DELETE')}}
  				<div class="modal-body">
  					<input type="hidden" name="_method" value="DELETE">
  					<p> Do you want to delete ?</p>

  					</div>

  				
  				<div class="modal-footer">
  					<button type="submit" class="btn btn-primary">Yes</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
  				</div>
  			</form>
  		</div>

  	</div>
  </div>
 
	<div class="container">
		<div class="">
			<button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">Add Data</button>
			@if(count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
					<li>{{$error}}</li>
					@endforeach
				</ul>
				
			</div>
			@endif
		</div>
		@if(Session('success'))
		<div class="alert alert-success">
			<p>{{Session('success')}}</p>
			
		</div>
		@endif		
    <div class="table-responsive">
      <table id="datatable" class="table table-striped table-borderd table-hover" style="height:10px;">
              <thead class="">
                <tr>
                  <th>Id </th>
                  <th>Name </th>
                 
                  <th>Description</th>
                  <th>Image </th>
                  <th>Action </th>
                </tr>
              </thead>
              @foreach ($alumni as $item)
              <tr>
                <td>{{ $item ->id }} </td>
                <td>{{ $item ->name }} </td>
              
              
                <td style="text-align: center;">{{ $item ->descrip}} </td>
                <td><img src="{{ asset('upload/alumni/'.$item->image)}}" height="50px" width="50px"></td>
                <td><a id="edit" href="#" class="edit btn btn-success btn-sm">U</a>|<a  href="#" class="delete btn btn-danger btn-sm">D</a></td>
              </tr>
              @endforeach
            </table>
    </div>

		
		
	</div>
	

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        	<h4 class="modal-title">Alumni Data Entry</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <form action="{{route('addalumni')}}" method="post" enctype="multipart/form-data">
        	@csrf
        <div class="modal-body">
			<div class="form-group">
				<label>Name</label>
				<input type="text" class="form-control" name="name" placeholder="Enter Your Name">
			</div>
			<div class="form-group">
				<label>Desciption </label>
				<input type="text" class="form-control" placeholder="Enter Description here" name="description">
			</div>
			<div class="input-group">
				<div class="custome-file">
					<input type="file" name="image" class="custome-file-input">
					<label class="custome-file-label"></label>
					
				</div>
			</div>	
        </div>
        <div class="modal-footer">
           <button type="submit" class="btn btn-primary">Save Data</button>
       
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>

  <!-- Model ends here-->
  <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
  	<div class="modal-dialog">

  		<!-- Modal content-->
  		<div class="modal-content">
  			<div class="modal-header">
  				<h4 class="modal-title">Alumni Data Updation</h4>
  				<button type="button" class="close" data-dismiss="modal">ADD DATA</button>

  			</div>
  			<form action="{{route('addalumni')}}" method="post" enctype="multipart/form-data">
  				@csrf
  				<div class="modal-body">


  					<div class="form-group">
  						<label>Name</label>
  						<input type="text" class="form-control" name="name" placeholder="Enter Your Name">
  					</div>
  					<div class="form-group">
  						<label>Desciption </label>
  						<input type="text" class="form-control" placeholder="Enter Description here" name="description">
  					</div>

  					<div class="input-group">
  						<div class="custome-file">
  							<input type="file" name="image" class="custome-file-input">
  							<label class="custome-file-label"></label>

  						</div>
  					</div>

  				</div>
  				<div class="modal-footer">
  					<button type="submit" class="btn btn-primary">Save Data</button>

  					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  				</div>
  			</form>
  		</div>

  	</div>
  </div>
  @endsection

  <!-- Model ends here-->
  @section('js')
			<script src="js/jquery.min.js" type="text/javascript" ></script>
            <script src="js/bootstrap.min.js" type="text/javascript"></script>
            <script src="js/owl.carousel.min.js"type="text/javascript"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
            <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
            <script type="text/javascript">
            	$(document).ready(function(){

            		var table = $('#datatable').DataTable({
            			"aLengthMenu": [[5,10, 25, 50, 100, -1], [5,10, 25, 50, 100, "All"]],
                    "iDisplayLength": 5,
            		});
            		table.on('click','.edit',function(){
            			$tr = $(this).closest('tr');
            			if($($tr).hasClass('child')){
            				$tr = $tr.prev('.parent');
            			}

            			var data = table.row($tr).data();
            			console.log(data);
            			$('#sname').val(data[1]);
            			//$('#socup').val(data[2]);
            			$('#sdescrip').val(data[2]);
            			// $('#simage').val(data[4]);

            			$('#editform').attr('action','/updatealumni/'+data[0]);
            			$('#editmodel').modal('show');

            		});
            		table.on('click','.delete',function(){
            			$tr = $(this).closest('tr');
            			if($($tr).hasClass('child')){
            				$tr = $tr.prev('.parent');
            			}

            			var data = table.row($tr).data();
            			console.log(data);
            			// $('#sname').val(data[1]);
            			// $('#socup').val(data[2]);
            			// $('#sdescrip').val(data[3]);
            			// // $('#simage').val(data[4]);

            			$('#deleteform').attr('action','/deletealumni/'+data[0]);
            			$('#deletemodel').modal('show');

            		});
               
            	});
            </script>

@endsection