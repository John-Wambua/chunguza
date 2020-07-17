<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fees;
use App\Student;

class FeesController extends Controller
{
    /**
     * Display a listing o the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Returns all ees records
        $fees=Fees::orderBy('id','desc')->get();
        $id=1;

        return view('John_Wambua.fees.index',compact('fees','id'));

    }

    /**
     * Show the orm or creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Returns view or adding new fees record
        return view('John_Wambua.fees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //save fees records to db
        $validatedData = $request->validate([
            'student_number' => 'required|digits:6|exists:students',
            'date_of_payment' => 'required',
            'amount' => 'required',
        ]);
        //Save fees data to DB

        $student_number=$request->get('student_number');
        $student=Student::where('student_number',$student_number)->first();

        $fees=new Fees();
        $fees->student_id=$student->id;
        $fees->student_number=$request->get('student_number');
        $fees->date_of_payment=$request->get('date_of_payment');
        $fees->amount=$request->get('amount');
        $fees->save();
        return redirect('/fees/create');

    }

    /**
     * Display the speciied resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fees = Student::find($id)->fees;
        foreach ($fees as $fees){
            echo $fees .'<br>';
        }
//        return view('John_Wambua.students.show',compact('fees'));
    }

    /**
     * Show the orm or editing the speciied resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the speciied resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the speciied resource rom storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
