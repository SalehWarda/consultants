@extends('layouts.admin')

@section('title')
    تفاصيل الطلب
@endsection

@section('content')







    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">تفاصيل الطلب</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">تفاصيل الطلب</li>
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">الرئيسية</a></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            @include('partials.alert.alert')


            <div class="card  mb-4">

                <div class="card-header py-3 d-flex justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">الطلب ({{ $order->ref_id }})</h6>
                    <div class="ml-auto">
                        <form action="{{ route('admin.orders.update') }}" method="post">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="id" value="{{$order->id}}">
                            <div class="form-row align-items-center">
                                <label class="sr-only" for="inlineFormInputGroupUsername">إسم المستخدم</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">حالة الطلب</div>
                                    </div>
                                    <select class="form-control" name="order_status" style="outline-style: none;" onchange="this.form.submit()">
                                        <option value=""> إختر الحالة... </option>
                                        @foreach($order_status_array as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="col-8">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <th>رقم الطلب</th>
                                    <td>{{ $order->ref_id }}</td>
                                    <th>إسم المستخدم</th>
                                    <td><a href="">{{ $order->user->name }}</a></td>
                                </tr>

                                <tr>
                                    <th>تاريخ الطلب</th>
                                    <td>{{ $order->created_at->format('d-m-Y h:i a') }}</td>
                                    <th>حالة الطلب</th>
                                    <td>{!! $order->statusWithLabel() !!}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <th>المبلغ الفرعي</th>
                                    <td>{{ $order->currency . $order->subtotal }}</td>
                                </tr>
                                <tr>
                                    <th>كود الخصم</th>
                                    <td>{{ $order->discount_code }}</td>
                                </tr>
                                <tr>
                                    <th>قيمة الخصم</th>
                                    <td>{{ $order->currency . $order->discount }}</td>
                                </tr>

                                <tr>
                                    <th>الضريبة</th>
                                    <td>{{ $order->currency . $order->tax }}</td>
                                </tr>
                                <tr>
                                    <th>المبلغ</th>
                                    <td>{{ $order->currency . $order->total }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card  mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">العمليات على الطلب</h6>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>معاملة الطلب</th>
                            <th>رقم المعاملة</th>
                            <th>نتيجة المعاملة</th>
                            <th>تاريخ المعاملة</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($order->transactions as $transaction)
                            <tr>
                                <td>{{ $transaction->status($transaction->transaction) }}</td>
                                <td>{{ $transaction->transaction_number }}</td>
                                <td>{{ $transaction->payment_result }}</td>
                                <td>{{ $transaction->created_at->format('Y-m-d h:i a') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">No transactions found</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card  mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">تفاصيل الطلب</h6>
                </div>

                <div class="table-responsive d-flex">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>الباقات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($order->packages as $package)
                            <tr>
                                <td><a href="{{route('admin.orders.package-order-details',$package->id)}}">{{ $package->title }}</a></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="1">لا يوجد باقات</td>
                            </tr>
                        @endforelse


                        </tbody>
                    </table>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>الدومينات</th>
                        </tr>
                        </thead>
                        <tbody>

                        @forelse($domain as $order)
                            <tr>
                                <td><a href="#">{{ $order->domain  }}</a></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="1">لا يوجد دومينات </td>
                            </tr>
                        @endforelse


                        </tbody>
                    </table>
                </div>
            </div>



        </div>
    </div>








@endsection
