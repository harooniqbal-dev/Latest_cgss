   @extends('adminlte::page')

  
@section('content')
   <!-- Matriculation Tab -->
    <div id="matric" class="">
      <div class="achievment_title container">
        <h2 class="a_title_line">
          Matriculation Achievments

        </h2>

      </div>
      <div class="container">
        <div class="row">
          <div class=" col-lg-3 col-md-3 col-sm-3">
            <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal1">Add Data</button>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 text-right">
            <h4>Add years to be display -----></h4>

          </div>
          <div class="col=lg-6 col-md-6 col-sm-6 text-right">
            <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#addmodalyear">Add Years </button>
            

          </div>
        </div>

        <div class="">
          
 @if(count($errors) > 0)
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $error)
              <li>{{$error}}</li>
              @endforeach
            </ul>

          </div>
          @endif
        @if(Session('success'))
        <div class="alert alert-success">
          <p>{{Session('success')}}</p>

        </div>
        @endif  
        @if(Session('error'))
        <div class="alert alert-danger">
          <p>{{Session('error')}}</p>

        </div>
        @endif
        </div> 
        <div class="row">
          <div class="col-lg-9 col-md-9 col-sm-9">
            <table id="datatable1" class="table  table-striped table-borderd table-hover display" style="height:10px;">
              <thead class="">
                <tr>
                  <th>Id </th>
                  <th>Name </th>
                  <th>Marks</th>
                  <th>Year</th>
                  <th>Action </th>
                </tr>
              </thead>
              @foreach($datam as $student)
              <tr>
                <td> {{$student-> id}}</td>
                <td>{{$student-> name}}</td>
                <td>{{$student-> marks}}</td>
                <td>{{$student-> year}}</td>
                <td><a  href="#" class="editm btn btn-success btn-sm">U</a>
                  |
                  <a  href="#" class="deletem btn btn-danger btn-sm">D</a></td>

                </tr>
                @endforeach
              </table>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 "style="    margin-top: 44px;">
              <table id="datatable2" class="table  table-striped table-borderd table-hover display" >

                <thead>
                  <th>ID</th>
                  <th> Years</th>
                  <th>Action</th>
                </thead>
                @foreach($datamy as $dat)
                <tr>
                  
                  <td style="text-align:center;">{{$dat->id}}</td>
                  <td style="text-align:center;">{{$dat->fbiase_year}}</td>
                  <td>
                    <a  href="#" class="deletemy btn btn-danger btn-sm">Delete</a>
                  </td>

                 
                  
                </tr>
                 @endforeach


                
              </table>
              
            </div>

          </div>
        




      </div>


      
    </div>
    <!-- **************************************************
  *****************Models for Matriculation**************
  ****************************************************-->



  <!--               Add Model For Matriculation   -->

<div class="modal fade" id="myModal1" role="dialog" >
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Data Entry For Matriculation</h4>
          <button type="button" class="close" data-dismiss="modal"></button>

        </div>
        <form action="{{route('addmachievment')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">


            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control" name="mname" placeholder="Enter Name Here">
            </div>
            <div class="form-group">
              <label>Marks</label>
              <input type="number" class="form-control" placeholder="Enter marks here " name="mmarks">
            </div>
            <div class="form-group">
              <label>FBiase Year</label>
              <input type="number" class="form-control" placeholder="Enter Biase Year" name="myear">
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




    <!--               Add Model For Matriculation Ends here   -->


<div class="modal fade" id="mupdatemodel" role="dialog" >
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Updation of Entry</h4>
          <button type="button" class="close" data-dismiss="modal"></button>

        </div>
        <form id="mupdateform" action="/updatemachievment/" method="post" enctype="multipart/form-data">
          @csrf
          {{method_field('PUT')}}
          <div class="modal-body">


            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control" name="muname" id="muname" placeholder="Enter Year">
            </div>
            <div class="form-group">
              <label>Marks</label>
              <input type="number" class="form-control" placeholder="Enter Institute or contest name" name="mumarks" id="mumarks">
            </div>
            <div class="form-group">
              <label>FBiase Year</label>
              <input type="number" class="form-control" placeholder="Enter medal or sheets" name="muyear" id="muyear">
            </div>
             </div>

          
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Update Data</button>

            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </form>
      </div>

    </div>
  </div>




    <!--               Update Model For Matriculation ends here   -->



    <!--               Delete Model For Matriculation Starts here--->
    <!-- delete model -->
