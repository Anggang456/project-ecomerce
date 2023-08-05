<?php

use App\Http\Controllers\Controller;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class SecurityController extends Controller
{
    public function payment_handler(Request $request){
        $json = json_decode($request->getContent());
        $hashed = hash('sha512',$json->order_id . $json->status_code . $json->gross_amount . env('MIDTRANS_SERVER_KEY'));
        
        if($hashed == $request->signature_key){
            if($request->transaction_status == 'capture'){
                $order = Pesanan::where('id', $json->order_id)->first();
                $order->update(['status'=> 'Success']);
            }
        }

        //status berhasil
        
    }
}
