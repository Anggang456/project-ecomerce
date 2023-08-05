<?php

namespace App\Services\Midtrans;
use App\Models\User;
use App\Models\Produk;
use App\Models\Pesanan;
use App\Models\PesananDetail;
use Auth;
use Alert;
use Carbon\Carbon;
use Illuminate\Http\Request;

use Midtrans\Snap;

class CreateSnapTokenService extends Midtrans
{
    protected $order;

    public function __construct($pesanan)
    {
        parent::__construct();

        $this->pesanan = $pesanan;
    }

    public function checkout(Request $request) {
        
        $pesanan = Pesanan::where('users_id', Auth::user()->id)->where('status','unpaid')->first();
        $pesanan_details = collect();
        if(empty($pesanan))
        {
            return redirect('empty');
              
        }else{
            $pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get(); 
        }
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;
        
        $params = array(
            'transaction_details' => array(
                'order_id' => $pesanan->id,
                'gross_amount' => $pesanan->jumlah_harga,
            ),
            'customer_details' => array(
                'first_name' => Auth::user()->name,
                'email' => Auth::user()->email,
                'phone' => '08111222333',
            ),
        );
        if(empty($pesanan->jumlah_harga)){
            return redirect('empty');
        }
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        
        $user = User::where('id', Auth::user()->id)->first();

        return view('checkout', compact('pesanan','pesanan_details','snapToken'));
        
    }
}