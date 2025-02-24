<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{
     public function index(){
        $students = Student::all();
    
        // Pass the students to the view
        return view('students.index', compact('students'));
   }
   public function create(){
    return view('students.create');
   }
   public function store(Request $request)
   {
       // Validate the data
       $validated = $request->validate([
           'Name' => 'required',
           'Addmission_No' => 'required',
           'Age' => 'required',
       ]);
   
       // Save to the database
       $student = Student::create($validated);
   
       // Redirect with a success message
       return redirect()->route('student.index')->with('success', 'Student added successfully!');
   }
   public function edit(Student $student)
    {
        return view('students.edit', ['student' => $student]);
    }
    public function update(Student $student, Request $request){
        $data = $request->validate([
            'Name'=>'required',
            'Addmission_No'=>'required|numeric',
            'Age'=>'required|numeric',
        ]);
        $student->update($data);
        return redirect(route('student.index'))->with('success','Student Updated Successffully');
    }
    public function destroy(Student $student){
        $student->delete();
        return redirect(route('student.index'))->with('success','Student Deleted Successffully');
    }


}
