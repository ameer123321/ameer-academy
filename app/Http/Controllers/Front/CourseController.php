<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cat;
use App\Models\course;

class CourseController extends Controller
{
    public function cat($id)
    {
        $data['cat'] = cat::findOrFail($id);

        $data['courses'] = course::where('cat_id', $id)->paginate(6);

        return view('front.courses.cat')->with($data);
    }
    public function show($id, $c_id)
    {
        $data['course'] = course::findOrFail($c_id);
        return view('front.courses.show ')->with($data);
    }
}
