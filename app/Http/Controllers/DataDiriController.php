<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataDiri;
use DB;


class DataDiriController extends Controller
{
    //
    public function simpan(Request $request){
        // $post = DataDiri::create([
        //     'nama' => $request->nama,
        //     'alamat' => $request->alamat,
           
        // ]);
        
        
        $checkbox=explode(",",$request->arrCheckbox);
        foreach($checkbox as $i=>$c){
            DataDiri::where("id",$c)->update([
                'skor'=>$request->skor[$i],
                'skor2'=>$request->skor2[$i],
                'skor3'=>$request->skor3[$i]
            ]);
        }
        return redirect()->back();
    }

        public function tampildashboard()
        {
        $data = DB::table('data_diri')->select('*')->orderBy('updated_at','DESC')
                    ->get();
        $jumlah = count($data);
        return view('newpage', ['data' => $data, 'jumlahData' => $jumlah]);
        }

        public function getdata()
        {
            $data = DataDiri::select('*')
                    ->get();
            return response()->json($data);
        }
}
