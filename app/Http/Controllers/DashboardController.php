<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_pemasukan;

class DashboardController extends Controller
{
    public function tampil(){
        $tb_pemasukan = tb_pemasukan::all();
        
        return view('spica.index',compact(['tb_pemasukan']));
    }
    // public function delete($id_pemasukan)
    // {
    //     $tb_pemasukan = tb_pemasukan::find($id_pemasukan);
    //     $tb_pemasukan->delete();
    //     return redirect('/dashboard');
    // }
    public function delete(string $id_pemasukan)
    {
        tb_pemasukan::where('id_pemasukan',$id_pemasukan)->delete();
        return redirect()->to('dashboard')->with('success');
    }
    public function edit($id_pemasukan)
        {
            // $tb_pemasukan = tb_pemasukan::find($id_pemasukan);
            $pemasukan = tb_pemasukan::find($id_pemasukan);
            dd($pemasukan); 
           return view('spica.edit');
             
        }
}
