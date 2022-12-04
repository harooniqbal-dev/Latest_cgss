

@extends('adminlte::page')

  
@section('content')
  <div class="container">

    <ul class="nav nav-tabs nav-center">
      <li class="active"><a data-toggle="tab" href="#int">International</a></li>
      <li><a data-toggle="tab" href="#matric">Matriculation</a></li>
      <li><a data-toggle="tab" href="#alevel">A level</a></li>
      
    </ul>
    
  </div>
 <!-- Modal -->

 <div class="container">
  <div class="tab-content">
    <div id="int" class="tab-pane fade in active">
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


    <!-- Matriculation Tab -->
    <div id="matric" class="tab-pane fade">
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
          

          @if(Session('success'))
          <div class="alert alert-success">
            <p>{{Session('success')}}</p>

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

    <!-- **************************************
                  A/O Level Tab
          **********************************-->
    <div id="alevel"class="tab-pane fade">
      <div class="achievment_title container">
        <h2 class="a_title_line">
          A/O Level Achievments

        </h2>

      </div>
      <div class="container">
        <div class="row">
          <div class=" col-lg-3 col-md-3 col-sm-3">
            <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#OAleveladd">Add Data</button>
          </div>
          

          
          
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">

            <table id="datatable4" class="table  table-striped table-borderd table-hover display table" style="height:10px;">
              <thead class="">
                <tr>
                  <th>Id </th>
                  <th>Name </th>
                  <th>Physics</th>
                  <th>Chemistry</th>
                  <th>Bio / Math</th>
                  <th>Class</th>
                  <th>Year</th>
                  <th>Over all </th>
                  <th>Action </th>
                </tr>
              </thead>
              @foreach($dataoa as $aolevel)
              <tr>
                <td>{{$aolevel->id}}</td>
                <td>{{$aolevel->name}}</td>
                <td>{{$aolevel->phy}}</td>
                <td>{{$aolevel->chem}}</td>
                <td>{{$aolevel->biomath}}</td>
                <td>{{$aolevel->class}}</td>
                <td>{{$aolevel->year}}</td>
                <td>{{$aolevel->total_Grades}}</td>
                <td>
                  <a  href="#" class="editao btn btn-success btn-sm">U</a>
                  |
                  <a  href="#" class="deleteao btn btn-danger btn-sm">D</a></td>
                  
                </td>
                
              </tr>
             @endforeach

              </table>

            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6" style="    margin-top: 57px;">
               <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#aolevelyear">Add Years </button>
               <p>Years must be three otherwise no data display on front page</p>
              <table id="datatable3" class="table  table-striped table-borderd table-hover display" >

                <thead>
                  <th>ID</th>
                  <th>Years</th>
                  <th>Action</th>
                </thead>
                @foreach($dataoay as $aoyear)
                <tr>
                  <td>{{$aoyear->id}}</td>
                  <td>{{$aoyear->yearao}}</td>
                  <td><a  href="#" class="deleteao btn btn-danger btn-sm">Delete</a></td>
                </tr>
                @endforeach


                
              </table>
              
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6" style="    margin-top: 57px;">
               <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#alevelyear">Add Years </button>
               <p>Years must be three otherwise no data display on front page</p>

              <table id="datatable5" class="table  table-striped table-borderd table-hover display" >

                <thead>
                  <th>ID</th>
                  <th>Years</th>
                  <th>Action</th>
                </thead>
                @foreach($dataay as $ayear)
                <tr>
                  <td>{{$ayear->id}}</td>
                  <td>{{$ayear->yearao}}</td>
                  <td><a  href="#" class="deletea btn btn-danger btn-sm">Delete</a></td>
                </tr>
                @endforeach


                
              </table>
              
            </div>
          </div>
            
            

            
          
        </div>
      </div>


      
    </div>
    
  </div>
