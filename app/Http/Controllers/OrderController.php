<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index(Request $request){
        $nama = $request->query('nama');
        $jumlah = $request->query('jumlah');
        $jumlaharr = explode(",",$jumlah);
        $total = $request->query('total');
        $status = $request->query('status');
        $classdiskon = new Diskon($status,$total);
        $diskon = $classdiskon->diskon();
        $pay = $total-$diskon;
        // dd($nama."  ".$jumlah."   ".$total."   ".$status."           ".count($jumlaharr)."         ".$diskon."          ".$pay);
        $data = [
            "nama" => $nama,
            "jumlah" => count($jumlaharr),
            "total" => $total,
            "status" => $status,
            "diskon" => $diskon,
            "pay" => $pay,
        ];
        return view('result',compact('data'));
    }

    
}

interface Disc{
    public function diskon();
}

class Diskon implements Disc{
    public function __construct($status, $total) 
    { 
        $this->status = $status;
        $this->total = $total;
    }
    public function diskon()
    {
        if ($this->status == 'member' && $this->total>=100000) {
            return $this->total*0.2;
        }else if($this->status == 'member' && $this->total<100000){
            return $this->total*0.1;
        }else {
            return 0;
        }
    }
}