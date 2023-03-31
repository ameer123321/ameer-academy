<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\trainer;
use App\Image;
use Illuminate\Support\Facades\Storage;

class TrainerController extends Controller
{
    public function index()
    {
        $data['trainers']= trainer::select('id','name', 'phone','spec','img')->orderBy('id', 'DESC')->get();

        return view('admin.trainers.index')->with($data);
    }

    public function create()
    {
        return view('admin.trainers.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:50',
            'spec' => 'required|string|max:20',
            'phone' => 'nullable|string|max:20',
            'img' => 'required|image|mimes:jpg,jpeg,png',
        ]);

        $new_name = $data['img']->hashName();
        Image::make($data['img'])->resize(50,50)->save(public_path('uploads/trainers/'.$new_name));
        $data['img'] =$new_name;

        trainer::create($data);

        return redirect(route('admin.trainers.index'));
    }
    public function edit($id)
    {
        $data['trainer'] = trainer::findOrFil($id);

        return view('admin.trainers.edit')->with($data);
    }
    public function update(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:50',
            'spec' => 'required|string|max:20',
            'phone' => 'nullable|string|max:20',
            'img' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        $old_name =trainer::findOrFail($request->id)->img;

        if ($request->hasFile('img')) {
            Storage::disk('uploads')->delete('trainers/'. $old_name);

            $new_name = $data['img']->hashName();
            Image::make($data['img'])->resize(50,50)->save(public_path('uploads/trainers/'.$new_name));
            $data['img'] =$new_name;

        }
        else
        {
            $data['img'] = $old_name;
        }

        trainer::findOrFail($request->id)->update($data);

        return back();
    }
    public function delete($id)
    {
        $old_name =trainer::findOrFail($id)->img;
        Storage::disk('uploads')->delete('trainers/'. $old_name);

        trainer::findOrFail($id)->delete();
        return back();
    }
}
