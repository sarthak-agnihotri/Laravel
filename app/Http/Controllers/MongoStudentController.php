<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MongoStudent;

class MongoStudentController extends Controller
{
    public function insert(){
        MongoStudent::insert([
            ['name'=>'Sarthak',
            'email'=>'sarthak@gmail.com',
            'course'=>'BTech',
            'age'=>22
            ],
            [
                'name'=>'Rahul',
                'email'=>'rahul@gmail.com',
                'course'=>'BCA',
                'age'=>20
            ],
            [
                'name'=>'Aman',
                'email'=>'aman@gmail.com',
                'course'=>'MCA',
                'age'=>22
            ],
            [
                'name'=>'Priya',
                'email'=>'priya@gmail.com',
                'course'=>'MBA',
                'age'=>23
            ],
            [
                'name'=>'Rohit',
                'email'=>'rohit@gmail.com',
                'course'=>'BSC',
                'age'=>19
            ]
        ]);
        return "5 MongoDB Students Inserted Successfully";
    }

    public function show(){
        return MongoStudent::all();
    }

    public function single($id){
        return MongoStudent::find($id);
    }

    public function update($id){
        $student=MongoStudent::find($id);
        $student->update([
            'course'=>'Update Course',
            'age'=>25
        ]);
        return "MongoDB Student Updated Successfully";
    }

    public function delete($id){
        $student=MongoStudent::find($id);
        $student->delete();
        return "MongoDB Student Deleted Successfully";
    }
}
