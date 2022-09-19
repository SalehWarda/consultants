<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CouponRequest;
use App\Models\Backend\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index()
    {
        //
        $coupons = Coupon::orderBy('id','DESC')->paginate(10);

        return view('pages.backend.coupons.index',compact('coupons'));
    }


    public function create()
    {
        //
    }


    public function store(CouponRequest $request)
    {

        Coupon::create($request->validated());

        toastr(trans('site.Created_successfully'),'success');
        return redirect()->back();
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(CouponRequest  $request)
    {
        $coupon = Coupon::findOrFail($request->coupon_id);
        $coupon->update($request->validated());
        toastr(trans('site.Updated_successfully'),'success');

        return redirect()->back();
    }


    public function destroy(Request $request)
    {

        $coupon = Coupon::findOrFail($request->coupon_id);
        $coupon->delete();
        toastr(trans('site.Deleted_successfully'),'success');

        return redirect()->back();
    }
}