<div class="modal fade" id="mdeletemodel" role="dialog" >
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Alumni Entry Deletion</h4>
          <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
          </button>

        </div>
        <form id="mdeleteform" action="/deletemachievment/" method="post" enctype="multipart/form-data">
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
  <!-- Model ends here-->

    <!--               Delete Model For Matriculation ends here   -->


    <!--               Front view Model For Matriculation starts here   -->
    <div class="modal fade" id="addmodalyear" role="dialog" >
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Enter 3 FBIASE Years that have to be shown on Page</h4>
          <button type="button" class="close" data-dismiss="modal"></button>

        </div>
        <form id="addformyear" action="{{route('addmachievmenty')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">


            <div class="form-group">
              <label>FBIASE-|</label>
              <input type="num" name="fbiase_year"class="form-control" placeholder="Enter Biase Year">
            </div>
            
             </div>

          
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Update Data</button>

            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </form>
      </div>

    </div>
  </div>


  <div class="modal fade" id="mdeletemodelyear" role="dialog" >
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Delete Year</h4>
          <button type="button" class="close" data-dismiss="modal"></button>

        </div>
        <form id="mdeleteformyear" action="/biasedelete/" method="post" enctype="multipart/form-data">
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



@endsection

@section('js')





  <!-- Model ends here-->
   <script src="js/jquery.min.js" type="text/javascript" ></script>
            <script src="js/bootstrap.min.js" type="text/javascript"></script>
            <script src="js/owl.carousel.min.js"type="text/javascript"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
            <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
            <script type="text/javascript">
              $(document).ready(function(){
              

                var table1 = $('#datatable1').DataTable({
                  "aLengthMenu": [[5,10, 25, 50, 100, -1], [5,10, 25, 50, 100, "All"]],
                    "iDisplayLength": 5,
                });
                var table2 = $('#datatable2').DataTable({
                  "bFilter": false,
                  "bPaginate": false,
                  "bLengthChange": false,
                   "bInfo": false
                });
                
                
                table1.on('click','.editm',function(){
                  $tr = $(this).closest('tr');
                  if($($tr).hasClass('child')){
                    $tr = $tr.prev('.parent');
                  }

                  var data = table1.row($tr).data();
                  console.log(data);
                  $('#muname').val(data[1]);
                  $('#mumarks').val(data[2]);
                  $('#muyear').val(data[3]);
                  $('#mupdateform').attr('action','/updatemachievment/'+data[0]);
                  $('#mupdatemodel').modal('show');

                });
                
                table1.on('click','.deletem',function(){
                  $tr = $(this).closest('tr');
                  if($($tr).hasClass('child')){
                    $tr = $tr.prev('.parent');
                  }

                  var data = table1.row($tr).data();
                  console.log(data);
                  // $('#sname').val(data[1]);
                  // $('#socup').val(data[2]);
                  // $('#sdescrip').val(data[3]);
                  // // $('#simage').val(data[4]);

                  $('#mdeleteform').attr('action','/deletemachievment/'+data[0]);
                  $('#mdeletemodel').modal('show');

                });
               
               
                table2.on('click','.deletemy',function(){
                  $tr = $(this).closest('tr');
                  if($($tr).hasClass('child')){
                    $tr = $tr.prev('.parent');
                  }

                  var data = table2.row($tr).data();
                  console.log(data);
                  // $('#sname').val(data[1]);
                  // $('#socup').val(data[2]);
                  // $('#sdescrip').val(data[3]);
                  // // $('#simage').val(data[4]);

                  $('#mdeleteformyear').attr('action','/biasedelete/'+data[0]);
                  $('#mdeletemodelyear').modal('show');});
                  0

                
              
                  
                

                });
                    </script>
              


@endsection