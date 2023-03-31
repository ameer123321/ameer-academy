<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\course;
use App\Models\SiteContent;
use App\Models\student;
use App\Models\trainer;
use App\Models\Test;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $data['banner'] = SiteContent::select('content')-> where('name','banner')->first();
        $data['courses_content'] = SiteContent::select('content')-> where('name','courses')->first();
        $data['courses'] = course::select('id','name','small_desc','cat_id','trainer_id','img','price')
        ->orderBy('id','desc')
        ->take(3)
        ->get();

        $data['courses_count'] = course::count();
        $data['trainers_count'] = trainer::count();
        $data['students_count'] = student::count();

        $data['tests'] = Test::select('name','spec','img')->get();

        return view('front.index')->with($data);
    }
}
