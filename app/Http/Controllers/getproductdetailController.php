<?php


namespace App\Http\Controllers;
use App\Product;
use Illuminate\Routing\Controller as BaseController;

class getproductdetailController extends BaseController
{
    public function getproductdetail($detail){
        $detail=product::find($detail);
        $idcate=$detail->idcate;
        $spcungloai=product::where('idcate',$idcate)->whereNotIn ('id', $detail)->get();
        return view('productdetail',compact('detail','spcungloai'));
    }
}
