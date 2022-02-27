<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index () {
        /**
         * $data @var \Illuminate\Database\Eloquent\Collection
         */
        $data = \Illuminate\Support\Facades\DB::table('images')->select(['*'])->get();

        //$images = $data->pluck('image')->all();
        $images = $data->all();

        return view('welcome', [
            'images' => $images
        ]);
    }

    public function about() {
        return view('about');
    }

    public function create() {
        return view('create');
    }

    public function show($id) {
        $image = \Illuminate\Support\Facades\DB::table('images')->where('id', $id)->first();
        return view('show', [
            'image' => $image
        ]);
    }

    public function edit($id) {
        $image = \Illuminate\Support\Facades\DB::table('images')->where('id', $id)->first();

        return view('edit', [
            'image' => $image
        ]);
    }

    public function store(\Illuminate\Http\Request $request) {
        /**
         * $image @var \Illuminate\Http\UploadedFile
         */
        $image = $request->file('image');

        $path = $image->store('uploads');

        $result = \Illuminate\Support\Facades\DB::table('images')->insert([
            'image' => $path,
        ]);
        return redirect('/');
    }

    public function update(\Illuminate\Http\Request $request, $id) {
        $image = \Illuminate\Support\Facades\DB::table('images')->where('id', $id)->first();

        $filename = $request->file('image')->store('uploads');

        \Illuminate\Support\Facades\Storage::delete($image->image);

        $result = \Illuminate\Support\Facades\DB::table('images')
            ->where('id', $id)
            ->update([
                'image' => $filename
            ]);
        return redirect('/');
    }

    public function delete( $id) {
        $image = \Illuminate\Support\Facades\DB::table('images')->where('id', $id)->first();
        \Illuminate\Support\Facades\Storage::delete($image->image);

        $result = \Illuminate\Support\Facades\DB::table('images')
            ->where('id', $id)
            ->delete([
                'id' => $id
            ]);
        return redirect('/');
    }
}
