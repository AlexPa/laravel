<?php

namespace App\Http\Controllers;

use App\services\ImageService;

class ImageController extends Controller
{
    private ImageService $imageService;

    public function __construct(ImageService $imageService) {
        $this->imageService = $imageService;
    }

    public function index () {
        $images = $this->imageService->getAll();
        return view('welcome', [
            'images' => $images
        ]);
    }

    public function create() {
        return view('create');
    }

    public function show($id) {
        return view('show', [
            'image' => $this->imageService->getOne($id)
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
        $this->imageService->add($image);

        return redirect('/');
    }

    public function update(\Illuminate\Http\Request $request, $id) {
        $image = $request->file('image');
        $this->imageService->update($id, $image);
        return redirect('/');
    }

    public function delete( $id) {
        $this->imageService->delete($id);
        return redirect('/');
    }
}
