<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = [
            ['id' => 1, 'title' => 'Web Developer'],
            ['id' => 2, 'title' => 'UI/UX Designer'],
            ['id' => 3, 'title' => 'Project Manager'],
        ];

        return view('jobs', compact('jobs'));
    }

    public function apply($id){
        return view ('job-application',compact('id'));
    }

    public function submitApplication(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
        ]);

        return redirect()
            ->route('jobs.index')
            ->with('success', 'Application submitted successfully.');
    }
}
