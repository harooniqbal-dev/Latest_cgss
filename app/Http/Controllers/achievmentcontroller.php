<?php
namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\iachiev;
use App\machiev;
use App\fbiase;
use App\AOlevel;
use App\AOyear;
use App\Ayear;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Achievmentcontroller extends Controller{

	
	public function index(){
		$data = iachiev::all();
		$datam = machiev::all()->sortByDesc('marks');
		$dataoa = AOlevel::all();
		$datamy2 = fbiase::pluck('fbiase_year')->toArray();
		$dataoay = AOyear::pluck('yearao')->toArray();
		$dataay = Ayear::pluck('yearao')->toArray();
		 $pendingMembers = AOlevel::where('year', $dataoay[0])
		 				->where('class','O_level')->count();
		$pendingMembers1 = AOlevel::where('year', $dataoay[1])
		 				->where('class','O_level')->count();
		 $pendingMembers2 = AOlevel::where('year', $dataoay[2])
		 				->where('class','O_level')->count();

		 $pendingMembers3 = AOlevel::where('year', $dataay[0])
		 				->where('class','A_level')->count();
		$pendingMembers4 = AOlevel::where('year', $dataay[1])
		 				->where('class','A_level')->count();
		 $pendingMembers5 = AOlevel::where('year', $dataay[2])
		 				->where('class','A_level')->count();
     	// if ($pendingMembers > 3) {
     	// 	$pendingMembers = 3;
     	// }
     	if ($pendingMembers1 > 3) {
     		$pendingMembers1 = 3;
     	}
     	if ($pendingMembers2 > 3) {
     		$pendingMembers2 = 3;
     	}
     	if ($pendingMembers3 > 3) {
     		$pendingMembers3 = 3;
     	}
     	if ($pendingMembers4 > 3) {
     		$pendingMembers4 = 3;
     	}
     	if ($pendingMembers5 > 3) {
     		$pendingMembers5 = 3;
     	}
		 		
		return view('achievment',compact('data','datam','datamy2','dataoa','dataay','dataoay','pendingMembers','pendingMembers1','pendingMembers2','pendingMembers3','pendingMembers4','pendingMembers5'));
		
	}
	public function matric_front(){
		$datam = machiev::all()->sortByDesc('marks');
	
		$datamy2 = fbiase::pluck('fbiase_year')->toArray();
		return view('Matric_achievment',compact('datam','datamy2'));

	}
	public function international_front(){
		$data = iachiev::all();
		return view('international_front',compact('data'));

	}
	public function ao_front(){
		$dataoa = AOlevel::all();
		
		$dataoay = AOyear::pluck('yearao')->toArray();
		$dataay = Ayear::pluck('yearao')->toArray();
		 $pendingMembers = AOlevel::where('year', $dataoay[0])
		 				->where('class','O_level')->count();
		$pendingMembers1 = AOlevel::where('year', $dataoay[1])
		 				->where('class','O_level')->count();
		 $pendingMembers2 = AOlevel::where('year', $dataoay[2])
		 				->where('class','O_level')->count();

		 $pendingMembers3 = AOlevel::where('year', $dataay[0])
		 				->where('class','A_level')->count();
		$pendingMembers4 = AOlevel::where('year', $dataay[1])
		 				->where('class','A_level')->count();
		 $pendingMembers5 = AOlevel::where('year', $dataay[2])
		 				->where('class','A_level')->count();		
				
		return view('AOlevel_achievment',compact('dataoa','dataay','dataoay','pendingMembers','pendingMembers1','pendingMembers2','pendingMembers3','pendingMembers4','pendingMembers5'));
		
	}
	public function matric(){
		$data = iachiev::all();
		$datam = machiev::all();
		$datamy = fbiase::all();
		$dataoa = AOlevel::all();
		$dataoay = AOyear::all();
		$dataay = Ayear::all();
		return view('matric',compact('data','datam','datamy','dataoa','dataoay','dataay'));

	}
	public function international(){
		$data = iachiev::all();
		$datam = machiev::all();
		$datamy = fbiase::all();
		$dataoa = AOlevel::all();
		$dataoay = AOyear::all();
		$dataay = Ayear::all();
		return view('international',compact('data','datam','datamy','dataoa','dataoay','dataay'));
	}
	public function aolevel(){
		$data = iachiev::all();
		$datam = machiev::all();
		$datamy = fbiase::all();
		$dataoa = AOlevel::all();
		$dataoay = AOyear::all();
		$dataay = Ayear::all();
		return view('AOlevel',compact('data','datam','datamy','dataoa','dataoay','dataay'));
	}
	public function entry(){
		return view('achievmententry');
	}
	public function storem(Request $request){
		$message = ['mname.required'=>'Name is required','myear.required'=>'Year is required','mmarks.required'=>'Obtain marks are required'];
		$request->validate([
			'mname' => 'required',
			'mmarks' => 'required',
			'myear' => 'required',
			
			],$message);
		$data = new machiev();
		$data->name = $request->input('mname');
		$data->marks = $request->input('mmarks');
		$data->year = $request->input('myear');
		// $data->total_marks = $request->input('mtotal');
		$data->save();
		return redirect('matric')->withSuccess('Data Saved');

	}
	public function store(Request $request){
		
		$request->validate([
			'year' => 'required',
			'Institute' => 'required',
			'medal' => 'required',
			'medal_type' => 'required'
			]);
		$data = new iachiev();
		$data->year = $request->input('year');
		$data->institute = $request->input('Institute');
		$data->medal = $request->input('medal');
		$data->medal_type = $request->input('medal_type');
		$data->save();
		return redirect('international')->withSuccess('Data Saved');

	}
	public function display(){
		$data = iachiev::all();
		$datam = machiev::all();
		$datamy = fbiase::all();
		$dataoa = AOlevel::all();
		$dataoay = AOyear::all();
		$dataay = Ayear::all();
		return view('international',compact('data','datam','datamy','dataoa','dataoay','dataay'));
	}
	
	public function update(Request $request,$id){

		$request->validate([
			'year' => 'required',
			'Institute' => 'required',
			'medal' => 'required',
			'medal_type' => 'required'
			]);
		$data = iachiev::find($id);
		$data->year = $request->input('year');
		$data->institute = $request->input('Institute');
		$data->medal = $request->input('medal');
		$data->medal_type = $request->input('medal_type');
		$data->save();
		return redirect('international')->withSuccess('Data Updated');


	}
	public function updatem(Request $request,$id){
		$message = ['muname.required'=>'Name is required','muyear.required'=>'Year is required','mumarks.required'=>'Obtain marks are required'];
		$request->validate([
			'muname' => 'required',
			'mumarks' => 'required',
			'muyear' => 'required',
			
			],$message);

		$data = machiev::find($id);
		$data->name = $request->input('muname');
		$data->marks = $request->input('mumarks');
		$data->year = $request->input('muyear');
		$data->save();
		return redirect('matric')->withSuccess('Data Updated');


	}

	public function delete($id){
		$data = iachiev::find($id);
		$data->delete();
		return redirect('international')->withSuccess('Data Deleted');


	}
	public function mdelete($id){
		$data = machiev::find($id);
		$data->delete();
		return redirect('matric')->withSuccess('Data Deleted');


	}
	public function biase(Request $request){
		$data = new fbiase();
		$data2 = fbiase::count();
		$message = ['fbiase_year.required'=>'Invalid Year'];
		$request->validate([
			'fbiase_year' => 'required|unique:fbiase']);


		if($data2 < 3){
			
				$data->fbiase_year = $request->input('fbiase_year');
				
					$data->save();
					return redirect('matric')->withSuccess('Data Updated');

		}
		
		else{
			return redirect('matric')->withError('You can enter only 3 Biase Years');

		}
		
		
		
	}
	public function biasedelete($id)
	{
		# code...
		$data = fbiase::find($id);
		$data->delete();
		return redirect('matric')->withSuccess('Data Deleted');
		

	}

	public function aostore(Request $request){
		$message = ['aname.required'=>'Name is required','ayear.required'=>'Year is required','aover.required'=>'total grades are required','aclass.required'=>'Class is required'];
		$request->validate([
			'aname' => 'required',
			'ayear' => 'required',
			'aclass' => 'required',
			'aover' => 'required'
			],$message);
		$data = new AOlevel();
		$data->year=$request->input('ayear');
		$data->name=$request->input('aname');
		$data->phy=$request->input('aphy');
		$data->chem=$request->input('achem');
		$data->biomath=$request->input('abio');
		$data->class = $request->input('aclass');
		$data->total_Grades=$request->input('aover');
		$data->busniess = $request->input('busin');
		
		$data->save();
		return redirect('AOlevel')->withSuccess('data saved');



	}
	public function aoupdate(Request $request,$id)
	{
		$message = ['auname.required'=>'Name is required','auyear.required'=>'Year is required','auover.required'=>'total grades are required','auclass.required'=>'Class is required'];
		$request->validate([
			'auname' => 'required',
			'auyear' => 'required',
			'auclass' => 'required',
			'auover' => 'required'
			]);
		$data = AOlevel::find($id);
		$data->year=$request->input('auyear');
		$data->name=$request->input('auname');
		$data->phy=$request->input('auphysic');
		$data->chem=$request->input('auchem');
		$data->biomath=$request->input('aubio');
		$data->class = $request->input('auclass') ;
		$data->busniess = $request->input('ubusin');
		$data->total_Grades=$request->input('auover');
		
		$data->save();
		return redirect('AOlevel')->withSuccess('Data is Updated');

	}
	public function aodelete($id){
		$data = AOlevel::find($id);
		$data->delete();
		return redirect('AOlevel')->withSuccess('Data is Deleted');

	}
	public function frontao(Request $request){
		$data = new AOyear();
		$data2 = AOyear::count();
		$message = ['yearao.required'=>'Invalid Year'];
		$request->validate([
			'yearao' => 'required|unique:aoyear|max:4']);


		if($data2 < 3){
			
				$data->yearao = $request->input('yearao');
				
					$data->save();
					return redirect('achievmententry')->withSuccess('Data Updated');

		}
		
		else{
			return redirect('AOlevel')->withError('You can enter only 3 Biase Years');

		}
		
		
		
	}
	 public function frontaodelete($id)
	{
		# code...
		$data = AOyear::find($id);
		$data->delete();
		return redirect('AOlevel')->withSuccess('Data Deleted');
		

	}
	public function fronta(Request $request){
		$data = new Ayear();
		$data2 = Ayear::count();
		$message = ['yearao.required'=>'Invalid Year'];
		$request->validate([
			'yearao' => 'required|unique:ayear|max:4']);


		if($data2 < 3){
			
				$data->yearao = $request->input('yearao');
				
					$data->save();
					return redirect('AOlevel')->withSuccess('Data Updated');

		}
		
		else{
			return redirect('AOlevel')->withError('You can enter only 3 Biase Years');

		}
		
		
		
	}
	 public function frontadelete($id)
	{
		# code...
		$data = Ayear::find($id);
		$data->delete();
		return redirect('AOlevel')->withSuccess('Data Deleted');
		

	}

	
}

?>