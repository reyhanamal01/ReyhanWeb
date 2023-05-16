<?php

namespace App\Http\Controllers;

use App\Models\SungaiIndonesia;
use Illuminate\Http\Request;
use App\Http\Requests\SungaiIndonesiaRequest;


class SungaiIndonesiaController extends Controller
{
    public function index(){
        $SungaiIndonesia = SungaiIndonesia::get();
        return view ('index', compact('SungaiIndonesia') );
        }

        public function tambah(){
        return view ('tambah');
      }

      public function edit($id){
        $SungaiIndonesia = SungaiIndonesia::where('id', $id)->first();
        return view ('edit',compact('SungaiIndonesia'));
      }

      public function lihat($id){
        $SungaiIndonesia = SungaiIndonesia::where('id', $id)->first();
        return view ('lihat',compact('SungaiIndonesia'));
      }


    public function store(SungaiIndonesiaRequest $request)
    {
        $SungaiIndonesia = new SungaiIndonesia ();

        $SungaiIndonesia->nama_sungai     = $request->nama_sungai;
        $SungaiIndonesia->keterangan    =  $request->keterangan;

        $SungaiIndonesia->save();

        return redirect('/');
    } 
    
    public function update(SungaiIndonesiaRequest $request,$id)
    {
        $SungaiIndonesia = SungaiIndonesia::where('id', $id)->first();
        $SungaiIndonesia->nama_sungai    = $request->nama_sungai;
        $SungaiIndonesia->keterangan    =  $request->keterangan;
    
        $SungaiIndonesia->update();

        return redirect('/');
    }   

    public function hapus($id)
    {
        $SungaiIndonesia = SungaiIndonesia::where('id', $id)->first();

        $SungaiIndonesia->delete();

        return redirect('/');
    }  

}


