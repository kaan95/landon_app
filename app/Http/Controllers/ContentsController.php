<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ContentsController extends Controller
{
    //
    public function home(Request $request)
    {
        $data = [];
        $data['version'] = '0.1.2';
        $data['name'] = 'Landon Hotel App';
        $last_updated = $request->session()->has('last_updated') ?
            $request->session()->pull('last_updated') : 'None';
        $data['last_updated'] = $last_updated;
        return view('contents/home', $data);
    }

    public function upload(Request $request)
    {
        $data = [];
        if( $request->isMethod('post'))
        {
            $this->validate(
                $request,
                [
                    'image_upload' => 'mimes:jpeg,bmp,png'
                ]
            );
            // take the uploaded file, and once it reaches our server we will move it to our public images folder
            // and name it attractions.jpg
            Input::file('image_upload')->move('images', 'attractions.jpg');
            return redirect('/');
        }
        return view('contents/upload', $data);
    }
}
