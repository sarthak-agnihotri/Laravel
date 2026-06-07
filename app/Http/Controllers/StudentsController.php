<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students=Students::all();
        return view('students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'roll_no'=>'required|unique:students,roll_no',
            'email'=>'required|email',
            'department'=>'required'
        ]);
        Students::create($request->all());
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Students $students)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Students $student)
{
    return view('students.edit', ['students' => $student]);
}

public function update(Request $request, Students $student)
{
    $request->validate([
        'name' => 'required',
        'roll_no' => 'required|unique:students,roll_no,' . $student->id,
        'email' => 'required|email',
        'department' => 'required'
    ]);

    $student->update($request->all());

    return redirect()->route('students.index');
}

public function destroy(Students $student)
{
    $student->delete();

    return redirect()->route('students.index');
}
}
