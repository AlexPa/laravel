<?php

namespace App\services;

class ImageService
{
    public function getAll() : array {
        /**
         * $data @var \Illuminate\Database\Eloquent\Collection
         */
        $data = \Illuminate\Support\Facades\DB::table('images')->select(['*'])->get();

        //$images = $data->pluck('image')->all();
        return $data->all();
    }

    public function add(\Illuminate\Http\UploadedFile $image) : int {
        $path = $image->store('uploads');

        return \Illuminate\Support\Facades\DB::table('images')->insert([
            'image' => $path,
        ]);
    }

    public function getOne(int $id) : object {
        return \Illuminate\Support\Facades\DB::table('images')
            ->where('id', $id)->first();
    }

    public function update(int $id, \Illuminate\Http\UploadedFile $newImage) : int {
        $oldImage = \Illuminate\Support\Facades\DB::table('images')
            ->where('id', $id)->first();
        \Illuminate\Support\Facades\Storage::delete($oldImage->image);

        $filename = $newImage->store('uploads');
        return \Illuminate\Support\Facades\DB::table('images')
            ->where('id', $id)
            ->update([
                'image' => $filename
            ]);
    }

    public function delete(int $id) : int {
        $image = $this->getOne($id);
        \Illuminate\Support\Facades\Storage::delete($image->image);

        return \Illuminate\Support\Facades\DB::table('images')
            ->where('id', $id)
            ->delete([
                'id' => $id
            ]);
    }
}
