<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_pemasukan;

class PemasukanController extends Controller
{
    public function index(){
        $pemasukan = tb_pemasukan::all(); 
        return view('spica.pages.forms.pemasukan',compact(['pemasukan']));
    }
    public function create()
    {
        return view('/pemasukan');
    }
        public function store(Request $request)
        {
            // return view('spica.pages.forms.pemasukan');
            tb_pemasukan::create($request->except(['_token','submit']));
            return redirect('/pemasukan');
        }
        
        // public function edit($id)
        // {
        //     $tb_pemasukan = tb_pemasukan::find($id_pemasukan);
        //     //dd($pemasukan); 
        //     return view('spica.edit',compact(['pemasukan']));
             
        // }
         
// public function home(Request $request)
//         {
        
//             return view('spica.pages.forms.pemasukan');
//             pemasukan :: create($request->except(['_token','submit']));
//             return redirect('/pemasukan');
//         }


        }
  