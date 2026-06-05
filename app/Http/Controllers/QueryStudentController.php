<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryStudentController extends Controller
{
    //
    public function insertStudent(){
        DB::table('students')->insert([
            'name' => 'Sarthak',
            'email' => 'sarthak@example.com',
            'age' => 21,
            'course' => 'Laravel',
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        return "Student inserted successfully";
    }
    public function showStudents(){
        $students=DB::table('students')->get();
        return $students;
    }
     public function showSingleStudent($id)
    {
        $student = DB::table('students')->where('id', $id)->first();

        return $student;
    }
    public function updateStudent($id){
        DB::table('students')->where('id',$id)->update([
            'course'=>'Laravel 12',
            'updated_at'=>now()
        ]);
        return "Student updated successfully";
    }
    public function deleteStudent($id){
        DB::table('students')->where('id',$id)->delete();
        return "Student deleted successfully";
    }

}
