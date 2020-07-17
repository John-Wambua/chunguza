<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Fees;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Returns all students
        $students=Student::orderBy('id','desc')->get();
        $id=1;

        return view('John_Wambua.students.index',compact('students','id'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Returns view for adding new students
        return view('John_Wambua.students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'student_number' => 'required|digits:6|unique:students|max:6',
            'full_name' => 'required',
            'date_of_birth' => 'required',
            'address' => 'required',
        ]);
        //Save students data to DB
        $student=new Student();
        $student->student_number=$request->get('student_number');
        $student->full_name=$request->get('full_name');
        $student->date_of_birth=$request->get('date_of_birth');
        $student->address=$request->get('address');
        $student->save();
        return redirect('students');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Display individual students
        $student=Student::findOrFail($id);
        $fees = Student::find($id)->fees;
        $id=1;
        return view('John_Wambua.students.show',compact('student','fees','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Display update students view.
        $student=Student::findOrFail($id);
        return view('John_Wambua.students.edit',compact('student'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'full_name' => 'required',
            'date_of_birth' => 'required',
            'address' => 'required',
        ]);
        //update students to DB
        $student=Student::findOrFail($id);
        $student->update($request->except(['_token', '_method' ]));

        return redirect('/students/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete students
        $student=Student::findOrFail('id',$id);
        $student->delete();
    }
}
