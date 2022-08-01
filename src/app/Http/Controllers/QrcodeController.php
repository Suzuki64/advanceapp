<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserve;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrcodeController extends Controller
{
    
    public function reserveDetail($reserve_id)
    {
        $reserve = Reserve::find($reserve_id)
            ->first();

        return view('reservedetail',compact('reserve'));
    }

    public function qrcode(Request $request){
        
        $reserve_id = $request->input('id');
        $url = url("/reservedetail/$reserve_id");
        $qr_image = QrCode::size(300)->generate($url);

        return view('qrcode',compact('qr_image','url'));
    }
}
