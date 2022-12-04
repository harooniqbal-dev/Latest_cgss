@extends('adminlte::page')

  
@section('content')

<div class="container">
  <div class="">
    <div id="int" class="">
      <div class="achievment_title container">
        <h2 class="a_title_line">
          CGSS National and Intenational Achievments

        </h2>

      </div>
      <div class="container">
        <div class="">
          <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">Add Data</button>
          
        </div>
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
        <table id="datatable" class="table table-striped table-borderd table-hover" style="height:10px;">
          <thead class="">
            <tr>
              <th>Id </th>
              <th>Year </th>
              <th>Institute / Contest </th>
              <th>Medals</th>
              <th>Medal Type</th>
              <th>Action </th>
            </tr>
          </thead>
          @foreach ($data  as $item)
          <tr>
            <td>{{ $item ->id }} </td>
            <td>{{ $item ->year }} </td>
            <td>{{ $item ->institute}} </td>
            <td >{{ $item ->medal}} </td>
            <td>{{ $item ->medal_type}}</td>
            <td><a  href="#" class="edit btn btn-success btn-sm">U</a>|<a  href="#" class="delete btn btn-danger btn-sm">D</a></td>
          </tr>
          @endforeach
        </table>




      </div>
      
    </div>


 
  <div class="modal fade" id="editmodel" role="dialog" >
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Alumni Data Updation</h4>
          <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
          </button>

        </div>
        <form id="editform" action="/updateiachievment" method="post" enctype="multipart/form-data">
          @csrf
          {{method_field('PUT')}}
          <div class="modal-body">


            <div class="form-group">
              <label>Year</label>
              <input type="number" id="year" class="form-control" name="year" placeholder="Enter Year">
            </div>
            <div class="form-group">
              <label>Institute / Contest</label>
              <input type="text"id="ins" class="form-control" placeholder="Enter Institute or contest name" name="Institute">
            </div>
            <div class="form-group">
              <label>Medal / Sheet </label>
              <input type="text" id="medal" class="form-control" placeholder="Enter medal or sheets" name="medal">
            </div>
            <div class="form-group">
              <label for="medal_type" id="medal_type"class="dropup">Select medal type:</label>

              <select id="medal_type" name="medal_type" class="dropup-menu form-control" required="required" style="padding: 0px">
                <option value="gold medal">Gold medal</option>
                <option value="silver medal">Silver Medal</option>
                <option value="bronze medal">Bronze Medal</option>

              </select>
              
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
        <form id="deleteform" action="/deleteiachievment/" method="post" enctype="multipart/form-data">
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
  
  
  

  <!-- Modal -->
 
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Alumni Data Updation</h4>
          <button type="button" class="close" data-dismiss="modal"></button>

        </div>
        <form action="{{route('addiachievment')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">


            <div class="form-group">
              <label>Year</label>
              <input type="number" class="form-control" name="year" placeholder="Enter Year">
            </div>
            <div class="form-group">
              <label>Institute / Contest</label>
              <input type="text" class="form-control" placeholder="Enter Institute or contest name" name="Institute">
            </div>
            <div class="form-group">
              <label>Medal / Sheet </label>
              <input type="text" class="form-control" placeholder="Enter medal or sheets" name="medal">
            </div>
            <div class="form-group">
              <label for="medal_type" class="dropup">Select medal type:</label>

              <select id="medal_type" name="medal_type" class="dropup-menu form-control" required="required">
                <option value="gold medal">Gold medal</option>
                <option value="silver medal">Silver Medal</option>
                <option value="bronze medal">Bronze Medal</option>

              </select>
              
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
                var table = $('#datatable').DataTable({
                  "aLengthMenu": [[5,10, 25, 50, 100, -1], [5,10, 25, 50, 100, "All"]],
                    "iDisplayLength": 5,
                });

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
                var table3 = $('#datatable3').DataTable({
                  "bFilter": false,
                  "bPaginate": false,
                  "bLengthChange": false,
                   "bInfo": false,

                });
                var table4 = $('#datatable4').DataTable({
                  "aLengthMenu": [[5,10, 25, 50, 100, -1], [5,10, 25, 50, 100, "All"]],
                    "iDisplayLength": 5,

                });
                var table5 = $('#datatable5').DataTable({
                  "bFilter": false,
                  "bPaginate": false,
                  "bLengthChange": false,
                   "bInfo": false,

                });

                table.on('click','.edit',function(){
                  $tr = $(this).closest('tr');
                  if($($tr).hasClass('child')){
                    $tr = $tr.prev('.parent');
                  }


                  var data = table.row($tr).data();
                  console.log(data);
                  $('#year').val(data[1]);
                  $('#ins').val(data[2]);
                  $('#medal').val(data[3]);
                  $('#medal_type').val(data[4]);

                  $('#editform').attr('action','/updateiachievment/'+data[0]);
                  $('#editmodel').modal('show');

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

                  $('#deleteform').attr('action','/deleteiachievment/'+data[0]);
                  $('#deletemodel').modal('show');

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
                table4.on('click','.editao',function(){
                  $tr = $(this).closest('tr');
                  if($($tr).hasClass('child')){
                    $tr = $tr.prev('.parent');
                  }

                  var data = table4.row($tr).data();
                  console.log(data);
                  $('#auname').val(data[1]);
                  $('#auphysic').val(data[2]);
                  $('#auchem').val(data[3]);
                  $('#aubio').val(data[4]);
                  $('#auclass').val(data[5]);
                  $('#auyear').val(data[6]);
                  $('#auover').val(data[7]);
                  $('#OAupdateform').attr('action','/updateeAolevel/'+data[0]);
                  $('#OAlevelupdate').modal('show');

                });
                table4.on('click','.deleteao',function(){
                  $tr = $(this).closest('tr');
                  if($($tr).hasClass('child')){
                    $tr = $tr.prev('.parent');
                  }

                  var data = table4.row($tr).data();
                  console.log(data);
                  // $('#sname').val(data[1]);
                  // $('#socup').val(data[2]);
                  // $('#sdescrip').val(data[3]);
                  // // $('#simage').val(data[4]);

                  $('#OAdeleteform').attr('action','/deleteAOlevel/'+data[0]);
                  $('#OAleveldelete').modal('show');

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
                  $('#mdeletemodel').modal('show');});
                  table3.on('click','.deleteao',function(){
                  $tr = $(this).closest('tr');
                  if($($tr).hasClass('child')){
                    $tr = $tr.prev('.parent');
                  }

                  var data = table3.row($tr).data();
                  console.log(data);
                  // $('#sname').val(data[1]);
                  // $('#socup').val(data[2]);
                  // $('#sdescrip').val(data[3]);
                  // // $('#simage').val(data[4]);

                  $('#OAyeardeleteform').attr('action','/deleteaoyear/'+data[0]);
                  $('#OAleveldeleteyear').modal('show');});
                

                
              
                  table5.on('click','.deletea',function(){
                  $tr = $(this).closest('tr');
                  if($($tr).hasClass('child')){
                    $tr = $tr.prev('.parent');
                  }

                  var data = table5.row($tr).data();
                  console.log(data);
                  // $('#sname').val(data[1]);
                  // $('#socup').val(data[2]);
                  // $('#sdescrip').val(data[3]);
                  // // $('#simage').val(data[4]);

                  $('#Ayeardeleteform').attr('action','/deleteayear/'+data[0]);
                  $('#Aleveldeleteyear').modal('show');});
                

                });
                    </script>
             
@endsection