</div>





 
  <div class="modal fade" id="editmodel" role="dialog" style="">
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
              <input type="text" class="form-control" name="mname" placeholder="Enter Year">
            </div>
            <div class="form-group">
              <label>Marks</label>
              <input type="number" class="form-control" placeholder="Enter Institute or contest name" name="mmarks">
            </div>
            <div class="form-group">
              <label>FBiase Year</label>
              <input type="number" class="form-control" placeholder="Enter medal or sheets" name="myear">
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
    <div class="modal fade" id="addmodalyear" role="dialog" style=" ">
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


    <!--               Front view Model For Matriculation ends here   -->


    <!-- **********************************************
                Add Model for A/O Level
    *************************************************-->
    <div class="modal fade" id="OAleveladd" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Entry of O/A Level Student </h4>
          <button type="button" class="close" data-dismiss="modal"></button>

        </div>
        <form id="OAaddform" action="{{route('addAOlevel')}}" method="post" enctype="multipart/form-data">
          @csrf

         
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-6 col-lg-6 col-md-6">
                <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control" name="aname" id="aname" placeholder="Enter Your Name">
            </div>
            <div class="form-group">
              <label>Physices</label>
              <input type="text" class="form-control" placeholder="Enter Physic Grade " name="aphy" id="aphy">
            </div>
            <div class="form-group">
              <label>Chemistry</label>
              <input type="text" class="form-control" placeholder="Enter Chemistry Grade" name="achem" id="achem">
            </div>
            <div class="form-group">
              <label>Bio / Math</label>
              <input type="text" class="form-control" placeholder="Enter Biology Grade" name="abio" id="abio">
            </div>

              </div>
              <div class="col-sm-6 col-lg-6 col-md-6">
                <div class="form-group">
              <label>Over All Grades</label>
              <input type="text" class="form-control" placeholder="Enter Overall Grades" name="aover" id="aover">
            </div>
            <div class="form-group">
              <label>Enter Year</label>
              <input type="text" class="form-control" placeholder="Enter year" name="ayear" id="ayear">
            </div>
            <div class="form-group">
              <label for="class_type" class="dropup">Select A/O Level:</label>

              <select id="class_type" name="aclass" class="dropup-menu form-control" required="required">
                <option value="A_level">A Level</option>
                <option value="O_level">O_level</option>
                </select>
              
            </div>
              </div>   
            </div>


            
            

             </div>

          
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Add Data</button>

            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </form>
      </div>

    </div>
  </div>


    <!-- **********************************************
                Add Model for A/O Level
    *************************************************-->



    <!-- **********************************************
                Update Model for A/O Level
    *************************************************-->
        <div class="modal fade" id="OAlevelupdate" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Update Detail for A/O level</h4>
          <button type="button" class="close" data-dismiss="modal"></button>

        </div>
        <form id="OAupdateform" action="/updateeAolevel/" method="post" enctype="multipart/form-data">
          @csrf
          {{method_field('PUT')}}
          <div class="modal-body">


            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control" name="auname" id="auname" placeholder="Enter Your Name">
            </div>
            <div class="form-group">
              <label>Physices</label>
              <input type="text" class="form-control" placeholder="Enter Physic Grade " name="auphysic" id="auphysic">
            </div>
            <div class="form-group">
              <label>Chemistry</label>
              <input type="text" class="form-control" placeholder="Enter Chemistry Grade" name="auchem" id="auchem">
            </div>
            <div class="form-group">
              <label>Bio / Math</label>
              <input type="text" class="form-control" placeholder="Enter Biology Grade" name="aubio" id="aubio">
            </div>
            <div class="form-group">
              <label>Over All Grades</label>
              <input type="text" class="form-control" placeholder="Enter Overall Grades" name="auover" id="auover">
            </div>
            <div class="form-group">
              <label>Enter Year</label>
              <input type="text" class="form-control" placeholder="Enter year" name="auyear" id="auyear">
            </div>
            <div class="form-group">
              <label for="class_type2" class="dropup">Select A/O Level:</label>

              <select id="class_type2" name="auclass" class="dropup-menu form-control" required="required">
                <option value="A_level">A Level</option>
                <option value="O_level">O_level</option>
                </select>
              
            </div>

             </div>

          
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Add Data</button>

            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </form>
      </div>

    </div>
  </div>

    <!-- **********************************************
                Update Model for A/O Level Ends
    *************************************************-->



    

    <!-- **********************************************
                Delete Model for A/O Level 
    *************************************************-->

    <div class="modal fade" id="OAleveldelete" role="dialog" >
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Enter 3 FBIASE Years that have to be shown on Page</h4>
          <button type="button" class="close" data-dismiss="modal"></button>

        </div>
        <form id="OAdeleteform" action="/deleteAOlevel/" method="post" enctype="multipart/form-data">
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
  <!-- **********************************************
                Delete Model for A/O Level Ends
    *************************************************-->


    <!-- **********************************************
            Add Model for front A/O Level years
    *************************************************-->
    <div class="modal fade" id="aolevelyear" role="dialog" >
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Enter Years that have to be shown on Front Page</h4>
          <button type="button" class="close" data-dismiss="modal"></button>

        </div>
        <form id="aoyearform" action="{{route('addAOlevelyear')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">


            <div class="form-group">
              <label>Year</label>
              <input type="num" name="yearao"class="form-control" placeholder="Enter Year">
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


    <!-- **********************************************
            Add Model for front A/O Level years Ends
    *************************************************-->


    <!-- **********************************************
            Delete Model for front A/O Level years
    *************************************************-->
     <div class="modal fade" id="OAleveldeleteyear" role="dialog" >
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Delete Year</h4>
          <button type="button" class="close" data-dismiss="modal"></button>

        </div>
        <form id="OAyeardeleteform" action="/deleteAOlevelyear/" method="post" enctype="multipart/form-data">
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

    <!-- **********************************************
          Delete Model for front A/O Level Ends
    *************************************************-->
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





  <!-- **********************************************
            Add Model for front A Level years
    *************************************************-->
    <div class="modal fade" id="alevelyear" role="dialog" >
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Enter Years that have to be shown on Front Page</h4>
          <button type="button" class="close" data-dismiss="modal"></button>

        </div>
        <form id="ayearform" action="{{route('addAlevelyear')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">


            <div class="form-group">
              <label>Year</label>
              <input type="num" name="yearao"class="form-control" placeholder="Enter Year">
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


    <!-- **********************************************
            Add Model for front A Level years Ends
    *************************************************-->


    <!-- **********************************************
            Delete Model for front A Level years
    *************************************************-->
     <div class="modal fade" id="Aleveldeleteyear" role="dialog" style=" margin-top: 54px;
    padding-top: 123px">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Delete Year</h4>
          <button type="button" class="close" data-dismiss="modal"></button>

        </div>
        <form id="Ayeardeleteform" action="/deleteAlevelyear/" method="post" enctype="multipart/form-data">
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
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
              <script src="js/owl.carousel.min.js"type="text/javascript"></script>
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
              <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
              <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

</body>
</html>
@endsection