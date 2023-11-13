<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
class InvoiceController extends Controller
{
    public function Invoice($id)
    {
        $userName = DB::table('orders')->where('order_id', $id)
        ->join('users', 'users.id', '=', 'orders.user_id')->first();

        $data = DB::table('orders')->where('order_id', $id)->whereNot('order_status','0')
        ->select('products.*', 'orders.*')
        ->join('products', 'products.id', '=', 'orders.product_id')
        ->get();
        
        $pdf = PDF::loadView('pdfs.invoice',compact('data','userName'));
        
        return $pdf->download('OrderInvoice.pdf');
    }
}
