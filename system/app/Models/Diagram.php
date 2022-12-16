<?php

namespace App\Models;
use Illuminate\Support\Str;


class Diagram extends Model
{
    protected $table = 'diagram';

    function getTargetMasukStringAttribute(){
        return "Rp.".number_format($this->attributes['target_masuk']);
    }
    function getRealisasiMasukStringAttribute(){
        return "Rp.".number_format($this->attributes['realisasi_masuk']);
    }
    function getTargetKeluarStringAttribute(){
        return "Rp.".number_format($this->attributes['target_keluar']);
    }
    function getRealisasiKeluarStringAttribute(){
        return "Rp.".number_format($this->attributes['realisasi_keluar']);
    }
    function getTargetCukaiStringAttribute(){
        return "Rp.".number_format($this->attributes['target_cukai']);
    }
    function getRealisasiCukaiStringAttribute(){
        return "Rp.".number_format($this->attributes['realisasi_cukai']);
    }

    function handleUploadFoto()
    {
        $this->handleDelete();
        if (request()->hasFile('gambar')) {
            $foto = request()->file('gambar');
            $destination = "image/diagram";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $foto->extension();
            $url =  $foto->storeAs($destination, $filename);
            $this->gambar = "app/" . $url;
            $this->save();
        }
    }

    function handleDelete()
    {

        $foto = $this->gambar;
        if ($foto) {
            $path = public_path($foto);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }
}
