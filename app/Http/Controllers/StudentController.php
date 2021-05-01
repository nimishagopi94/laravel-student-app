<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Marks;

class StudentController extends Controller
{
    //

	public function insert(Request $request)
	{

		$rules = [
			'firstname' => 'required|string|min:3|max:255',			
			'age' => 'required|numeric|max:150|min:0'
		];
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return redirect('create')
			->withInput()
			->withErrors($validator);
		}
		else{
			$data = $request->input();            
			try{				
				$inputArray = [
					'name' => $data['firstname'],
					'age' => $data['age'],
					'gender'=> $data['gender'],
					'teacher_id'=> $data['teacher']
				];

				$create = Student::create($inputArray);
				return redirect('studentlist')->with('status',"Insert successfully");
			}
			catch(Exception $e){
				return redirect('studentlist')->with('failed',"operation failed");
			}
		}
	}
	public function studentlist(Request $request)
	{


		$students = Student::with('teacher')->get();
		return view('studentlist', compact('students'));
	}
	public function editStudent($id)
	{

		$student = Student::with('teacher')->where('id',$id)->first();
		$teachers = Teacher::select('id','name')->get();
		return view('editstudent', compact('student','teachers'));
	}
	public function updateStudent(Request $request, $id)
	{

		$student = Student::find($id);
		$student->name = $request->get('firstname');
		$student->age = $request->get('age');
		$student->teacher_id = $request->get('teacher');        
		$student->save();
        //
		return redirect('/studentlist')->with('success', 'Successfully updated!');
	}
	public function deleteStudent($id)
	{

		$Student = Student::find($id);
		$Student->delete();
		return redirect('/studentlist')->with('success', 'Successfully deleted');
	}
	public function addMark(Request $request)
	{

		$studentSelect = Student::orderBy('name')->Select('name', 'id')->get();
		return view('addmarks', compact('studentSelect'));
	}
	public function saveMark(Request $request, $id = null)
	{       

		$data = $request->input();
		$inputArray = ['student_id' => $data['studentid'],
		'term' => $data['term'],
		'maths'=> $data['maths'],
		'science'=> $data['science'],
		'history'=> $data['history']                          
	];

	if(isset($id)){
		$create = Marks::where('id',$id)->update($inputArray);
	}else{
		$create = Marks::create($inputArray);		
	}			
	return redirect('/markList')->with('success', 'Successfully updated');
}
public function markList(Request $request){

	$marks = Marks::with('student')->get();
	return view('marklist', compact('marks'));
}
public function deleteMarks($id)
{

	$Student = Marks::find($id);
	$Student->delete();
	return redirect('/markList')->with('success', 'Successfully deleted');
}
public function editMark($id){

	$marks = Marks::with('student')->where('id',$id)->first();
	$studentSelect = Student::orderBy('name')->Select('name', 'id')->get(); 
	return view('editmark', compact('marks','studentSelect'));
}
}
