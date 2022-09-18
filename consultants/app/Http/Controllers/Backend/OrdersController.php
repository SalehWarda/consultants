<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Order;
use App\Models\Backend\OrderPackage;
use App\Models\Backend\Package;
use App\Models\User;
use App\Notifications\Backend\OrderNotification;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Order::orderByDesc('id')->paginate(10);


        return view('pages.backend.orders.index', compact('orders'));
    }





    public function show($id)
    {

        $order = Order::findOrFail($id);
        $domain = OrderPackage::whereOrderId($order->id)->get();

        $order_status_array = [
            '0' => 'New order',
            '1' => 'Paid',
            '2' => 'Under process',
            '3' => 'Finished',

        ];

        $key = array_search($order->order_status, array_keys($order_status_array));
        foreach ($order_status_array as $k => $v) {
            if ($k < $key) {
                unset($order_status_array[$k]);
            }
        }

        return view('pages.backend.orders.show', compact('order','domain', 'order_status_array'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request)
    {

        $order = Order::findOrFail($request->id);
        $customer = User::find($order->user_id);



            $order->update(['order_status'=> $request->order_status]);

            $order->transactions()->create([
                'transaction' => $request->order_status,
                'transaction_number'=> null,
                'payment_result'=> null,
            ]);

            $customer->notify(new OrderNotification($order));

            return back()->with([
                'message' => 'updated successfully',
                'alert-type' => 'success',
            ]);



    }

    public function destroy(Request $request)
    {

        $order = Order::findOrFail($request->order_id);
        $order->delete();

        toastr('تم حذف الطلب بنجاح', 'error');
        return redirect()->back();


    }

    public function packageOrderDetails($id)
    {
        $package = Package::whereId($id)->first();


        return view('pages.backend.orders.package_order_details',compact('package'));

    }  public function domainOrderDetails($id)
    {
        $package = Package::whereId($id)->first();


        return view('pages.backend.orders.domain_order_details',compact('package'));
    }
}
