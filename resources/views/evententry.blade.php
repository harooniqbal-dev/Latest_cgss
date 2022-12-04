@extends('adminlte::page')
@section('css')

@endsection
@section('content')
	<!-- ******************************************************

						Table For displaying Events 
		******************************************************** -->
    <div class="row">

      <div class="col-sm-3 col-lg-3 col-md-3">
       
      </div>
      <div class="col-lg-9 col-md-9 col-sm-9 col-">


      </div>
        
      </div>
      
    </div>

     
	
		<div class="container">
          <div class="">
            <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#editmodel">Add Data</button>
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
          <table id="datatable" class="table-responsive table table-striped table-borderd table-hover">
            <thead>
              <th>ID</th>
              <th>Name</th>
              <th>Date</th>
              <th>Short Description</th>
              <th>Long Description</th>
              <th>Image</th>
              <th>Action</th>
            </thead>
            @foreach($data as $event)
            <tr>
              <td>{{$event->id }}</td>
              <td>{{$event->event_name}}</td>
              <td>{{$event->event_date}}</td>
              <td>{{$event->event_short}}</td>
              <td>{{$event->event_description}}</td>
              <td><img src="{{ asset('upload/events/'.$event->event_image)}}" height="50px" width="50px"></td>
              <td>
                <a id="edit" href="#" class="edit btn btn-success btn-sm">U</a>|<a  href="#" class="delete btn btn-danger btn-sm">D</a>
              </td>

            </tr>
            @endforeach
          </table>
        </div>
	
		<!-- ******************************************************

						Table For displaying Events  Ends Here
		******************************************************** -->




		<!-- ******************************************************

						Model For Data inserting in Events
		******************************************************** -->


	<div class="modal fade" id="editmodel" role="dialog" >
  	<div class="modal-dialog">

  		<!-- Modal content-->
  		<div class="modal-content">
  			<div class="modal-header">
  				<h4 class="modal-title">Events Data Entry</h4>
  				<button type="button" class="close" data-dismiss="modal">
  					<span aria-hidden="true">&times;</span>
  				</button>

  			</div>
  			<form id="editform" action="{{route('addevent')}}" method="post" enctype="multipart/form-data">
  				@csrf
  				
  				<div class="modal-body">


  					<div class="form-group">
  						<label>Name</label>
  						<input type="text" id="ename" class="form-control" name="ename" placeholder="Enter Event Name">
  					</div>
  					<div class="form-group">
  						<label>Short Description</label>
  						<input type="text" id="eshort" class="form-control" placeholder="Enter Short Description" name="eshort">
  					</div>
  					<div class="dates form-group" style="">
  						<label>Choose DATE</label>
  						<input type="date" style="" class="form-control" id="usr1" name="event_date" placeholder="YYYY-MM-DD" autocomplete="off" >
  					</div>
  					<div class="form-group">
  						<label>Long Description</label>
  						<input type="text" id="elong" class="form-control" placeholder="Enter Description" name="elong">
  					</div>

  					<div class="input-group">
  						<div class="custome-file">
  							<input type="file" id="eimage" name="image" class="custome-file-input">
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
   	<!-- ******************************************************

			Model For Data inserting Ends here
		******************************************************** -->

	<!-- ******************************************************

			Model For Data Updating  Starts here
		******************************************************** -->




		<div class="modal fade" id="updatemodel" role="dialog" >
  	<div class="modal-dialog">

  		<!-- Modal content-->
  		<div class="modal-content">
  			<div class="modal-header">
  				<h4 class="modal-title">Events Data Entry</h4>
  				<button type="button" class="close" data-dismiss="modal">
  					<span aria-hidden="true">&times;</span>
  				</button>

  			</div>
  			<form id="updateform" action="/updateevent/" method="post" enctype="multipart/form-data">
  				@csrf
  				{{method_field('PUT')}}
  				<div class="modal-body">


  					<div class="form-group">
  						<label>Name</label>
  						<input type="text" id="euname" class="form-control" name="euname" placeholder="Enter Event Name">
  					</div>
  					<div class="form-group">
  						<label>Short Description</label>
  						<input type="text" id="eushort" class="form-control" placeholder="Enter Short Description" name="eushort">
  					</div>
  					<div class="dates form-group" style="">
  						<label>Choose DATE</label>
  						<input type="date" style="" class="form-control" id="usr2" name="event_dateu" placeholder="YYYY-MM-DD" autocomplete="off" >
  					</div>
  					<div class="form-group">
  						<label>Long Description</label>
  						<input type="text" id="eulong" class="form-control" placeholder="Enter Long Description" name="eulong">
  					</div>


  					<div class="input-group">
  						<div class="custome-file">
  							<input type="file" id="euimage" name="uimage" class="custome-file-input">
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


  	<!-- ******************************************************

			Model For Data Updating Ends here
		******************************************************** -->




	<!-- ******************************************************

			Model For Data Deleting Starts here
		******************************************************** -->
		<div class="modal fade" id="deletemodel" role="dialog" >
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Alumni Entry Deletion</h4>
						<button type="button" class="close" data-dismiss="modal">
							<span aria-hidden="true">&times;</span>
						</button>

					</div>
					<form id="deleteform" action="/deleteevent/" method="post" enctype="multipart/form-data">
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
	<!-- ******************************************************

			Model For Data Deleting Ends here
		******************************************************** -->



@endsection
@section('script')
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
@endsection


<script src="js/jquery.min.js" type="text/javascript" ></script>
@section('js')
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
            			$('#euname').val(data[1]);
            			$('#event_dateu').val(data[2]);
            			$('#eushort').val(data[3]);
            			$('#eulong').val(data[4]);
            			$('#user2').val(data[5]);


            			$('#updateform').attr('action','/updateevent/'+data[0]);
            			$('#updatemodel').modal('show');

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

            			$('#deleteform').attr('action','/deleteevent/'+data[0]);
            			$('#deletemodel').modal('show');

            		});
            		$('.dates #usr2').datepicker({
            			'format': 'yyyy-mm-dd',
            			'autoclose': true
            		});






            		$('.dates #usr1').datepicker({
            			'format': 'yyyy-mm-dd',
            			'autoclose': true
            		});


            	});
            </script>
            @endsection
           
