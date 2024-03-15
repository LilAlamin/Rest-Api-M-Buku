<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\buku;

class bukuu extends Controller
{
    //
    public function index(){
        $data = buku::all();
        return response()->json($data);
    }

    public function store(Request $request){
        $data = new buku;

        $data->judul = $request->judul;
        $data->author = $request->author;
        $data->publish_date = $request->publish_date;

        $data->save();
        return response()->json([
            'message'=>'Buku berhasil ditambahkan'
        ]);

    }

    public function show($id){
        $data = buku::find($id);
        if(!empty($data)){
            return response()->json($data);
        }
        else{
            return response()->json([
                'message'=>'Buku tidak ditemukan'
            ],404);
        }
        
    }

    public function destroy($id){
        if(buku::where('id',$id)->exists()){
            $data = buku::find($id);
            $data ->delete();

            return response()->json([
                'message' => "Data Buku Berhasil Dihapus"
            ],202);
        }else{
            return response()->json([
                'message'=>"Data Buku Tidak Ditemukan"
            ],404);
        }
    }
}
