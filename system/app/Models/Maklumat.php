<?php

namespace App\Models;
use Illuminate\Support\Str;

class Maklumat extends Model
{
    protected $table = 'maklumat';

    function handleUploadFoto()
    {
        $this->handleDelete();
        if (request()->hasFile('gambar')) {
            $gambar = request()->file('gambar');
            $destination = "image/maklumat";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $gambar->extension();
            $url =  $gambar->storeAs($destination, $filename);
            $this->gambar = "app/" . $url;
            $this->save();
        }
    }

    function handleDelete()
    {

        $gambar = $this->gambar;
        if ($gambar) {
            $path = public_path($gambar);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }
}
