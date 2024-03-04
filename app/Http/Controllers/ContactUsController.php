<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FrontImgModel;
use App\Models\Blogpic;

class ContactUsController extends Controller
{

    public function index(){

        return view('contact');

    }

    public function aboutus(){

        return view('aboutus');

    }

    public function home(){

        $frontimg = FrontImgModel::all(); 
        return view('index')->with(compact('frontimg'));

        // return view('index');

    }

    public function raising(){

        return view('raisingawareness');

    }

    public function outreaching(){

        return view('outreaching');

    }

    public function promotinghardwork(){

        return view('promotinghardwork');

    }

    public function blog(){

        $frontimg = Blogpic::take(3)->get(); 
        return view('blog')->with(compact('frontimg'));
        

    }

   

    public function downloadd(){

    
        $file_path = public_path('temp/assets/img/documents/SIKU.pdf');
        return response()->download($file_path);

    }

    public function childprotection(){

    
        $file_path = public_path('temp/assets/img/documents/CHILD.pdf');
        return response()->download($file_path);

    }



}
