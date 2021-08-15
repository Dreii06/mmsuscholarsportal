<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Profile;
use App\Models\StudentScholarship;

class StudentScholarshipController extends Controller
{
    //
    function show() {
        $id = Auth::user()->id;
        $user = Profile::find($id);

        $scholar = StudentScholarship::where('student_id', '=', $user->student_id)->first();
        
        return view('/scholarshipdetails', compact('scholar'));
    }

    function index(Request $request) {
        $id = Auth::user()->id;
        $user = Profile::find($id);
        $scholar = StudentScholarship::where('student_id', '=', $user->student_id)->first();

        $scholar->scholarship_program = request('program', false);
        $scholar->inclusive_year = request('year', false);
        $scholar->gwa = request('gwa', false);

        $scholar->save();

        return redirect()->back();
    }

    function delete(Request $request) {
        $id = Auth::user()->id;
        $user = Profile::find($id);
        $scholar = StudentScholarship::where('student_id', '=', $user->student_id)->first();

        $scholar->scholarship_program = NULL;
        $scholar->inclusive_year = NULL;
        $scholar->gwa = NULL;

        $scholar->save();
        return redirect('/dashboard');
    }
}
