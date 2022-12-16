<?php
namespace App\Http\Controllers\Client;
use App\Http\Controllers\Controller;
use App\Models\Direktori;

class ContactController extends Controller
{
    function showContact()
    {
        $data['list_direktori'] = Direktori::all();
        return view('content.front.contact',$data);
    }


}
