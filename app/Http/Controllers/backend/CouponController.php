<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupon;
class CouponController extends Controller
{
    public function index()
    {
        $coupons = Coupon::orderBy('id', 'desc')->get();
        return view('admin.products.coupon.index', compact('coupons'));
    }

    // Coupon Store
    public function store(Request $request)
    {
        Coupon::create([
            'code' => $request->code,
            'type' => $request->type ? $request->type : 'fixed',
            'value' => $request->value,
            'min_order_amount' => $request->min_order_amount ? $request->min_order_amount : 0,
            'max_discount_amount' => $request->max_discount_amount ? $request->max_discount_amount : 0,
            'start_date' => $request->start_date ? $request->start_date : date('Y-m-d'),
            'end_date' => $request->end_date ? $request->end_date : date('Y-m-d'),
            'status' => $request->status ? $request->status : 'active',
        ]);

        $notification = array(
            'message' => 'Coupon Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
