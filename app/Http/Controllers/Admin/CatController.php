<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cat;
use finfo;

class CatController extends Controller
{
    public function index()
    {
        $data['cats']= cat::select('id','name')->orderBy('id', 'DESC')->get();

        return view('admin.cats.index')->with($data);
    }

    public function create()
    {
        return view('admin.cats.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:20'
        ]);
        cat::create($data);

        return redirect(route('admin.cats.index'));
    }
    public function edit($id)
    {
        $data['cat'] = cat::findOrFil($id);

        return view('admin.cats.edit')->with($data);
    }
    public function update(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:20'
        ]);
        cat::findOrFail($request->id)->update($data);

        return back();
    }
    public function delete($id)
    {
        cat::findOrFail($id)->delete();
        return back();
    }
}
